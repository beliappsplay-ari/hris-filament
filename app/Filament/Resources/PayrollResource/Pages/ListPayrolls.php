<?php

namespace App\Filament\Resources\PayrollResource\Pages;

use App\Filament\Resources\PayrollResource;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\Ptkp;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Model;

class ListPayrolls extends ListRecords
{
    protected static string $resource = PayrollResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
            Action::make('Download All Salary Slip')
                ->color('info')
                ->icon('heroicon-m-document-arrow-down')
                ->form([
                    TextInput::make('period')
                        ->default(now()->format('Ym'))
                        // ->native()
                        // ->extraInputAttributes(['type' => 'month'])
                        ->required(),
                    Select::make('type')
                        ->label('Type')
                        ->options([
                            'Non Expatriate' => 'Non Expatriate',
                            'Expatriate' => 'Expatriate'
                        ])
                        ->default('Non Expatriat')
                        ->selectablePlaceholder(false)
                        ->required(),
                ])
                ->action(function (array $data) {
                    if (!isValidPeriod($data['period'])) {
                        Notification::make()
                            ->title('Error Period format')
                            ->danger()
                            ->send();
                        return;
                    }
                    $periodCarbon = Carbon::createFromFormat('Ymd', $data['period'] . '01');
                    $payrolls = Payroll::where('period', $periodCarbon->format('Y-m-d'))->with(['employee'])->get();
                    $payrolls->map(function ($payroll) {
                        $payroll->total_deduction = $payroll->deductions + $payroll->tax_ter_per_month + $payroll->jkk_jkm + $payroll->deduct_bpjs_pension + $payroll->deduct_bpjs_kesehatan + $payroll->insurance;
                        $payroll->total_income = $payroll->basic_salary + $payroll->insurance + $payroll->allowances;
                        $payroll->take_homepay = $payroll->total_income - $payroll->total_deduction;
                        return $payroll;
                    });
                    // dd($payrolls);
                    $pdf = Pdf::loadView('payrolls.slip', compact('payrolls'));
                    return response()->streamDownload(function () use ($pdf) {
                        echo $pdf->stream();
                    }, 'salary-slips.pdf');
                    // return $pdf->download('salary-slips.pdf');
                }),
            Action::make('Update Payroll')
                ->form([
                    TextInput::make('period')
                        ->default(now()->format('Ym'))
                        // ->native()
                        // ->extraInputAttributes(['type' => 'month'])
                        ->required(),
                    Select::make('type')
                        ->label('Type')
                        ->options([
                            'Non Expatriate' => 'Non Expatriate',
                            'Expatriate' => 'Expatriate'
                        ])
                        ->default('Non Expatriat')
                        ->selectablePlaceholder(false)
                        ->required(),
                ])
                ->action(function (array $data): void {
                    // dd(validatePeriod($data['period']));
                    if (!isValidPeriod($data['period'])) {
                        Notification::make()
                            ->title('Error Period format')
                            ->danger()
                            ->send();
                        return;
                    }

                    $periodCarbon = Carbon::createFromFormat('Ymd', $data['period'] . '01');
                    // dd($periodCarbon);
                    $employees = Employee::with(['contracts', 'personalData', 'otherIncomeTaxable'])->get();
                    $isPayrollClosed = Payroll::where('period', $periodCarbon->startOfMonth()->format('Y-m-d'))->where('is_closed',1)->first();
                    
                    if($isPayrollClosed){
                        Notification::make()
                            ->title("Payroll Period ".$periodCarbon->format('F Y').' cannot be updated because has been closed.')
                            ->warning()
                            ->send();
                        return;
                    }
                    $currentPayrolls = Payroll::where('period', $periodCarbon->startOfMonth()->format('Y-m-d'))->delete();
                    
                    foreach ($employees as $employee) {
                        // dd($employee);
                        $activeContract = $employee->activeContract();
                        if ($activeContract) {
                            // cek apakah status tax nya kosong
                            if (!$employee->personalData->tax) {
                                Notification::make()
                                    ->title($employee->full_name . "'s Payroll not updated, because Tax Status is NULL")
                                    ->danger()
                                    ->send();
                                break;
                            }

                            $ter = config('rollo.terStatus')[$employee->personalData->tax];
                            $otherIncomeTaxable = $employee->otherIncomeTaxable()->whereMonth('period', $periodCarbon->month)->whereYear('period', $periodCarbon->year)->get();

                            $otherIncomeTaxableSum = $otherIncomeTaxable->sum('amount');
                            $deductions = $employee->deductions()->whereMonth('period_timesheet', $periodCarbon->month)->whereYear('period_timesheet', $periodCarbon->year)->with(['deductionType'])->get();
                            $totalDeduction = $deductions->sum('amount');
                            $deductionDetail = [];
                            foreach ($deductions as $deduction) {
                                $deductionDetail[$deduction->deductionType->name] = $deduction->amount;
                            }
                            // dd(json_encode($deductionDetail));
                            // dd($otherIncomeTaxable);
                            $jkkJkm = $activeContract->basic_salary * (0.54 / 100);
                            $gross = $activeContract->basic_salary + $otherIncomeTaxableSum + config('rollo.bpjsKesehatanAmount') + config('rollo.insuranceAmount') + $jkkJkm;

                            $dataPtkp = Ptkp::where(function ($query) use ($activeContract, $ter) {
                                $query->where('ter', $ter);
                                $query->where('start', '<=', $activeContract->basic_salary ?? 0);
                                $query->where('end', '>=', $activeContract->basic_salary ?? 0);
                            })->first();
                            // APakah punya npwp
                            if ($employee->personalData->npwp) {
                                $taxTerPerMonth = ($dataPtkp->tarif / 100) * $gross * 1.2;
                            } else {
                                $taxTerPerMonth = ($dataPtkp->tarif / 100) * $gross;
                            }

                            $deductJht = ($activeContract->basic_salary + $otherIncomeTaxableSum) * (2 / 100);

                            $salaryAndIncome = $activeContract->basic_salary + $otherIncomeTaxableSum;
                            $deductBpjsPension = $salaryAndIncome > config('rollo.max_bpjs_pension') ? config('rollo.max_bpjs_pension') * (1 / 100) : $salaryAndIncome * (1 / 100);
                            $deductBpjsKesehatan = $salaryAndIncome > config('rollo.max_bpjs_kesehatah') ? config('rollo.max_bpjs_kesehatan') * (1 / 100) : $salaryAndIncome * (1 / 100);
                            // dd($taxTerPerMonth);
                            $payroll = Payroll::create([
                                'employee_id' => $employee->id,
                                'period' => $periodCarbon->startOfMonth(),
                                'ter' => $ter,
                                'basic_salary' => $activeContract->basic_salary,
                                'allowances' => $otherIncomeTaxableSum,
                                'deductions' => $totalDeduction,
                                'bpjs_kesehatan' => config('rollo.bpjsKesehatanAmount'),
                                'insurance' => config('rollo.insuranceAmount'),
                                'jkk_jkm' => $jkkJkm,
                                'tax_status' => $employee->personalData->tax,
                                'gross' => $gross,
                                'tax_ter_per_month' => $taxTerPerMonth,
                                'has_npwp' => $employee->personalData->npwp ? 1 : 0,
                                'deduct_jht' => $deductJht,
                                'deduct_bpjs_pension' => $deductBpjsPension,
                                'deduct_bpjs_kesehatan' => $deductBpjsKesehatan,
                                'net_income' => ($activeContract->basic_salary + $otherIncomeTaxableSum + config('rollo.insuranceAmount')) - ($taxTerPerMonth + $deductJht + $deductBpjsPension + $deductBpjsKesehatan),
                                'allowances_details' => $otherIncomeTaxable->toJson(),
                                'deduction_details' => $deductions->toJson(),
                                'contract_id' => $activeContract->id

                            ]);
                            $payroll->basic_salary_accumulation = $employee->basicSalaryAccumulation($periodCarbon);
                            $payroll->save();
                        }
                        // dd($basicSalaryAccumulation);

                    }

                    Notification::make()
                        ->title('Payroll Updated successfully')
                        ->success()
                        ->send();
                }),
            Action::make('Close Payroll')
                ->color('danger')
                ->form([
                    TextInput::make('period')
                        ->default(now()->format('Ym'))
                        // ->native()
                        // ->extraInputAttributes(['type' => 'month'])
                        ->required(),
                ])
                ->action(function (array $data): void {
                    if (!isValidPeriod($data['period'])) {
                        Notification::make()
                            ->title('Error Period format')
                            ->danger()
                            ->send();
                        return;
                    }

                    $periodCarbon = Carbon::createFromFormat('Ymd', $data['period'] . '01');
                    $currentPayrolls = Payroll::where('period', $periodCarbon->startOfMonth()->format('Y-m-d'))->get();
                    if($currentPayrolls->isEmpty()){
                        Notification::make()
                                    ->title("Payroll Period ".$periodCarbon->format('F Y').' not found')
                                    ->danger()
                                    ->send();
                        return;
                    }
                    
                    if($currentPayrolls->where('is_closed',0)->count() == 0){
                        Notification::make()
                                    ->title("Payroll Period ".$periodCarbon->format('F Y').' already closed')
                                    ->danger()
                                    ->send();
                        return;
                    }
                    // dd($currentPayrolls);
                    $payrolls = Payroll::where('period', $periodCarbon->startOfMonth()->format('Y-m-d'))->where('is_closed',0)->update(['is_closed' => 1]);
                    // dd($payrolls);
                    Notification::make()
                        ->title("Payroll Period ".$periodCarbon->format('F Y').' closed successfully')
                        ->success()
                        ->send();
                    
                })
        ];
    }
}

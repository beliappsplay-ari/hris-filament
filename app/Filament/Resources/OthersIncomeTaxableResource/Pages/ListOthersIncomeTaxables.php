<?php

namespace App\Filament\Resources\OthersIncomeTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeTaxableResource;
use App\Models\Advance;
use App\Models\Employee;
use App\Models\OthersIncomeTaxable;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonPeriod;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\DatePicker;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;

class ListOthersIncomeTaxables extends ListRecords
{
    protected static string $resource = OthersIncomeTaxableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('New Data'),
            ActionGroup::make([
                Action::make(__('phone_limit'))
                    ->label('Phone Allowance')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        //dd($action->getName());
                        $this->import($action);
                    }),
                Action::make(__('performance_review_amount'))
                    ->label('Performance Review')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        $this->import($action);
                    }),
                Action::make(__('parking_allowance'))
                    ->label('Parking Allowance')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        // dd($action->getName());
                        $this->import($action);
                    }),
                Action::make(__('relocating_allowance'))
                    ->label('Relocating Allowance')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        $this->import($action);
                    }),
                Action::make(__('position_allowance'))
                    ->label('Position Allowance')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        $this->import($action);
                    }),
                Action::make(__('sign_in_bonus'))
                    ->label('Sign In Bonus')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        $this->import($action);
                    }),
                Action::make(__('advance'))
                    ->label('Advance')
                    ->color('info')
                    ->requiresConfirmation()
                    ->action(function (Action $action): void {
                        $this->import($action);
                    }),
            ])
                ->label('Import')
                ->color('primary')
                ->button(),
        ];
    }

    public function import(Action $action)
    {
        //dd($action->getName());
        $period = now();

        OthersIncomeTaxable::whereMonth('period', $period->format('m'))
            ->where('type', $action->getLabel())
            ->delete();

        $employees = Employee::with(['contracts.performanceReviewHistories'])
            ->get();
        $contracts = [];
        foreach ($employees as $employee) {
            // Cek apakah Karyawan punya kontrak
            if ($employee->contracts->isNotEmpty()) {
                //  Cari Permanent Kontrak
                $contract = $employee->activeContract();
                
                if ($contract) {
                    $contracts[] = $contract;
                    // Import Kondisi untuk field2 yang ada di table contract
                    if ($contract->{$action->getName()}) {
                        if ($action->getName() == 'performance_review_amount') {
                            $this->performanceReviewFormula($contract);
                        } else {
                            OthersIncomeTaxable::insert([
                                'employee_id' => $employee->id,
                                'type' => $action->getLabel(),
                                'period' => $period,
                                'amount' => $contract->{$action->getName()}
                            ]);
                        }
                    } else {
                        // yang tidak ada di table contract
                        if ($action->getName() == 'advance') {
                            
                            $advances = Advance::where('employee_id', $contract->employee_id)
                                ->whereYear('release_on', $period->year)
                                ->whereMonth('release_on', $period->month)
                                ->whereNotNull('amount_release')
                                ->get();
                            foreach ($advances as $advance) {
                                OthersIncomeTaxable::insert([
                                    'employee_id' => $advance->employee_id,
                                    'type' => 'Advance',
                                    'period' => $period,
                                    'amount' => $advance->amount_release
                                ]);
                                if($advance->deduction){
                                    $advance->deduction()->delete();
                                }
                                $advance->deduction()->create([
                                    'type_of_deduction' => 1,
                                    'employee_id' => $advance->employee_id,
                                    'date_of_deduction' => $advance->release_on,
                                    'amount' => $advance->amount_release,
                                    'period_timesheet' => $advance->period
                                ]);
                            }
                        }
                    }
                }
            }
        }
        // dd($contracts);
        Notification::make()
            ->title($action->getLabel() . ' Imported successfully')
            ->success()
            ->send();
    }

    public function performanceReviewFormula($contract)
    {
        $now = CarbonImmutable::now();
        $startDayInNow = $now->startOfMonth();

        // kondisi pro rate
        if ($contract->join_date->year == $now->year && $contract->join_date->month == $now->month) {
            $totalWeekDay = $startDayInNow->diffInWeekdays($now->endOfMonth());
            $ratePerDay = $contract->performance_review_amount / $totalWeekDay;

            $daysOfWorkHours = $contract->join_date->diffInWeekdays($now->endOfMonth());

            $performanceReviewAmount = $ratePerDay * $daysOfWorkHours;
        } else {
            $performanceReviewAmount = $contract->performance_review_amount;
        }
        // dd($performanceReviewAmount);

        OthersIncomeTaxable::insert([
            'employee_id' => $contract->employee_id,
            'type' => 'Performance Review',
            'period' => $now,
            'amount' => $performanceReviewAmount
        ]);
    }
}

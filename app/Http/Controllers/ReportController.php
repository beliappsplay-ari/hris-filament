<?php

namespace App\Http\Controllers;

use App\Exports\BdForForEmployeeExport;
use App\Exports\BdToHtiExport;
use App\Exports\BdToHtiRumusExport;
use App\Exports\PersonalIdentificationExport;
use App\Exports\ResignListExport;
use Illuminate\Support\Facades\DB;
use App\Models\ContractResign;
use App\Models\Employee;
use App\Models\Payroll;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function generateReport(Request $request)
    {
        // dd($request->all());
        if (!isValidPeriod($request->period)) {
            return redirect()->route('filament.admin.pages.report')->with('error-period', 'TEst');
        }

        $period = Carbon::createFromFormat('Ymd', $request->period . '01');

        $data = [];
        $data['period'] = $period->format('F Y');

        if ($request->type == 'bd-hti') {
            $data['records'] = Payroll::where('period', $period->format('Y-m-d'))
                ->with(['employee.personalData', 'contract.currentPosition'])
                ->get()
                ->map(function ($item) {
                    $item->allowancesDetails = collect(json_decode($item->allowances_details));
                    $item->deductionDetails = collect(json_decode($item->deduction_details));
                    return $item;
                });
            // dd($data['records']);
            // return view('reports.exports.bd-to-hti',['records' => $data['records']]);
            return Excel::download(new BdToHtiExport($data), 'BD-HTI-' . $request->period . '.xlsx');
        }
        if ($request->type == 'bd-hti-rumus') {
            $data['records'] = Payroll::where('period', $period->format('Y-m-d'))
                ->with(['employee.personalData', 'contract.currentPosition','contract.previousEmployment'])
                ->get()
                ->map(function ($item) {
                    $item->allowancesDetails = collect(json_decode($item->allowances_details));
                    $item->deductionDetails = collect(json_decode($item->deduction_details));
                    return $item;
                });
            // dd($data['records']);
            // dd($data['records']->first()->allowancesDetails->where('type','THR')->first());
            // return view('reports.exports.bd-to-hti-rumus', ['records' => $data['records'],'period' => $data['period']]);
            return Excel::download(new BdToHtiRumusExport($data), 'BD-HTI-RUMUS-' . $request->period . '.xlsx');
        }
        if ($request->type == 'bd-employee') {
            $data['records'] = Payroll::where('period', $period->format('Y-m-d'))
                ->with(['employee.personalData', 'contract.currentPosition'])
                ->get()
                ->map(function ($item) {
                    $item->allowancesDetails = collect(json_decode($item->allowances_details));
                    $item->deductionDetails = collect(json_decode($item->deduction_details));
                    $item->total_deduction = $item->deductions + $item->tax_ter_per_month + $item->jkk_jkm + $item->deduct_bpjs_pension + $item->deduct_bpjs_kesehatan + $item->insurance;
                    $item->total_income = $item->basic_salary + $item->insurance + $item->allowances;
                    $item->take_homepay = $item->total_income - $item->total_deduction;
                    return $item;
                });
            // dd($data);
            // return view('reports.exports.bd-for-employee',['records' => $data['records'],'period' => $period]);
            return Excel::download(new BdForForEmployeeExport($data), 'BD-FOR-EMPLOYEE-' . $request->period . '.xlsx');
        }
        if ($request->type == 'personal-identification') {
            $data['records'] = Payroll::where('period', $period->format('Y-m-d'))
                ->with(['employee.personalData', 'contract.currentPosition', 'employee.additionalDetails', 'employee.educations','contract.currentHomebase','contract.currentDivision'])
                ->get()
                ->map(function ($item) {
                    $item->allowancesDetails = collect(json_decode($item->allowances_details));
                    if ($item->employee->educations->isNotEmpty()) {
                        $item->lastEducation = $item->employee->educations
                            ->sortByDesc(function ($item) {
                                return strtotime($item->period);
                            })->first();
                    }else{
                        $item->lastEducation = null;
                    }
                    return $item;
                });
            // dd($data['records']);
            // return view('reports.exports.personal-identification', ['records' => $data['records'], 'period' => $data['period']]);
            return Excel::download(new PersonalIdentificationExport($data), 'personal-identification' . $request->period . '.xlsx');
        }

        if ($request->type == 'resign-list') {
          $data['records'] = $employees = ContractResign::select([
        'employees.id',
        'employees.empno',
        'personal_data.first_name',
        'contracts.resign_date'
    ])
    ->leftJoin('personal_data', 'employees.id', '=', 'personal_data.employee_id')
    ->leftJoin('contracts', 'personal_data.employee_id', '=', 'contracts.employee_id')
    ->where('contracts.resign_date', '<', '2025-07-01')
    ->get()

            ->map(function ($item) {
                    $item->allowancesDetails = collect(json_decode($item->allowances_details));
                    return $item;
                });






         //  dd($data['records']);

            // return view('reports.exports.personal-identification', ['records' => $data['records'], 'period' => $data['period']]);
            return Excel::download(new ResignListExport($data), 'resign-list' . $request->period . '.xlsx');
        }
    }
}

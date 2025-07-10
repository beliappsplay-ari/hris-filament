<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function salarySlip(Payroll $payroll) {
        $payroll->load(['employee.personalData']);
        // dd($payroll->bpjs_pension);
        $payroll->total_deduction = $payroll->deductions + $payroll->tax_ter_per_month + $payroll->jkk_jkm + $payroll->deduct_bpjs_pension + $payroll->deduct_bpjs_kesehatan + $payroll->insurance;
        $payroll->total_income = $payroll->basic_salary + $payroll->insurance + $payroll->allowances;
        $payroll->take_homepay = $payroll->total_income - $payroll->total_deduction;
        $pdf = Pdf::loadView('payrolls.salary-slip', compact('payroll'));
        return $pdf->stream();
    }
}

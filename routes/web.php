<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ReportController;
use App\Models\Payroll;
use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return redirect()->route('filament.admin.pages.dashboard');
});
Route::get('/debug', [DebugController::class,'debug']);
Route::get('/slip',function(){
    $payroll = Payroll::find(60);
    $payroll->load(['employee.personalData']);
    // dd($payroll);
    $payroll->total_deduction = $payroll->deductions + $payroll->tax_ter_per_month + $payroll->jkk_jkm + $payroll->deduct_bpjs_pension + $payroll->deduct_bpjs_kesehatan + $payroll->insurance;
    $payroll->total_income = $payroll->basic_salary + $payroll->insurance + $payroll->allowances;
    $payroll->take_homepay = $payroll->total_income - $payroll->total_deduction;
    return view('slip-debug',compact(['payroll']));
});

Route::group(['middleware' => 'auth','prefix' => 'admin'],function(){
    Route::get('/contract/{contract}/print', [ContractController::class,'print'])->name('contracts.print');
    Route::get('/payroll/{payroll}/salary-slip',[PayrollController::class,'salarySlip'])->name('payroll.salary.slip');
    Route::post('/generate-report',[ReportController::class,'generateReport'])->name('reports.generate');
}) ;
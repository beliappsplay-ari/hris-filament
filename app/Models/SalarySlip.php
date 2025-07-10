<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalarySlip extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'basic_salary', 'wee_hours_income', 'overtime_income',
        'bt_allowance', 'position_allowance', 'performance_review_amount',
        'insurance_plan', 'tax_income', 'jamsostek', 'bpjs_pension', 'bpjs',
        'total_income', 'total_deduction', 'take_home_pay', 'period_from', 'period_to'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
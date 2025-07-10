<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReleaseSalaryProcess extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
        'department',
        'basic_salary',
        'additional_income',
        'deductions',
        'total_salary',
        'salary_month',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

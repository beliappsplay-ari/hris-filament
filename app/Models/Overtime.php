<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtime extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'basic_salary',
        'position_allowance',
        'performance_review',
        'phone_allowance',
        'parking_allowance',
        'one_and_half_weekdays_public_leave',
        'one_and_half_weekdays_public_leave_amount',
        'two_weekdays_public_leave',
        'two_weekdays_public_leave_amount',
        'two_weekend',
        'two_weekend_amount',
        'three_weekend',
        'three_weekend_amount',
        'four_weekend',
        'four_weekend_amount',
        'two_public_holiday',
        'two_public_holiday_amount',
        'three_public_holiday',
        'three_public_holiday_amount',
        'four_public_holiday',
        'four_public_holiday_amount',
        'total_hours',
        'amount',
        'remark',
        'period_month',
        'period_year'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

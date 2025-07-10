<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdo extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'period_process',
        'period_ts',
        'workday_hours',
        'workday',
        'holiday_hours',
        'holiday',
        'total_cdo_rounded',
        'remark'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

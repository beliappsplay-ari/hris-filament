<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeHours extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'period_process',
        'period_ts',
        'date_of_works',
        'total_day_per_month',
        'remark'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

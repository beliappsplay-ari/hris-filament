<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Deduction extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'type_of_deduction',
        'date_of_deduction',
        'period_timesheet',
        'total_days',
        'amount',
        'remark',
    ];

    protected function casts(): array
    {
        return [
            'period_timesheet' => 'datetime:Y-m-d',
        ];
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function deductionType(){
        return $this->belongsTo(DeductionType::class,'type_of_deduction');
    }

    public function deductionable(): MorphTo
    {
        return $this->morphTo();
    }
}

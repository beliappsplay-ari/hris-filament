<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'period',
        'shift_one',
        'shift_two',
        'shift_three',
        'off_two',
        'off_three',
        'amount'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

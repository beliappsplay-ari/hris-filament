<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'start_on',
        'end_on',
        'total_days',
        'reason',
        'period',
        'remark'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

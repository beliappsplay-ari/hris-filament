<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incentive extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'type',
        'amount',
        'award_date',
        'period',
        'description',
        'status',
        'payment_date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

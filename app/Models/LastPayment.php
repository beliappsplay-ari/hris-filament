<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastPayment extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'period',
        'gross_income',
        'thp_to_be_release',
        'release_on', 
        'amt_release', 
        'via'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function casts(){
        return [
            'period' => 'datetime'
        ];
    }
}

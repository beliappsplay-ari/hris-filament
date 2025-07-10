<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'company_name',
        'nature',
        'position',
        'period',
        'end_date',
        'reason_of_leaving',
        'address',
    ];
}

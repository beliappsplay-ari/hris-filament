<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsurancePlanHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'job_place_id',
        'personal_data_id',
        'effective_date',
        'current_insurance_plan',
        'old_insurance_plan',
        'reason',
        'remark',
    ];
}

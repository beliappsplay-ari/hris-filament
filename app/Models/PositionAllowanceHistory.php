<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionAllowanceHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'job_place_id',
        'effective_date',
        'current_allowance',
        'old_allowance',
        'ref_no',
    ];
}

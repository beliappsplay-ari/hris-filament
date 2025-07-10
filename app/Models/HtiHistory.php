<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HtiHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'job_place_id',
        'effective_date',
        'hti_id',
        'old_hti_id',
        'reason',
        'ref_no',
        'ref_date',
        'remark',
    ];
}

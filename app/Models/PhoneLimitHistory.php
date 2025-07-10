<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneLimitHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'current_phone_limit',
        'effective_date',
        'personal_data_id',
        'old_phone_limit',
        'reason',
        'remark',
        'field',
    ];
}

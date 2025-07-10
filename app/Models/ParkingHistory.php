<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'current_parking_amount',
        'effective_date',
        'personal_data_id',
        'old_parking_amount',
        'reason',
        'remark',
    ];
}

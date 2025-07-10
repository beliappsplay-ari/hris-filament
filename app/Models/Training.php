<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'type',
        'name',
        'period',
        'end_date',
        'place',
        'price',
        'length',
        'ref_no',
        'ref_date',
        'remark',
    ];
}

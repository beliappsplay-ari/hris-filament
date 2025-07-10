<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyDetail extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'status',
        'name',
        'sex',
        'date_marriage',
        'place_marriage',
        'birthday',
        'birth_place',
        'address',
        'homephone',
        'handphone',
        'occupation',
        'company',
        'type_of_education',
        'graduate'
    ];
}

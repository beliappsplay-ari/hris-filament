<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhateverLetter extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'ref_no',
        'desc_of_letter',
        'remark',
        'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

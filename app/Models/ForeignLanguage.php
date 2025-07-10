<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForeignLanguage extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'language', 'reading', 'writing', 'speaking' 
    ];
}

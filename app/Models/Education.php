<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends BaseModel
{
    use HasFactory;

    protected $table = 'education';
    
    protected $fillable = [
        'employee_id',
        'type',
        'name',
        'major',
        'period',
        'end_date',
        'place',
        'graduate',
    ];
}

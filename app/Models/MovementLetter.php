<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementLetter extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'ref_no',
        'date',
        'effective_date',
        'subject'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
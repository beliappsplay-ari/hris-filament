<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceLetter extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'ref_no',
        'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
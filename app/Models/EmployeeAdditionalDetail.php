<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAdditionalDetail extends BaseModel
{
    use HasFactory;

   
    protected $guarded = [];

    public function personalData()
    {
        return $this->belongsTo(PersonalData::class, 'employee_id');
    }
}

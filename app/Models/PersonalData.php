<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'first_name',
        'last_name',
        'birthday',
        'birthday_place',
        'sex',
        'religion',
        'marital_status',
        'nationality',
        'permanent_address',
        'permanent_city',
        'correspondence_address',
        'correspondence_city',
        'no_handphone',
        'ktp',
        'email',
        'passport',
        'npwp',
        'jamsostek',
        'tax',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($personalData) {
            $personalData->insuranceHistory()->delete();
        });
    }

    public function employeeContactDetails()
    {
        return $this->hasOne(EmployeeContactDetail::class, 'employee_id');
    }

    public function insuranceHistory()
    {
        return $this->hasMany(InsurancePlanHistory::class);
    }

    
}

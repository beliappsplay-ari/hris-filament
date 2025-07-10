<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeContactDetail extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'new_office_hp_dge',
        'provider_new_hp',
        'telp_limit_new_office_dge',
        'new_office_hp',
        'simcard_provider',
        'telp_limit_new_office_hp',
        'new_office_hp2_dge',
        'provider2_new_hp',
        'telp_limit_new_office_hp2_dge',
        'old_hp_dge',
        'old_provider',
        'telp_limit',
        'pilihan_simcard'
    ];

    public function personalData()
    {
        return $this->belongsTo(PersonalData::class, 'employee_id');
    }
}

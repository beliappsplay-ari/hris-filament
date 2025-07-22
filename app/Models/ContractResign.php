<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractResign extends Model
{
    protected $table = 'employees';
    protected $guarded = ['id'];

    //   public function contract(){
    //     return $this->belongsTo(Contract::class);
    // }

      public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function personalData()
{
    return $this->hasOne(PersonalData::class);
}

public function contracts()
{
    return $this->hasMany(Contract::class);
}

// Atau jika one-to-one untuk contract:
// public function contract()
// {
//     return $this->hasOne(Contract::class);
// }
}

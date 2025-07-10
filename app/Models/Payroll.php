<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $guarded = ['id'];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    protected function casts(): array
    {
        return [
            'period' => 'datetime',
        ];
    }

    public function contract(){
        return $this->belongsTo(Contract::class);
    }

    // public function getAllowancesDetailsAttribute(){
    //     // dd($this);
    //     return collect(json_decode($this->allowances_details));
    // }
    // public function getDeductionDetailsAttribute(){
    //     return collect(json_decode($this->deduction_details));
    // }
}

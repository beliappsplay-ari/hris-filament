<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'bank_name', 'bank_address', 'bank_account', 
        'account_name', 'bank_code', 'bankname2', 'bankadd'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
}

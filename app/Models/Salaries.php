<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'effective_date',
        'salary',
        'old_salary',
        'reason',
        'ref_no',
        'ref_date',
        'remark',
    ];

    public function contract(){
        return $this->belongsTo(Contract::class);
    }
}

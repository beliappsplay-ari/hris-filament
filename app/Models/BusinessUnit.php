<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessUnit extends Model
{
    protected $guarded = [];

    public function contracts(){
        return $this->belongsToMany(Contract::class)->withPivot(['id','effective_date','old_department','ref_no','reason','ref_date','remark']);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelocatingAllowance extends Model
{
    protected $guarded = ['id'];

    public function contract(){
        return $this->belongsTo(Contract::class);
    }
}

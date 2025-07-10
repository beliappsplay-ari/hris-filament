<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homebase extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name'];

    public function contracts(){
        return $this->belongsToMany(Contract::class)->withPivot(['id','effective_date','old_homebase','ref_no','reason','ref_date','remark']);
    }
}

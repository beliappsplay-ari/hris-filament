<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'description'];
    public function contracts(){
        return $this->belongsToMany(Contract::class)->withPivot(['id','effective_date','project_id','old_project_id','contract_id','reason','remark']);
    }
}

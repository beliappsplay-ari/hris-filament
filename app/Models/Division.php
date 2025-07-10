<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Airline extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name'];
}

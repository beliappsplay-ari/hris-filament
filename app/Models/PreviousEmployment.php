<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousEmployment extends BaseModel
{
    use HasFactory;

    protected $fillable = ['company'];

}

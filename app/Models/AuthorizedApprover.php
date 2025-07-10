<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizedApprover extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'code'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'country_id','code'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

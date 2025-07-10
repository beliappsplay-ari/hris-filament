<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'provinsi_id', 'kota_kabupaten'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}

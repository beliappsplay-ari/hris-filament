<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'kota_kabupaten_id'];

    public function kota()
    {
        return $this->belongsTo(Kota::class, 'kota_kabupaten_id');
    }
}

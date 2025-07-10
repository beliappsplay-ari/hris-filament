<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletenessPersonalData extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'ppf',
        'fc_transkrip_nilai',
        'fc_npwp',
        'spt_1721A1_tahun_2024',
        'cv',
        'fc_buku_tabungan',
        'fc_ktp',
        'fc_ijazah',
        'fc_skbb',
        'created_by',
        'updated_by'
    ];
}

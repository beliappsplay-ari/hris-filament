<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomebaseHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'job_place_id',
        'effective_date',
        'homebase',
        'old_homebase',
        'ref_no',
        'reason',
        'ref_date',
        'remark'
    ];

    public function newHomebase()
    {
        return $this->belongsTo(Homebase::class, 'homebase');
    }

    public function oldHomebase()
    {
        return $this->belongsTo(Homebase::class, 'old_homebase');
    }

    public function jobPlace(){
        return $this->belongsTo(JobPlace::class);
    }
}

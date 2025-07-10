<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceReviewHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'effective_date',
        'amount',
        'old_amount',
        'reason',
        'ref_no',
        'ref_date',
        'remark',
    ];

    public function contract(){
        return $this->belongsTo(Contract::class);
    }
}

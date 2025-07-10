<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusTimeSheet extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'division',
        'period',
        'received_on',
        'remark',
        'copy',
        'cek',
        'cat_a',
        'cat_b'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OthersIncomeTaxable extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'type',
        'amount',
        'remark',
        'period',
        'created_by',
        'created_at'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    protected function casts(): array
    {
        return [
            'period' => 'datetime',
        ];
    }
}

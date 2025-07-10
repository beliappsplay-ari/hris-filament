<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OthersIncomeNonTaxable extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'type',
        'period',
        'amount',
        'remark'
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

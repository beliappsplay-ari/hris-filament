<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoldSalaryProcess extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'fullname',
        'join_date',
        'resign_date',
        'further_status',
        'kary_berkesan',
        'hold',
        'info_spi_iti_tgi',
        'remark',
        'remark_1',
        'remark_2',
        'take_home_pay',
        'deduct_1',
        'amount_to_transfer_1',
        'deduct_remark',
        'deduct_2',
        'amount_to_transfer_2',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

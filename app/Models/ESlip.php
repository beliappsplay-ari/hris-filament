<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESlip extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'record_from',
        'record_to',
        'empno',
        'to_email',
        'check_to_email',
        'cc_email',
        'check_cc_email',
        'bcc_email',
        'period_payslip',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

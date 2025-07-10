<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentHistory extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'job_place_id',
        'effective_date',
        'department',
        'old_department',
        'reason',
        'ref_no',
        'ref_date',
        'remark',
    ];

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department');
    }

    public function old_departments()
    {
        return $this->belongsTo(Department::class, 'old_department');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessTrip extends BaseModel
{
    use HasFactory;

    protected $fillable = [
      'employee_id',
      'bt_id',
      'to_country',
      'to_city',
      'from_bt_date',
      'to_bt_date',
      'total_bt_duration',
      'period',
      'purpose',
      'remark',
      'created_by',
      'created_at',
      'updated_by',
      'updated_at'
  ];

  public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

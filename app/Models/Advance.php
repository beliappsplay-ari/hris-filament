<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends BaseModel
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($employee) {
            $relations = [
                'deduction',
            ];

            foreach ($relations as $relation) {
                // Check if the relation method exists and if it returns a valid instance
                if (method_exists($employee, $relation) && $employee->$relation() !== null) {
                    $relationInstance = $employee->$relation();

                    if (method_exists($relationInstance, 'delete')) {
                        $relationInstance->delete();
                    } elseif ($relationInstance) {
                        $relationInstance->delete();
                    }
                }
            }
        });
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    protected function casts(): array
    {
        return [
            'period' => 'datetime:Y-m-d',
            'release_on' => 'datetime:Y-m-d',
        ];
    }

    public function deduction(){
        return $this->morphOne(Deduction::class,'deductionable');
    }
}

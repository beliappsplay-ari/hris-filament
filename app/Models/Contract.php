<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($contract) {
            $relations = [
                'homebases',
                'divisions',
                'positions',
                'departments',
                'businessUnits',
                'projects'
            ];

            $hasMany = [
                'salaries',
                'relocatingAllowances',
                'positionAllowances',
                'originalWorkbases',
                'currentWorkbases',
                'phoneLimitHistories',
                'parkingHistories',
                'relocatingAllowances',
                'positionAllowances',
                'performanceReviewHistories'
            ];

            foreach ($relations as $relation) {
                $contract->$relation()->detach();
            }
            foreach ($hasMany as $hm) {
                $contract->$hm()->delete();
            }
        });
    }

    public function projects(){
        return $this->belongsToMany(Project::class)->withPivot(['id','effective_date','project_id','old_project_id','reason','remark']);
    }
    public function currentProject(){
        return $this->belongsTo(Project::class,'project');
    }
    public function previousEmployment(){
        return $this->belongsTo(PreviousEmployment::class,'previous_employment');
    }
    public function currentHomebase(){
        return $this->belongsTo(Homebase::class,'homebase');
    }

    public function homebases(){
        return $this->belongsToMany(Homebase::class)->withPivot(['id','effective_date','homebase_id','old_homebase','ref_no','reason','ref_date','remark']);
    }

    public function currentPosition(){
        return $this->belongsTo(Position::class,'position');
    }
    public function positions(){
        return $this->belongsToMany(Position::class)->withPivot(['id','effective_date','old_position','ref_no','reason','ref_date','remark']);
    }


    public function currentDivision(){
        return $this->belongsTo(Division::class,'division');
    }
    public function divisions(){
        return $this->belongsToMany(Division::class)->withPivot(['id','effective_date','old_division','ref_no','reason','ref_date','remark']);
    }

    public function currentDepartment(){
        return $this->belongsTo(Department::class,'department');
    }
    public function departments(){
        return $this->belongsToMany(Department::class)->withPivot(['id','effective_date','old_department','ref_no','reason','ref_date','remark']);
    }

    public function latestDepartment(){
        if($this->previousContract->departments->isNotEmpty()){
            return $this->previousContract->departments->sortByDesc('effective_date')->first();
        } 
    }

    public function currentBusinessUnit(){
        return $this->belongsTo(BusinessUnit::class,'business_unit');
    }
    public function businessUnits(){
        return $this->belongsToMany(BusinessUnit::class)->withPivot(['id','effective_date','old_business_unit','ref_no','reason','ref_date','remark']);
    }

    public function salaries(){
        return $this->hasMany(Salary::class);
    }
    public function originalWorkbases(){
        return $this->hasMany(OriginalWorkbase::class);
    }
    public function originalWorkbase(){
        return $this->belongsTo(OriginalWorkbase::class,'original_workbase');
    }
    public function currentWorkbases(){
        return $this->hasMany(CurrentWorkbase::class);
    }
    public function currentWorkbase(){
        return $this->belongsTo(CurrentWorkbase::class,'current_workbase');
    }

    public function phoneLimitHistories()
    {
        return $this->hasMany(PhoneLimitHistory::class, 'contract_id');
    }

    public function parkingHistories()
    {
        return $this->hasMany(ParkingHistory::class);
    }

    public function relocatingAllowances(){
        return $this->hasMany(RelocatingAllowance::class);
    }
    public function positionAllowances(){
        return $this->hasMany(PositionAllowance::class);
    }
    public function performanceReviewHistories(){
        return $this->hasMany(PerformanceReviewHistory::class);
    }

    public function basicsalaryHistories(){
        return $this->hasMany(BasicSalaryHistory::class);
    }

    // public function salaries

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    protected function casts(): array
    {
        return [
            'join_date' => 'datetime:Y-m-d',
            'start_payroll' => 'datetime:Y-m-d',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPlace extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'fullname',
        'hti_id',
        'previous_employment',
        'join_date_from_previous',
        'is_ex_nsn',
        'ex_nsn',
        'has_performance_review',
        'performance_review',
        'performance_review_effective_date',
        'performance_review_amount',
        'join_date',
        'rehire_date',
        'start_payroll',
        'employee_status',
        'tanggal_pengangkatan',
        'tanggal_permanent',
        'resign_date',
        'temporary_extension',
        'further_status',
        'reason_resign',
        'recon_payroll',
        'recon_process_in_payroll',
        'department',
        'division',
        'project',
        'position',
        'hay_level',
        'position_allowance',
        'has_sign_in_bonus',
        'sign_in_bonus',
        'sign_in_bonus_type',
        'homebase',
        'original_workbase',
        'current_workbase',
        'relocating_allowance',
        'additional_allowance',
        'ot_lumpsum',
        'immediate_superior',
        'basic_salary',
        'project_base',
        'area_payslip',
        'scope_of_salary',
        'cdo_entitlement',
        'wee_hours_entitlement',
        'jamsostek_entitlement',
        'insurance_entitlement',
        'expatriate_entitlement',
        'travel_allowance_entitlement',
        'thr',
        'tax_type',
        'category',
        'is_blacklisted',
        'blacklist_reason',
        'penalty_amount',
        'transfer_dates',
        'amount_transferred',
        'received_dates',
        'amount_received',
        'received_dge_bank',
        'fund_source',
        'bt_period',
        'allowance_bt_amount',
        'btid_no_settled_id',
        'exp_without_bt_amount',
        'start_claim_date',
        'deduct_last_payment_period',
        'deduct_last_payment_amount',
        'deduct_salary_period',
        'deduct_salary_amount',
        'recon_to_hti_in_brd_period',
        'amount_recon_to_hti',
        'password',
        'contract_start_date',
        'contract_end_date'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($jobPlace) {
            $relations = [
                'contractHistory',
                'salaryHistory',
                'homebaseHistory',
                'originalWorkbaseHistory',
                'currentWorkbaseHistory',
                'relocatingHistory',
                'additionalHistory',
                'OtLumpsumHistory',
                'positionHistory',
                'divisionHistory',
                'departmentHistory',
                'performanceReviewHistory',
                'temporaryMovementHistory',
                'positionAllowanceHistory',
                'htiReviewHistory',
                'businessUnitHistory'
            ];

            foreach ($relations as $relation) {
                $jobPlace->$relation()->delete();
            }
        });
    }

    public function divisions()
    {
        return $this->belongsTo(Division::class, 'division');
    }

    public function contractHistory()
    {
        return $this->hasMany(ContractHistory::class);
    }

    public function salaryHistory()
    {
        return $this->hasMany(SalaryHistory::class);
    }
    public function businessUnitHistory()
    {
        return $this->hasMany(BusinessUnitHistory::class);
    }

    public function homebaseHistory()
    {
        return $this->hasMany(HomebaseHistory::class);
    }

    public function originalWorkbaseHistory()
    {
        return $this->hasMany(OriginalWorkbaseHistory::class);
    }

    public function currentWorkbaseHistory()
    {
        return $this->hasMany(CurrentWorkbaseHistory::class);
    }

    public function relocatingHistory()
    {
        return $this->hasMany(RelocationHistory::class);
    }

    public function additionalHistory()
    {
        return $this->hasMany(RelocationHistory::class);
    }

    public function OtLumpsumHistory()
    {
        return $this->hasMany(RelocationHistory::class);
    }

    public function positionHistory()
    {
        return $this->hasMany(PositionHistory::class);
    }

    public function divisionHistory()
    {
        return $this->hasMany(DivisionHistory::class);
    }

    public function departmentHistory()
    {
        return $this->hasMany(DepartmentHistory::class);
    }

    public function performanceReviewHistory()
    {
        return $this->hasMany(PerformanceReviewHistory::class);
    }

    public function temporaryMovementHistory()
    {
        return $this->hasMany(TemporaryHistory::class, 'job_place_id');
    }

    public function positionAllowanceHistory()
    {
        return $this->hasMany(PositionAllowanceHistory::class);
    }

    public function htiReviewHistory()
    {
        return $this->hasMany(HtiHistory::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    // Employee.php
    public function employeeContactDetail()
    {
        return $this->hasOneThrough(EmployeeContactDetail::class, Employee::class, 'id', 'employee_id', 'employee_id', 'id');
    }

    public function employeeAdditionalDetail()
    {
        return $this->hasOneThrough(EmployeeAdditionalDetail::class, Employee::class, 'id', 'employee_id', 'employee_id', 'id');
    }
}

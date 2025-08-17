<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'empno',
        'image'
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($employee) {
            $relations = [
                'personalData',
                'contracts',
                'additionalDetails',
                'contactDetails',
                'bank',
                'bankLetters',
                'creditLetters',
                'educations',
                'familyDetails',
                'foreignLanguages',
                'jobHistories',
                'jobPlace',
                'movementLetters',
                'referenceLetters',
                'trainings',
                'warningLetters',
                'whateverLetters',
                'deductions',
                'weeHours',
                'overtime',
                'leave',
                'completenessPersonalData'
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
    public function payrolls() {
        return $this->hasMany(Payroll::class);
    }
    public function contracts(){
        return $this->hasMany(Contract::class);
    }


     public function contractsToview(){
        return $this->hasMany(Contract::class, 'employee_id');
    }

    public function activeContract(){
        $now = now();
        $activeContract = $this->contracts->wherein('employee_status',['Permanent','Contract'])
                            ->whereNull('resign_date')
                            ->whereNotNull('join_date')
                            ->where('start_payroll','<=',$now->format('Y-m-d'))
                            ->where('further_status','!=','Cancel Contract')
                            ->first();
        if(!$activeContract){
            $activeContract = $this->contracts()->where('contract_start_date', '<', $now->format('Y-m-d'))
                            ->whereNull('resign_date')
                            ->whereNotNull('join_date')
                            ->where('start_payroll','<=',$now->format('Y-m-d'))
                             ->whereNull('further_status')
                            //->where('further_status','!=','Cancel Contract')
                            ->orderBy('contract_start_date', 'desc')
                            ->first();
        }

        //dd($activeContract);
        return $activeContract;
    }

    public function basicSalaryAccumulation($period){
        // $basicSalaryAccumulation = $this->payrolls()->whereYear('period',$period->year)->get();

        $previousMonths = [];
        for ($month = 1; $month <= $period->month; $month++) {
            $previousMonths[] = $month;  // You can change 'F' to 'm' if you want month number
        }
        $previousPayrolls = $this->payrolls()->whereIn(\DB::raw('MONTH(period)'), $previousMonths)->get();
        // dd($previousPayrolls);
        return $previousPayrolls->sum('basic_salary');
        // dd($basicSalaryAccumulation);
    }

    public function personalData()
    {
        return $this->hasOne(PersonalData::class, 'employee_id');
    }

    public function additionalDetails()
    {
        return $this->hasOne(EmployeeAdditionalDetail::class, 'employee_id');
    }

    public function contactDetails()
    {
        return $this->hasOne(EmployeeContactDetail::class, 'employee_id');
    }

    public function bank()
    {
        return $this->hasMany(Bank::class, 'employee_id');
    }

    public function bankLetters()
    {
        return $this->hasMany(BankLetter::class, 'employee_id');
    }

    public function creditLetters()
    {
        return $this->hasMany(CreditLetter::class, 'employee_id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'employee_id');
    }

    public function familyDetails()
    {
        return $this->hasMany(FamilyDetail::class, 'employee_id');
    }

    public function foreignLanguages()
    {
        return $this->hasMany(ForeignLanguage::class, 'employee_id');
    }

    public function jobHistories()
    {
        return $this->hasMany(JobHistory::class, 'employee_id');
    }

    public function jobPlace()
    {
        return $this->hasOne(JobPlace::class, 'employee_id');
    }

    public function banks()
    {
        return $this->hasOne(Bank::class, 'employee_id');
    }

    public function movementLetters()
    {
        return $this->hasMany(MovementLetter::class, 'employee_id');
    }

    public function referenceLetters()
    {
        return $this->hasMany(ReferenceLetter::class, 'employee_id');
    }

    public function trainings()
    {
        return $this->hasMany(Training::class, 'employee_id');
    }

    public function warningLetters()
    {
        return $this->hasMany(WarningLetter::class, 'employee_id');
    }

    public function whateverLetters()
    {
        return $this->hasMany(WhateverLetter::class, 'employee_id');
    }

    public function deductions()
    {
        return $this->hasMany(Deduction::class);
    }

    public function otherIncomeTaxable()
    {
        return $this->hasMany(OthersIncomeTaxable::class);
    }

    public function otherIncomeNonTaxable()
    {
        return $this->hasMany(OthersIncomeNonTaxable::class);
    }

    public function advances()
    {
        return $this->hasMany(Advance::class);
    }

    public function cdo()
    {
        return $this->hasMany(Cdo::class);
    }

    public function incentive()
    {
        return $this->hasMany(Incentive::class);
    }

    public function weeHours()
    {
        return $this->hasMany(WeeHours::class);
    }

    public function overtime()
    {
        return $this->hasMany(Overtime::class);
    }

    public function leave()
    {
        return $this->hasMany(Leave::class);
    }

    public function statusTimesheet()
    {
        return $this->hasMany(StatusTimesheet::class);
    }

    public function completenessPersonalData()
    {
        return $this->hasOne(CompletenessPersonalData::class, 'employee_id');
    }
    public function isCompletePersonalData()
    {
        $completenessPersonalData = $this->completenessPersonalData;
        if($completenessPersonalData->ppf && $completenessPersonalData->fc_transkrip_nilai  && $completenessPersonalData->fc_npwp  && $completenessPersonalData->cv  && $completenessPersonalData->fc_buku_tabungan  && $completenessPersonalData->fc_ktp  && $completenessPersonalData->fc_ijazah  && $completenessPersonalData->fc_skbb){
            return true;
        }
        return false;
    }

    public function getFullNameAttribute(){
        $personalData = $this->personalData;
        return $personalData->first_name.' '.$personalData->last_name;
    }
    public function getEmpnoFullNameAttribute(){
        $personalData = $this->personalData;
        return $this->empno.' | '.$personalData->first_name.' '.$personalData->last_name;
    }

    
}

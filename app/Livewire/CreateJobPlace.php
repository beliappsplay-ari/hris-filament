<?php

namespace App\Livewire;

use App\Models\Employee;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

use function GuzzleHttp\default_ca_bundle;

class CreateJobPlace extends Component implements HasForms
{
    use InteractsWithForms;
    public $employee_id;
    protected $queryString = ['employee_id'];
    protected $employee;
    public ?array $data = [];
    
    public function mount(): void
    {
        $this->employee = Employee::find($this->employee_id)->load('personalData');
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        $fullname = $this->employee->personalData->first_name.' '.$this->employee->personalData->last_name;
        return $form
            ->schema([
                Hidden::make('employee_id')
                ->default($this->employee->id),
                TextInput::make('employee')
                    ->disabled()
                    ->default($fullname),
                Hidden::make('fullname')
                    ->default($fullname),
                TextInput::make('hti_id')
                    ->maxLength(255),
                Toggle::make('previous_employment'),
                DatePicker::make('join_date_from_previous'),
                Toggle::make('is_ex_nsn'),
                TextInput::make('ex_nsn_note')
                    ->maxLength(255),
                TextInput::make('performance_review_remark')
                    ->maxLength(255),
                TextInput::make('performance_review_reason')
                    ->maxLength(255),
                DatePicker::make('performance_review_effective_date'),
                TextInput::make('performance_review_amount')
                    ->numeric(),
                DatePicker::make('join_date'),
                DatePicker::make('rehire_date'),
                TextInput::make('start_payroll')
                    ->maxLength(255),
                TextInput::make('employee_status')
                    ->maxLength(255),
                DatePicker::make('tanggal_pengangkatan'),
                DatePicker::make('tanggal_permanent'),
                DatePicker::make('resign_date'),
                DatePicker::make('temporary_extension'),
                TextInput::make('further_status')
                    ->maxLength(255),
                Textarea::make('reason_resign')
                    ->columnSpanFull(),
                Toggle::make('recon_payroll'),
                TextInput::make('recon_process_in_payroll')
                    ->maxLength(255),
                TextInput::make('department')
                    ->maxLength(255),
                TextInput::make('division')
                    ->maxLength(255),
                TextInput::make('project')
                    ->maxLength(255),
                TextInput::make('position')
                    ->maxLength(255),
                TextInput::make('hay_level')
                    ->maxLength(255),
                TextInput::make('position_allowance')
                    ->numeric(),
                Toggle::make('has_sign_in_bonus'),
                TextInput::make('sign_in_bonus')
                    ->numeric(),
                TextInput::make('sign_in_bonus_type')
                    ->maxLength(255),
                TextInput::make('homebase')
                    ->maxLength(255),
                TextInput::make('original_workbase')
                    ->maxLength(255),
                TextInput::make('current_workbase')
                    ->maxLength(255),
                TextInput::make('relocating_allowance')
                    ->numeric(),
                TextInput::make('immediate_superior')
                    ->maxLength(255),
                TextInput::make('basic_salary')
                    ->numeric(),
                TextInput::make('project_base')
                    ->maxLength(255),
                TextInput::make('area_payslip')
                    ->maxLength(255),
                TextInput::make('scope_of_salary')
                    ->maxLength(255),
                Toggle::make('cdo_entitlement'),
                Toggle::make('wee_hours_entitlement'),
                Toggle::make('jamsostek_entitlement'),
                Toggle::make('insurance_entitlement'),
                Toggle::make('expatriate_entitlement'),
                Toggle::make('travel_allowance_entitlement'),
                TextInput::make('thr')
                    ->maxLength(255),
                TextInput::make('type_task')
                    ->maxLength(255),
                TextInput::make('category')
                    ->maxLength(255),
                Toggle::make('is_blacklisted'),
                Textarea::make('blacklist_reason')
                    ->columnSpanFull(),
                TextInput::make('penalty_amount')
                    ->numeric(),
                TextInput::make('transfer_dates'),
                TextInput::make('amount_transferred'),
                TextInput::make('received_dates'),
                TextInput::make('amount_received'),
                TextInput::make('received_dge_bank'),
                TextInput::make('fund_source')
                    ->maxLength(255),
                TextInput::make('bt_period'),
                TextInput::make('allowance_bt_amount'),
                TextInput::make('btid_no_settled_id'),
                TextInput::make('exp_without_bt_amount'),
                TextInput::make('start_claim_date'),
                DatePicker::make('deduct_last_payment_period'),
                TextInput::make('deduct_last_payment_amount')
                    ->numeric(),
                DatePicker::make('deduct_salary_period'),
                TextInput::make('deduct_salary_amount')
                    ->numeric(),
                DatePicker::make('recon_to_hti_in_brd_period'),
                TextInput::make('amount_recon_to_hti')
                    ->numeric(),
                TextInput::make('password')
                    ->password()
                    ->maxLength(255),
                DatePicker::make('contract_start_date'),
                DatePicker::make('contract_end_date'),
                Toggle::make('has_performance_review'),
            ])
            ->columns(2)
            ->statePath('data');
    }

    public function render()
    {
        return view('livewire.create-job-place');
    }

    public function create(): void
    {
        dd('test');
    }
}

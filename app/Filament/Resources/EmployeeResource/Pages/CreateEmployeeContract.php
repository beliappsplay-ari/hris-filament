<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Models\BusinessUnit;
use App\Models\Contract;
use App\Models\Department;
use App\Models\Division;
use App\Models\Employee;
use App\Models\FurtherStatus;
use App\Models\Homebase;
use App\Models\Position;
use App\Models\PreviousEmployment;
use App\Models\Project;
use Carbon\Carbon;
use Closure;
use Exception;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use Filament\Support\RawJs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Pelmered\FilamentMoneyField\Forms\Components\MoneyInput;

class CreateEmployeeContract extends Page implements HasForms
{
    use InteractsWithRecord, InteractsWithForms;
    protected static string $resource = EmployeeResource::class;

    protected static string $view = 'filament.resources.employee-resource.pages.create-employee-contract';
    protected static ?string $title = "Job Places Entittlement";
    public $data;
    public $previousContract;


    public function mount(int $record): void
    {
        $this->form->fill();
        $this->record = $this->resolveRecord($record);
        $this->record->load(['personalData', 'jobPlace']);
        // dd($this->previousContract);
    }


    public function getFormSchema(): array
    {
        // dd($this->record);
        $currentEmployee = $this->record instanceof Employee ? $this->record : Employee::find($this->record);
        // dd($currentEmployee);
        // $this->previousContract = $currentEmployee->contracts()->where('contract_start_date', '<', now())->orderBy('contract_start_date', 'desc')->first();
        // id terbesar milik employee tsb
        $this->previousContract = $currentEmployee
            ->contracts()
            ->latest('id')          // sama dengan ->orderBy('id', 'desc')
            ->first();
        if ($this->previousContract) {
            $this->previousContract->load('homebases', 'positions', 'divisions', 'departments', 'businessUnits', 'salaries', 'positionAllowances', 'performanceReviewHistories');
            $this->previousContract->latest_performance_review = $this->previousContract->performanceReviewHistories->sortByDesc('effective_date')->first();
        }
        // dd($this->previousContract);
        // dd($currentEmployee->contracts()->where('contract_start_date', '<', now())->orderBy('contract_start_date', 'desc')->first());
        return [
            Fieldset::make('Contract')
                ->inlineLabel()
                ->schema([
                    Select::make('employee_status')
                        ->default($this->previousContract ? $this->previousContract->employee_status : null)
                        ->options(config('rollo.employeeStatusOptions'))
                        ->live(),
                    TextInput::make('employee_status_remark')
                        ->default($this->previousContract ? $this->previousContract->employee_status_remark : null)
                        ->hidden(function (Get $get) {
                            return !$get('employee_status');
                        }),
                    DatePicker::make('contract_start_date')
                        ->default($this->previousContract ? $this->previousContract->contract_start_date : null)
                        ->hidden(function (Get $get) {
                            return $get('employee_status') != 'Contract';
                        }),
                    DatePicker::make('contract_end_date')
                        ->default($this->previousContract ? $this->previousContract->contract_end_date : null)
                        ->hidden(function (Get $get) {
                            return $get('employee_status') != 'Contract';
                        }),
                    DatePicker::make('tanggal_pengangkatan')
                        ->hidden(function (Get $get) {
                            return $get('employee_status') != 'Permanent';
                        })
                        ->default($this->previousContract ? $this->previousContract->tanggal_pengangkatan : null),
                    DatePicker::make('tanggal_permanent')
                        ->hidden(function (Get $get) {
                            return $get('employee_status') != 'Permanent';
                        })
                        ->default($this->previousContract ? $this->previousContract->tanggal_permanent : null),
                    TextInput::make('hti_id')
                        ->label('HTI ID')
                        ->default($this->previousContract ? $this->previousContract->hti_id : null)
                        ->maxLength(255),
                    Select::make('previous_employment')
                        ->default($this->previousContract ? $this->previousContract->previous_employment : null)
                        ->options(PreviousEmployment::all()->pluck('company', 'id')->toArray()),
                    TextInput::make('previous_employment_remark')
                        ->default($this->previousContract ? $this->previousContract->previous_employment_remark : null)
                        ->maxLength(255),
                    DatePicker::make('join_date_from_previous')
                        ->default($this->previousContract ? $this->previousContract->join_date_from_previous : null),
                    Toggle::make('is_ex_dge')
                        ->default($this->previousContract ? $this->previousContract->is_ex_dge : null)
                        ->inline(false),
                    TextInput::make('ex_dge_note')
                        ->default($this->previousContract ? $this->previousContract->ex_dge_note : null)
                        ->maxLength(255),
                    DatePicker::make('join_date')
                        ->default($this->previousContract ? $this->previousContract->join_date : null),
                    DatePicker::make('rehire_date')
                        ->default($this->previousContract ? $this->previousContract->rehire_date : null),
                    DatePicker::make('resign_date')
                        ->default($this->previousContract ? $this->previousContract->resign_date : null),
                    DatePicker::make('temporary_extension')
                        ->default($this->previousContract ? $this->previousContract->temporary_extension : null),
                    Select::make('further_status')
                        ->default($this->previousContract ? $this->previousContract->further_status : null)
                        ->options(FurtherStatus::all()->pluck('name', 'name')->toArray()),
                    Textarea::make('reason_resign')
                        ->default($this->previousContract ? $this->previousContract->reason_resign : null),
                    TextInput::make('hay_level')
                        ->default($this->previousContract ? $this->previousContract->hay_level : null)
                        ->maxLength(255),
                    TextInput::make('position_allowance')
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->default($this->previousContract ? $this->previousContract->position_allowance : null),

                    TextInput::make('position_allowance_remark')
                        ->maxLength(255),
                    TextInput::make('relocating_allowance')
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->default($this->previousContract ? $this->previousContract->relocating_allowance : null),
                    TextInput::make('additional_allowance')
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->default($this->previousContract ? $this->previousContract->additional_allowance : null),
                    TextInput::make('ot_lumpsum')
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->default($this->previousContract ? $this->previousContract->ot_lumpsum : null),
                    TextInput::make('immediate_superior')
                        ->default($this->previousContract ? $this->previousContract->immediate_superior : null)
                        ->maxLength(255),
                    Toggle::make('cdo_entitlement')
                        ->default($this->previousContract ? $this->previousContract->cdo_entitlement : null)
                        ->inline(false),
                    Toggle::make('wee_hours_entitlement')
                        ->default($this->previousContract ? $this->previousContract->wee_hours_entitlement : null)
                        ->inline(false),
                    Toggle::make('jamsostek_entitlement')
                        ->default($this->previousContract ? $this->previousContract->jamsostek_entitlement : null)
                        ->inline(false),
                    Toggle::make('insurance_entitlement')
                        ->default($this->previousContract ? $this->previousContract->insurance_entitlement : null)
                        ->inline(false),
                    Toggle::make('expatriate_entitlement')
                        ->default($this->previousContract ? $this->previousContract->ex_nsn_note : null)
                        ->inline(false),
                    Toggle::make('travel_allowance_entitlement')
                        ->default($this->previousContract ? $this->previousContract->travel_allowance_entitlement : null)
                        ->inline(false),
                    Select::make('start_payroll')
                        ->options(getPeriodOptions())
                        ->label("Start Payroll Period")
                        ->rules([
                            fn(): Closure => function (string $attribute, $value, Closure $fail) {
                                if (!isValidPeriod($value)) {
                                    $fail('The :attribute has invalid format. ex:202501 (format YYYYMM)');
                                }
                            },
                        ])
                        ->default($this->previousContract ? $this->previousContract->start_payroll->format("Ym") : null),
                    Select::make('stream')
                        ->options([
                            "ARP FGDP" => "ARP FGDP",
                            "ARP EXPERIENCE" => "ARP EXPERIENCE"
                        ])
                        ->default($this->previousContract ? $this->previousContract->stream : null),
                ])
                ->columns(1),
            Fieldset::make('Performance Review')
                ->schema([
                    Toggle::make('has_performance_review')
                        ->columnSpanFull()
                        ->live()
                        ->default($this->previousContract ? ($this->previousContract->performance_review_amount ? 1 : null) : null),
                    DatePicker::make('performance_review_effective_date')
                        ->default($this->previousContract ? ($this->previousContract->latest_performance_review ? $this->previousContract->latest_performance_review->effective_date : null) : null)
                        ->hidden(function (Get $get) {
                            return !$get('has_performance_review');
                        }),
                    TextInput::make('performance_review_amount')
                        ->default($this->previousContract ? $this->previousContract->performance_review_amount : null)
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->hidden(function (Get $get) {
                            return !$get('has_performance_review');
                        }),
                    TextInput::make('performance_review_remark')
                        ->default($this->previousContract ? ($this->previousContract->latest_performance_review ? $this->previousContract->latest_performance_review->remark : null) : null)
                        ->maxLength(255)
                        ->hidden(function (Get $get) {
                            return !$get('has_performance_review');
                        }),
                    TextInput::make('performance_review_reason')
                        ->default($this->previousContract ? ($this->previousContract->latest_performance_review ? $this->previousContract->latest_performance_review->reason : null) : null)
                        ->maxLength(255)
                        ->hidden(function (Get $get) {
                            return !$get('has_performance_review');
                        }),
                ])
                ->columns(2),
            Fieldset::make('Placement')
                ->schema([
                    Section::make('Department')
                        ->schema([
                            Select::make('department')
                                ->default($this->previousContract ? $this->previousContract->department : null)
                                ->options(Department::all()->pluck('name', 'id')),
                            TextInput::make('department_remark')
                                ->default($this->previousContract ? $this->previousContract->departments->isNotEmpty() ? $this->previousContract->departments->sortByDesc('effective_date')->first()->pivot->remark : null : null),
                            TextInput::make('department_reason')
                                ->default($this->previousContract ? $this->previousContract->departments->isNotEmpty() ? $this->previousContract->departments->sortByDesc('effective_date')->first()->pivot->reason : null : null),
                        ])
                        ->columns(3),
                    Section::make('Division')
                        ->schema([
                            Select::make('division')
                                ->default($this->previousContract ? $this->previousContract->division : null)
                                ->options(Division::all()->pluck('name', 'id')),
                            TextInput::make('division_remark')
                                ->default($this->previousContract ? $this->previousContract->divisions->isNotEmpty() ? $this->previousContract->divisions->sortByDesc('effective_date')->first()->pivot->remark : null : null),
                            TextInput::make('division_reason')
                                ->default($this->previousContract ? $this->previousContract->divisions->isNotEmpty() ? $this->previousContract->divisions->sortByDesc('effective_date')->first()->pivot->reason : null : null),

                        ])
                        ->columns(3),
                    Section::make('Project')
                        ->schema([
                            Select::make('project')
                                ->default($this->previousContract ? $this->previousContract->project : null)
                                ->options(Project::all()->pluck('name', 'id')),
                            // TextInput::make('project_remark')
                            //     ->default($this->previousContract ? $this->previousContract->projects->sortByDesc('effective_date')->first()->pivot->remark : null),
                            // TextInput::make('project_reason')
                            //     ->default($this->previousContract ? $this->previousContract->projects->sortByDesc('effective_date')->first()->pivot->reason : null),
                        ])
                        ->columns(3),
                    Section::make('Position')
                        ->schema([
                            Select::make('position')
                                ->default($this->previousContract ? $this->previousContract->position : null)
                                ->options(Position::all()->pluck('title', 'id')),
                            TextInput::make('position_remark')
                                ->default($this->previousContract ? $this->previousContract->positions->isNotEmpty() ? $this->previousContract->positions->sortByDesc('effective_date')->first()->pivot->remark : null : null),
                            TextInput::make('position_reason')
                                ->default($this->previousContract ? $this->previousContract->positions->isNotEmpty() ? $this->previousContract->positions->sortByDesc('effective_date')->first()->pivot->reason : null : null),

                        ])
                        ->columns(3),
                    Section::make('Business Unit')
                        ->schema([
                            Select::make('business_unit')
                                ->default($this->previousContract ? $this->previousContract->business_unit : null)
                                ->options(BusinessUnit::all()->pluck('name', 'id')),
                            TextInput::make('business_unit_remark')
                                ->default($this->previousContract ? $this->previousContract->businessUnits->isNotEmpty() ? $this->previousContract->businessUnits->sortByDesc('effective_date')->first()->pivot->remark : null : null),
                            TextInput::make('business_unit_reason')
                                ->default($this->previousContract ? $this->previousContract->businessUnits->isNotEmpty() ? $this->previousContract->businessUnits->sortByDesc('effective_date')->first()->pivot->reason : null : null),
                        ])
                        ->columns(3),
                    Section::make('Homebase')
                        ->schema([
                            Select::make('homebase')
                                ->default($this->previousContract ? $this->previousContract->homebase : null)
                                ->options(Homebase::all()->pluck('name', 'id'))
                                ->live()
                                ->afterStateUpdated(function (Select $component, Get $get, Set $set) {
                                    // dd($component->getOptionLabel());
                                    $set('original_workbase', $component->getOptionLabel());
                                    $set('current_workbase', $component->getOptionLabel());
                                }),
                            TextInput::make('homebase_remark')
                                ->default($this->previousContract ? $this->previousContract->homebases->isNotEmpty() ? $this->previousContract->homebases->sortByDesc('effective_date')->first()->pivot->remark : null : null),
                            TextInput::make('homebase_reason')
                                ->default($this->previousContract ? $this->previousContract->homebases->isNotEmpty() ? $this->previousContract->homebases->sortByDesc('effective_date')->first()->pivot->reason : null : null),
                        ])
                        ->columns(3),
                    TextInput::make('project_base')
                        ->default($this->previousContract ? $this->previousContract->project_base : null)
                        ->maxLength(255),
                    TextInput::make('original_workbase')
                        ->default($this->previousContract ? $this->previousContract->original_workbase : null)
                        ->maxLength(255)
                        ->readOnly(),
                    TextInput::make('current_workbase')
                        ->default($this->previousContract ? $this->previousContract->current_workbase : null)
                        ->maxLength(255)
                        ->readOnly(),
                ])
                ->columns(3),
            Fieldset::make('Bonus')
                ->schema([
                    Section::make('Salary')
                        ->schema([
                            TextInput::make('basic_salary')
                                ->default($this->previousContract ? $this->previousContract->basic_salary : null)
                                ->mask(RawJs::make('$money($input)'))
                                ->stripCharacters(',')
                                ->numeric(),
                            TextInput::make('basic_salary_remark')
                                ->default($this->previousContract ? $this->previousContract->salaries->isNotEmpty() ? $this->previousContract->salaries->sortByDesc('effective_date')->first()->remark : null : null),
                            TextInput::make('basic_salary_reason')
                                ->default($this->previousContract ? $this->previousContract->salaries->isNotEmpty() ? $this->previousContract->salaries->sortByDesc('effective_date')->first()->reason : null : null),
                        ])
                        ->columns(3),
                    Toggle::make('has_sign_in_bonus')
                        ->inline(false)
                        ->live()
                        ->default($this->previousContract ? $this->previousContract->has_sign_in_bonus : null),
                    TextInput::make('sign_in_bonus')
                        ->default($this->previousContract ? $this->previousContract->sign_in_bonus : null)
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                        ->hidden(function (Get $get) {
                            return !$get('has_sign_in_bonus');
                        }),
                    Radio::make('sign_in_bonus_type')
                        ->default($this->previousContract ? $this->previousContract->sign_in_bonus_type : null)
                        ->options(config('rollo.signInBonusTypeOptions'))
                        ->inline(false)
                        ->hidden(function (Get $get) {
                            return !$get('has_sign_in_bonus');
                        }),
                    Select::make('thr')
                        ->default($this->previousContract ? $this->previousContract->thr : null)
                        ->options(config('rollo.thrOptions'))
                        ->hidden(function (Get $get) {
                            return !$get('has_sign_in_bonus');
                        })
                ])
                ->columns(2),
            Fieldset::make('Phone Allowance')
                ->schema([
                    Section::make()
                        ->schema([
                            TextInput::make('phone_limit')
                                ->default($this->previousContract ? $this->previousContract->phone_limit : null)
                                ->mask(RawJs::make('$money($input)'))
                                ->stripCharacters(',')
                                ->numeric(),
                            TextInput::make('phone_limit_remark')
                                ->default($this->previousContract ? $this->previousContract->phoneLimitHistories->isNotEmpty() ? $this->previousContract->phoneLimitHistories->sortByDesc('effective_date')->first()->remark : null : null),
                            TextInput::make('phone_limit_reason')
                                ->default($this->previousContract ? $this->previousContract->phoneLimitHistories->isNotEmpty() ? $this->previousContract->phoneLimitHistories->sortByDesc('effective_date')->first()->reason : null : null),
                        ])
                        ->columns(3),
                ]),
            Fieldset::make('Parking Allowance')
                ->schema([
                    Section::make()
                        ->schema([
                            TextInput::make('parking_allowance')
                                ->default($this->previousContract ? $this->previousContract->parking_allowance : null)
                                ->mask(RawJs::make('$money($input)'))
                                ->stripCharacters(',')
                                ->numeric(),
                            TextInput::make('parking_allowance_remark')
                                ->default($this->previousContract ? $this->previousContract->parkingHistories->isNotEmpty() ? $this->previousContract->parkingHistories->sortByDesc('effective_date')->first()->remark : null : null),
                            TextInput::make('parking_allowance_reason')
                                ->default($this->previousContract ? $this->previousContract->parkingHistories->isNotEmpty() ? $this->previousContract->parkingHistories->sortByDesc('effective_date')->first()->reason : null : null),
                        ])
                        ->columns(3),
                ]),
            Fieldset::make('Others')
                ->schema([
                    Select::make('tax_type')
                        ->default($this->previousContract ? $this->previousContract->tax_type : null)
                        ->options(config('rollo.taxTypeOptions')),
                    Select::make('category')
                        ->default($this->previousContract ? $this->previousContract->category : null)
                        ->options(config('rollo.categoryOptions'))
                ])
                ->columns(2),
            Fieldset::make('Penalty Data')
                ->schema([
                    Toggle::make('is_blacklisted')
                        ->inline()
                        ->live(),
                    TextInput::make('blacklist_reason')
                        ->hidden(function (Get $get) {
                            return !$get('is_blacklisted');
                        }),
                    TextInput::make('penalty_amount')
                        ->default($this->previousContract ? $this->previousContract->penalty_amount : null)
                        ->mask(RawJs::make('$money($input)'))
                        ->stripCharacters(',')
                        ->numeric()
                ])
                ->columns(2)

        ];
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function create()
    {
        // dd($this->data);
        $this->form->validate();
        $datatoExcludes = [
            'department_remark',
            'department_reason',
            'division_remark',
            'division_reason',
            'project_remark',
            'project_reason',
            'position_remark',
            'position_reason',
            'homebase_remark',
            'homebase_reason',
            'business_unit_remark',
            'business_unit_reason',
            'basic_salary_remark',
            'basic_salary_reason',
            'phone_limit_remark',
            'phone_limit_reason',
            'parking_allowance_remark',
            'parking_allowance_reason',
            'has_performance_review',
            'performance_review_remark',
            'performance_review_reason',
            'performance_review_effective_date',
            'position_allowance_remark'
        ];

        $nonContractData = [];
        foreach ($datatoExcludes as $datatoExclude) {
            $nonContractData[$datatoExclude] = array_key_exists($datatoExclude, $this->data) ? $this->data[$datatoExclude] : null;
        }
        // dd($nonContractData);


        $this->data['employee_id'] = $this->record->id;
        $this->data['basic_salary'] = $this->data['basic_salary'] ? str_replace(',', '', $this->data['basic_salary']) : null;
        $this->data['position_allowance'] = $this->data['position_allowance'] ? str_replace(',', '', $this->data['position_allowance']) : null;
        $this->data['relocating_allowance'] = $this->data['relocating_allowance'] ? str_replace(',', '', $this->data['relocating_allowance']) : null;
        $this->data['additional_allowance'] = $this->data['additional_allowance'] ? str_replace(',', '', $this->data['additional_allowance']) : null;
        $this->data['ot_lumpsum'] = $this->data['ot_lumpsum'] ? str_replace(',', '', $this->data['ot_lumpsum']) : null;
        $this->data['performance_review_amount'] = $this->data['performance_review_amount'] ? str_replace(',', '', $this->data['performance_review_amount']) : null;
        $this->data['sign_in_bonus'] = $this->data['sign_in_bonus'] ? str_replace(',', '', $this->data['sign_in_bonus']) : null;
        $this->data['penalty_amount'] = $this->data['penalty_amount'] ? str_replace(',', '', $this->data['penalty_amount']) : null;
        $this->data['phone_limit'] = $this->data['phone_limit'] ? str_replace(',', '', $this->data['phone_limit']) : null;
        $this->data['parking_allowance'] = $this->data['parking_allowance'] ? str_replace(',', '', $this->data['parking_allowance']) : null;
        // dd($this->data);

        $this->data = array_diff_key($this->data, array_flip($datatoExcludes));
        $this->data['start_payroll'] = Carbon::createFromFormat('Ymd', $this->data['start_payroll'] . '01')->format('Y-m-d');
        // dd($this->data);
        DB::beginTransaction();
        try {
            $this->data = array_map(function ($item) {
                // dd($item);
                if ($item == "") {
                    return null;
                }
                return $item;
            }, $this->data);
            // dd($this->data);
            $contract = Contract::create($this->data);
            $contractDate = $contract->employee_status == 'Contract' ? $contract->contract_start_date : $contract->tanggal_pengangkatan;
            if ($this->data['homebase']) {
                $contract->homebases()->attach($this->data['homebase'], [
                    'effective_date' => $contractDate,
                    'reason' => $nonContractData['homebase_reason'],
                    'remark' => $nonContractData['homebase_remark'],
                ]);
            }
            if ($this->data['project']) {
                $contract->projects()->attach($this->data['project'], [
                    'effective_date' => $contractDate,
                ]);
            }
            if ($this->data['department']) {
                $contract->departments()->attach($this->data['department'], [
                    'effective_date' => $contractDate,
                    'reason' => $nonContractData['department_reason'],
                    'remark' => $nonContractData['department_remark'],
                ]);
            }

            if ($this->data['division']) {
                $contract->divisions()->attach($this->data['division'], [
                    'effective_date' => $contractDate,
                    'reason' => $nonContractData['division_reason'],
                    'remark' => $nonContractData['division_remark'],
                ]);
            }
            if ($this->data['position']) {
                $contract->positions()->attach($this->data['position'], [
                    'effective_date' => $contractDate,
                    'reason' => $nonContractData['position_reason'],
                    'remark' => $nonContractData['position_remark'],
                ]);
            }
            if ($this->data['business_unit']) {
                $contract->businessUnits()->attach($this->data['business_unit'], [
                    'effective_date' => $contractDate,
                    'reason' => $nonContractData['business_unit_reason'],
                    'remark' => $nonContractData['business_unit_remark'],
                ]);
            }
            if ($this->data['basic_salary']) {
                $contract->salaries()->create([
                    'effective_date' => $contractDate,
                    'salary' => $this->data['basic_salary'],
                    'reason' => $nonContractData['basic_salary_reason'],
                    'remark' => $nonContractData['basic_salary_remark'],
                    'currency' => 'IDR'
                ]);
            }
            if ($this->data['relocating_allowance']) {
                $contract->relocatingAllowances()->create([
                    'effective_date' => $contractDate,
                    'amount' => $this->data['relocating_allowance'],
                ]);
            }
            if ($this->data['additional_allowance']) {
                $contract->additionalAllowances()->create([
                    'effective_date' => $contractDate,
                    'amount' => $this->data['additional_allowance'],
                ]);
            }
            if ($this->data['ot_lumpsum']) {
                $contract->otLumpsums()->create([
                    'effective_date' => $contractDate,
                    'amount' => $this->data['ot_lumpsum'],
                ]);
            }
            if ($this->data['position_allowance']) {
                $contract->positionAllowances()->create([
                    'effective_date' => $contractDate,
                    'current_allowance' => $this->data['position_allowance'],
                    'remark' => $nonContractData['position_allowance_remark'],
                ]);
            }
            $contract->originalWorkbases()->create([
                'effective_date' => $contractDate,
                'original_workbase' => $this->data['original_workbase']
            ]);
            $contract->currentWorkbases()->create([
                'effective_date' => $contractDate,
                'current_workbase' => $this->data['current_workbase']
            ]);
            if ($this->data['phone_limit']) {
                $contract->phoneLimitHistories()->create([
                    'effective_date' => $contractDate,
                    'current_phone_limit' => $this->data['phone_limit'],
                    'reason' => $nonContractData['phone_limit_reason'],
                    'remark' => $nonContractData['phone_limit_remark'],
                ]);
            }

            if ($this->data['parking_allowance']) {
                $contract->parkingHistories()->create([
                    'effective_date' => $contractDate,
                    'current_parking_amount' => $this->data['parking_allowance'],
                    'reason' => $nonContractData['parking_allowance_reason'],
                    'remark' => $nonContractData['parking_allowance_remark'],
                ]);
            }
            if ($nonContractData['has_performance_review']) {
                $contract->performanceReviewHistories()->create([
                    'effective_date' => $nonContractData['performance_review_effective_date'],
                    'amount' => $this->data['performance_review_amount'],
                    'reason' => $nonContractData['performance_review_reason'],
                    'remark' => $nonContractData['performance_review_remark'],
                ]);
            }
            DB::commit();
            $this->redirect(route('filament.admin.resources.contracts.view', $contract));
            Notification::make()
                ->title('Saved successfully')
                ->success()
                ->send();
        } catch (Exception $e) {
            DB::rollBack();
            Notification::make()
                ->title($e->getMessage())
                ->danger()
                ->send();
        }
    }


    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.resources.employees.index') => 'Employees',
            route('filament.admin.resources.employees.view', $this->record) => $this->record->personalData->first_name . ' ' . $this->record->personalData->last_name,
            '#' => 'Job Placement',

        ];
    }

    public function getTitle(): string
    {
        return $this->record->personalData->first_name . ' ' . $this->record->personalData->last_name;
    }
}

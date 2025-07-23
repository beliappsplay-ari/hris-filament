<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContracResource\RelationManagers\PhoneLimitHistoriesRelationManager;
use App\Filament\Resources\ContractResource\Pages;
use App\Filament\Resources\ContractResource\RelationManagers;
use App\Filament\Resources\ContractResource\RelationManagers\BusinessUnitsRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\CurrentWorkbasesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\DepartmentsRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\DivisionsRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\HomebasesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\OriginalWorkbasesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\ParkingHistoriesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\PerformanceReviewHistoriesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\PositionAllowancesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\PositionsRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\ProjectsRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\RelocatingAllowancesRelationManager;
use App\Filament\Resources\ContractResource\RelationManagers\SalariesRelationManager;
use App\Livewire\Contracts\ViewSingleContract;
use App\Models\Contract;
use App\Models\Department;
use App\Models\Division;
use App\Models\FurtherStatus;
use App\Models\Homebase;
use App\Models\Position;
use App\Models\PreviousEmployment;
use App\Models\Project;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ViewField;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Livewire;
use Filament\Infolists\Infolist;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Pelmered\FilamentMoneyField\Forms\Components\MoneyInput;

class ContractResource extends Resource
{
    protected static ?string $model = Contract::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation = false;

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Grid::make(3)
                    ->schema([
                        Livewire::make(ViewSingleContract::class)
                            ->key('view-single-contract')
                            ->columnSpanFull(),
                    ])
            ]);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Contract')
                    ->inlineLabel()
                    ->schema([
                        Select::make('employee_status')
                            ->options(config('rollo.employeeStatusOptions'))
                            ->live(),
                        TextInput::make('employee_status_remark')
                            ->hidden(function (Get $get) {
                                return !$get('employee_status');
                            }),
                        DatePicker::make('contract_start_date')
                            ->hidden(function (Get $get) {
                                return $get('employee_status') != 'Contract';
                            })
                            ->columns(2),
                        DatePicker::make('contract_end_date')
                            ->hidden(function (Get $get) {
                                return $get('employee_status') != 'Contract';
                            })
                            ->columnSpan(1),
                        DatePicker::make('tanggal_pengangkatan')
                            ->hidden(function (Get $get) {
                                return $get('employee_status') != 'Permanent';
                            }),
                        DatePicker::make('tanggal_permanent')
                            ->hidden(function (Get $get) {
                                return $get('employee_status') != 'Permanent';
                            }),
                        TextInput::make('hti_id')
                            ->label('HTI ID')
                            ->maxLength(255),
                        Select::make('previous_employment')
                            ->options(PreviousEmployment::all()->pluck('company', 'id')->toArray()),
                        TextInput::make('previous_employment_remark')
                            ->maxLength(255),
                        DatePicker::make('join_date_from_previous'),
                        Toggle::make('is_ex_dge')
                            ->inline(false),
                        TextInput::make('ex_dge_note')
                            ->maxLength(255),
                        DatePicker::make('join_date'),
                        DatePicker::make('rehire_date'),
                        DatePicker::make('resign_date'),
                        DatePicker::make('temporary_extension'),
                        Select::make('further_status')
                            ->options(FurtherStatus::all()->pluck('name', 'name')->toArray()),
                        Textarea::make('reason_resign'),
                        TextInput::make('hay_level')
                            ->maxLength(255),
                        TextInput::make('immediate_superior')
                            ->maxLength(255),
                        Toggle::make('cdo_entitlement')
                            ->inline(false),
                        Toggle::make('wee_hours_entitlement')
                            ->inline(false),
                        Toggle::make('jamsostek_entitlement')
                            ->inline(false),
                        Toggle::make('insurance_entitlement')
                            ->inline(false),
                        Toggle::make('expatriate_entitlement')
                            ->inline(false),
                        Toggle::make('travel_allowance_entitlement')
                            ->inline(false),
                        TextInput::make('start_payroll')
                            ->formatStateUsing(function (Model $record) {
                                return $record->start_payroll->format('Ym');
                            })
                            // ->native(false)
                            // ->extraInputAttributes(['type' => 'month'])
                            //     ->displayFormat('F Y')
                            ->rules([
                                fn(): Closure => function (string $attribute, $value, Closure $fail) {
                                    if (!isValidPeriod($value)) {
                                        $fail('The :attribute has invalid format. ex:202501 (format YYYYMM)');
                                    }
                                },
                            ]),
                        Select::make('stream')
                            ->options([
                                "ARP FGDP" => "ARP FGDP",
                                "ARP EXPERIENCE" => "ARP EXPERIENCE"
                            ])
                            
                    ])
                    ->columns(1),
                Fieldset::make('Bonus')
                    ->schema([
                        Toggle::make('has_sign_in_bonus')
                            ->live(),
                        TextInput::make('sign_in_bonus')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->hidden(function (Get $get) {
                                return !$get('has_sign_in_bonus');
                            }),
                        Radio::make('sign_in_bonus_type')
                            ->options(config('rollo.signInBonusTypeOptions'))
                            ->inline()
                            ->hidden(function (Get $get) {
                                return !$get('has_sign_in_bonus');
                            }),
                        Select::make('thr')
                            ->options(config('rollo.thrOptions'))
                            ->hidden(function (Get $get) {
                                return !$get('has_sign_in_bonus');
                            })
                    ])
                    ->columns(2),
                Fieldset::make('Basic Salary')
                    ->schema([
                        TextInput::make('basic_salary')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->disabled()
                            ->suffix('Add Basic Salary')
                            ->suffixAction(
                                Action::make('add_basic_salary')
                                    ->icon('heroicon-m-plus')
                                    ->form([
                                        TextInput::make('basic_salary')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric(),
                                        TextInput::make('basic_salary_remark')
                                            ->maxLength(255),
                                        TextInput::make('basic_salary_reason')
                                            ->maxLength(255),
                                    ])
                                    ->action(function (array $data, Model $record, Set $set) {
                                        $set('basic_salary', toRp($data['basic_salary'], false));
                                        $record->performanceReviewHistories()->create([
                                            'effective_date' => now(),
                                            'amount' => $data['basic_salary'],
                                            'reason' => $data['basic_salary_reason'],
                                            'remark' => $data['basic_salary_remark'],
                                        ]);
                                        $latestPerformanceReviewHistory = $record->performanceReviewHistories()->orderBy('effective_date', 'desc')->first();
                                        // dd($latestPerformanceReviewHistory);
                                        $record->update([
                                            'basic_salary' => $latestPerformanceReviewHistory->amount,
                                        ]);
                                    })
                            )

                    ])
                    ->columns(1),
                Fieldset::make('Performance Review')
                    ->schema([
                        TextInput::make('performance_review_amount')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->disabled()
                            ->suffix('Add Performance Review')
                            ->suffixAction(
                                Action::make('add_performace_review')
                                    ->icon('heroicon-m-plus')
                                    ->form([
                                        TextInput::make('performance_review_amount')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric(),
                                        TextInput::make('performance_review_remark')
                                            ->maxLength(255),
                                        TextInput::make('performance_review_reason')
                                            ->maxLength(255),
                                    ])
                                    ->action(function (array $data, Model $record, Set $set) {
                                        $set('performance_review_amount', toRp($data['performance_review_amount'], false));
                                        $record->performanceReviewHistories()->create([
                                            'effective_date' => now(),
                                            'amount' => $data['performance_review_amount'],
                                            'reason' => $data['performance_review_reason'],
                                            'remark' => $data['performance_review_remark'],
                                        ]);
                                        $latestPerformanceReviewHistory = $record->performanceReviewHistories()->orderBy('effective_date', 'desc')->first();
                                        // dd($latestPerformanceReviewHistory);
                                        $record->update([
                                            'performance_review_amount' => $latestPerformanceReviewHistory->amount,
                                        ]);
                                    })
                            )

                    ])
                    ->columns(1),
                Fieldset::make('Allowances')
                    ->schema([
                        TextInput::make('position_allowance')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->disabled()
                            ->suffix('Add Position Allowance')
                            ->suffixAction(
                                Action::make('add_position_allowance')
                                    ->icon('heroicon-m-plus')
                                    ->form([
                                        TextInput::make('current_allowance')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric(),
                                        TextInput::make('remark'),
                                        DatePicker::make('effective_date'),
                                        TextInput::make('ref_no'),
                                    ])
                                    ->action(function (array $data, Model $record, Set $set) {
                                        $set('position_allowance', toRp($data['current_allowance'], false));
                                        $record->positionAllowances()->create([
                                            'effective_date' => $data['effective_date'],
                                            'current_allowance' => $data['current_allowance'],
                                            'remark' => $data['remark'],
                                        ]);
                                        $latestPositionAllowance = $record->positionAllowances()->orderBy('effective_date', 'desc')->first();
                                        // dd($latestPositionAllowance);

                                        $record->update([
                                            'position_allowance' => $latestPositionAllowance->current_allowance,
                                        ]);
                                    })
                            ),
                        TextInput::make('relocating_allowance')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->disabled()
                            ->suffix('Add Relocating Allowance')
                            ->suffixAction(
                                Action::make('add_relocating_allowance')
                                    ->icon('heroicon-m-plus')
                                    ->form([
                                        TextInput::make('amount')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric(),
                                        DatePicker::make('effective_date'),
                                        TextInput::make('remark'),
                                    ])
                                    ->action(function (array $data, Model $record, Set $set) {
                                        $set('relocating_allowance', toRp($data['amount'], false));
                                        $record->relocatingAllowances()->create([
                                            'effective_date' => $data['effective_date'],
                                            'amount' => $data['amount'],
                                            'remark' => $data['remark']
                                        ]);
                                        $latestRelocatingAllowance = $record->relocatingAllowances()->orderBy('effective_date', 'desc')->first();

                                        $record->update([
                                            'relocating_allowance' => $latestRelocatingAllowance->amount
                                        ]);
                                    })
                            ),
                        TextInput::make('parking_allowance')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->disabled()
                            ->suffix('Add Parking Allowance')
                            ->suffixAction(
                                Action::make('add_parking_allowance')
                                    ->icon('heroicon-m-plus')
                                    ->form([
                                        TextInput::make('current_parking_amount')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric(),
                                        DatePicker::make('effective_date'),
                                        TextInput::make('ref_no'),
                                        TextInput::make('reason'),
                                        DatePicker::make('ref_date'),
                                        TextInput::make('remark'),
                                    ])
                                    ->action(function (array $data, Model $record, Set $set) {
                                        $set('parking_allowance', toRp($data['current_parking_amount'], false));
                                        $record->parkingHistories()->create([
                                            'effective_date' => $data['effective_date'],
                                            'current_parking_amount' => $data['current_parking_amount'],
                                            'reason' => $data['reason'],
                                            'remark' => $data['remark'],
                                            'ref_no' => $data['ref_no']
                                        ]);
                                        $latestParkingAllowance = $record->parkingHistories()->orderBy('effective_date', 'desc')->first();

                                        $record->update([
                                            'parking_allowance' => $latestParkingAllowance->current_parking_amount
                                        ]);
                                    })
                            ),
                        TextInput::make('phone_limit')
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                            ->disabled()
                            ->suffix('Add Phone Allowance')
                            ->suffixAction(
                                Action::make('add_phone_allowance')
                                    ->icon('heroicon-m-plus')
                                    ->form([
                                        TextInput::make('current_phone_limit')
                                            ->mask(RawJs::make('$money($input)'))
                                            ->stripCharacters(',')
                                            ->numeric(),
                                        DatePicker::make('effective_date'),
                                        TextInput::make('ref_no'),
                                        TextInput::make('reason'),
                                        DatePicker::make('ref_date'),
                                        TextInput::make('remark'),
                                    ])
                                    ->action(function (array $data, Model $record, Set $set) {
                                        $set('phone_limit', toRp($data['current_phone_limit'], false));
                                        $record->phoneLimitHistories()->create([
                                            'effective_date' => $data['effective_date'],
                                            'current_phone_limit' => $data['current_phone_limit'],
                                            'reason' => $data['reason'],
                                            'remark' => $data['remark'],
                                            'ref_date' => $data['ref_date'],
                                            'ref_no' => $data['ref_no'],
                                        ]);
                                        $latestParkingAllowance = $record->phoneLimitHistories()->orderBy('effective_date', 'desc')->first();

                                        $record->update([
                                            'phone_limit' => $latestParkingAllowance->current_phone_limit
                                        ]);
                                    })
                            )

                    ])
                    ->columns(1),
                Fieldset::make('Others')
                    ->schema([
                        Select::make('tax_type')
                            ->options(config('rollo.taxTypeOptions')),
                        Select::make('category')
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
                            ->mask(RawJs::make('$money($input)'))
                            ->stripCharacters(',')
                            ->numeric()
                    ])
                    ->columns(2)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('employee_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('type_of_contract_print')
                    ->searchable(),
                TextColumn::make('employment')
                    ->searchable(),
                TextColumn::make('print_on')
                    ->date()
                    ->sortable(),
                TextColumn::make('send_on')
                    ->date()
                    ->sortable(),
                TextColumn::make('received_on')
                    ->date()
                    ->sortable(),
                TextColumn::make('job_status')
                    ->searchable(),
                TextColumn::make('reference')
                    ->searchable(),
                TextColumn::make('no_surat_keterangan')
                    ->searchable(),
                TextColumn::make('fullname')
                    ->searchable(),
                TextColumn::make('hti_id')
                    ->searchable(),
                IconColumn::make('previous_employment')
                    ->boolean(),
                TextColumn::make('previous_employment_remark')
                    ->searchable(),
                TextColumn::make('join_date_from_previous')
                    ->date()
                    ->sortable(),
                IconColumn::make('is_ex_nsn')
                    ->boolean(),
                TextColumn::make('ex_nsn_note')
                    ->searchable(),
                TextColumn::make('performance_review_remark')
                    ->searchable(),
                TextColumn::make('performance_review_reason')
                    ->searchable(),
                TextColumn::make('performance_review_effective_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('performance_review_amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('join_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('rehire_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('start_payroll')
                    ->searchable(),
                TextColumn::make('employee_status')
                    ->searchable(),
                TextColumn::make('tanggal_pengangkatan')
                    ->date()
                    ->sortable(),
                TextColumn::make('tanggal_permanent')
                    ->date()
                    ->sortable(),
                TextColumn::make('resign_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('temporary_extension')
                    ->date()
                    ->sortable(),
                TextColumn::make('further_status')
                    ->searchable(),
                IconColumn::make('recon_payroll')
                    ->boolean(),
                TextColumn::make('recon_process_in_payroll')
                    ->searchable(),
                TextColumn::make('department')
                    ->searchable(),
                TextColumn::make('division')
                    ->searchable(),
                TextColumn::make('project')
                    ->searchable(),
                TextColumn::make('position')
                    ->searchable(),
                TextColumn::make('hay_level')
                    ->searchable(),
                TextColumn::make('position_allowance')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('has_sign_in_bonus')
                    ->boolean(),
                TextColumn::make('sign_in_bonus')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('sign_in_bonus_type')
                    ->searchable(),
                TextColumn::make('homebase')
                    ->searchable(),
                TextColumn::make('original_workbase')
                    ->searchable(),
                TextColumn::make('current_workbase')
                    ->searchable(),
                TextColumn::make('relocating_allowance')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('immediate_superior')
                    ->searchable(),
                TextColumn::make('project_base')
                    ->searchable(),
                TextColumn::make('area_payslip')
                    ->searchable(),
                TextColumn::make('scope_of_salary')
                    ->searchable(),
                IconColumn::make('cdo_entitlement')
                    ->boolean(),
                IconColumn::make('wee_hours_entitlement')
                    ->boolean(),
                IconColumn::make('jamsostek_entitlement')
                    ->boolean(),
                IconColumn::make('insurance_entitlement')
                    ->boolean(),
                IconColumn::make('expatriate_entitlement')
                    ->boolean(),
                IconColumn::make('travel_allowance_entitlement')
                    ->boolean(),
                TextColumn::make('thr')
                    ->searchable(),
                TextColumn::make('tax_type')
                    ->searchable(),
                TextColumn::make('category')
                    ->searchable(),
                IconColumn::make('is_blacklisted')
                    ->boolean(),
                TextColumn::make('penalty_amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('fund_source')
                    ->searchable(),
                TextColumn::make('deduct_last_payment_period')
                    ->date()
                    ->sortable(),
                TextColumn::make('deduct_last_payment_amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('deduct_salary_period')
                    ->date()
                    ->sortable(),
                TextColumn::make('deduct_salary_amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('recon_to_hti_in_brd_period')
                    ->date()
                    ->sortable(),
                TextColumn::make('amount_recon_to_hti')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('contract_start_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('contract_end_date')
                    ->date()
                    ->sortable(),
                IconColumn::make('has_performance_review')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_by')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('updated_by')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationGroup::make('Histories', [
                HomebasesRelationManager::class,
                SalariesRelationManager::class,
                OriginalWorkbasesRelationManager::class,
                CurrentWorkbasesRelationManager::class,
                PositionsRelationManager::class,
                DivisionsRelationManager::class,
                DepartmentsRelationManager::class,
                BusinessUnitsRelationManager::class,                
                PhoneLimitHistoriesRelationManager::class,
                ParkingHistoriesRelationManager::class,
                RelocatingAllowancesRelationManager::class,
                PositionAllowancesRelationManager::class,
                PerformanceReviewHistoriesRelationManager::class,
                ProjectsRelationManager::class
            ]),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContracts::route('/'),
            'create' => Pages\CreateContract::route('/create'),
            'view' => Pages\ViewContract::route('/{record}'),
            'edit' => Pages\EditContract::route('/{record}/edit'),
        ];
    }
}

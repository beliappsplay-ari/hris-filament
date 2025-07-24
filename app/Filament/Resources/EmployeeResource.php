<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BankResource\RelationManagers\BankRelationManager;
use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\Pages\CreateEmployeeContract;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Filament\Resources\EmployeeResource\RelationManagers\AdvancesRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\ContractsRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\EducationsRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\FamilyDetailsRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\ForeignLanguagesRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\JobHistoriesRelationManager;
use App\Forms\Components\BoolAndDatePicker;
use App\Livewire\ViewSingleEmployee;
use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Livewire;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use LaraZeus\Accordion\Forms\Accordion;
use LaraZeus\Accordion\Forms\Accordions;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static ?string $navigationGroup = 'HR DATA';

    protected static ?int $navigationSort = 1;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->inlineLabel()
                    ->schema([
                        TextInput::make('empno')
                            ->default(generateEMPNO())
                            ->readOnly()
                            ->required()
                            ->maxLength(255),
                        FileUpload::make('image')
                            ->avatar()
                            ->image()
                            ->imageEditor(),
                    ])
                    ->columns(1),
                Group::make()
                    ->inlineLabel()
                    ->relationship('personalData')
                    ->schema([
                        TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('last_name')
                            ->maxLength(255),
                        TextInput::make('email')
                            ->maxLength(255),
                        DatePicker::make('birthday'),
                        TextInput::make('birthday_place'),
                        Select::make('sex')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female'
                            ]),
                        Select::make('religion')
                            ->options(config('rollo.religions')),
                        TextInput::make('nationality')
                            ->maxLength(255),
                        Select::make('marital_status')
                            ->options(config('rollo.maritalStatuses')),
                        TextInput::make('permanent_address'),
                        TextInput::make('permanent_city'),
                        TextInput::make('correspondence_address'),
                        TextInput::make('correspondence_city'),
                        TextInput::make('no_handphone')
                            ->maxLength(255),
                        TextInput::make('ktp')
                            ->label('NO. KTP')
                            ->maxLength(255),
                        TextInput::make('passport')
                            ->maxLength(255),
                        TextInput::make('npwp')
                            ->label('NPWP')
                            ->maxLength(255),
                        TextInput::make('jamsostek')
                            ->maxLength(255),
                        Select::make('tax')
                            ->label('Tax Status')
                            ->options(config('rollo.taxStatuses'))
                    ])
                    ->columns(1),
                Group::make()
                    ->inlineLabel()
                    ->relationship('completenessPersonalData')
                    ->schema([
                        Section::make('Completeness Personal Data')
                            // ->label('Completeness Personal Data')
                            ->schema([
                                Checkbox::make('ppf'),
                                Checkbox::make('fc_transkrip_nilai'),
                                Checkbox::make('fc_npwp'),
                                Checkbox::make('cv'),
                                Checkbox::make('fc_buku_tabungan'),
                                Checkbox::make('fc_ktp'),
                                Checkbox::make('fc_ijazah'),
                                Checkbox::make('fc_skbb'),
                            ])
                            ->columns(4)
                    ])
                    ->columns(1),
                Group::make()
                    ->inlineLabel()
                    ->relationship('additionalDetails')
                    ->schema([
                        TextInput::make('order_number')
                            ->maxLength(255),
                        TextInput::make('mother_name')
                            ->maxLength(255),
                        TextInput::make('blood')
                            ->maxLength(255),
                        TextInput::make('weight')
                            ->maxLength(255),
                        TextInput::make('height')
                            ->maxLength(255),
                        TextInput::make('ethnic')
                            ->maxLength(255),
                        TextInput::make('pos_code')
                            ->maxLength(255),
                        TextInput::make('no_telephone')
                            ->tel()
                            ->maxLength(255),
                        TextInput::make('telephone')
                            ->tel()
                            ->maxLength(255),
                        TextInput::make('parking_allowance')
                            ->maxLength(255),
                        TextInput::make('insurance_plan')
                            ->maxLength(255),
                        TextInput::make('insurance_no')
                            ->maxLength(255),
                        DatePicker::make('insurance_effective_date'),
                        TextInput::make('insurance_remark')
                            ->maxLength(255),
                        Toggle::make('insurance_registered'),
                        DatePicker::make('send_data_insurance_to_bni_on'),
                        Toggle::make('cut_off_insurance'),
                        DatePicker::make('cut_off_insurance_date'),
                        TextInput::make('jamsostek_remark')
                            ->maxLength(255),
                        TextInput::make('from_her_reg_jamsostek')
                            ->maxLength(255),
                        Section::make()
                            ->columns(4)
                            ->schema([
                                TextInput::make('bpjs_no')
                                    ->label("BPJS No")
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                Toggle::make('is_bpjs_soft_copy')
                                    ->label('Soft Copy')
                                    ->columnStart(2)
                                    ->inlineLabel(true),
                                DatePicker::make('bpjs_no_soft_copy_receive_on')
                                    ->label("Received On")
                                    ->inlineLabel(true),
                                TextInput::make('bpjs_no_soft_copy_by')
                                    ->label("By")
                                    ->maxLength(255)
                                    ->inlineLabel(true),
                                Toggle::make('is_bpjs_hard_copy')
                                    ->label('Hard Copy')
                                    ->columnStart(2)
                                    ->inlineLabel(true),
                                DatePicker::make('bpjs_no_hard_copy_receive_on')
                                    ->label("Received On")
                                    ->inlineLabel(true),
                                TextInput::make('bpjs_no_hard_copy_by')
                                    ->label("By")
                                    ->maxLength(255)
                                    ->inlineLabel(true),
                                DatePicker::make('bpjs_registered')
                                    ->columnSpanFull(),
                                TextInput::make('bpjs_amount')
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                                DatePicker::make('bpjs_pension')
                                    ->columnSpanFull(),
                            ]),


                        TextInput::make('personal_email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('hti_email')
                            ->email()
                            ->maxLength(255),
                        DatePicker::make('id_card_print_on')
                            ->label("ID Card Print On"),
                        DatePicker::make('id_card_sent_on')
                            ->label("ID Card Sent On"),
                        DatePicker::make('id_card_receive_on')
                            ->label("ID Card Received On"),
                        TextInput::make('id_card_to')
                            ->label('ID Card Sent to')
                            ->maxLength(255),
                        TextInput::make('id_card_remark')
                            ->label('ID Card Remark ')
                            ->maxLength(255),
                        TextInput::make('induction')
                            ->maxLength(255),
                        Fieldset::make()
                            ->columns(1)
                            ->schema([

                                Checkbox::make('is_dge')
                                    ->label('DGE')
                                    ->columnStart(1),
                                DatePicker::make('dge')
                                    ->label(' '),
                            ]),
                        Fieldset::make()
                            ->columns(1)
                            ->schema([
                                Checkbox::make('is_neo_huaweii')
                                    ->label("Neo Huawei")
                                    ->columnStart(1),
                                DatePicker::make('neo_huaweii')
                                    ->label(' '),
                            ]),
                        Fieldset::make()
                            ->columns(1)
                            ->schema([
                                Checkbox::make('is_lvc_neo')
                                    ->label("LVC Neo")
                                    ->columnStart(1),
                                DatePicker::make('lvc_neo')
                                    ->label(' '),
                            ]),
                        TextInput::make('breakdown_shift')
                            ->maxLength(255),
                        TextInput::make('tahun_takwim')
                            ->maxLength(255),
                        TextInput::make('netto_sebelum')
                            ->maxLength(255),
                        TextInput::make('pph_sebelum')
                            ->maxLength(255),
                        TextInput::make('created_data_spt')
                            ->maxLength(255),
                        TextInput::make('info_email_received_from_hti')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('case')
                            ->maxLength(255),
                        TextInput::make('hti_asset')
                            ->maxLength(255),
                        DatePicker::make('action_date'),
                        TextInput::make('action_type')
                            ->maxLength(255),
                        TextInput::make('result')
                            ->maxLength(255),
                        TextInput::make('info_to_hti')
                            ->maxLength(255),
                        TextInput::make('response_from_hti')
                            ->maxLength(255),
                        DatePicker::make('action_date_2'),
                        TextInput::make('action_type_2')
                            ->maxLength(255),
                        TextInput::make('result_2')
                            ->maxLength(255),
                        TextInput::make('info_to_hti_2')
                            ->maxLength(255),
                        TextInput::make('response_from_hti_2')
                            ->maxLength(255),
                        DatePicker::make('action_date_3'),
                        TextInput::make('action_type_3')
                            ->maxLength(255),
                        TextInput::make('result_3')
                            ->maxLength(255),
                        TextInput::make('info_to_hti_3')
                            ->maxLength(255),
                        TextInput::make('response_from_hti_3')
                            ->maxLength(255),
                        DatePicker::make('action_date_4'),
                        TextInput::make('action_type_4')
                            ->maxLength(255),
                        TextInput::make('result_4')
                            ->maxLength(255),
                        TextInput::make('info_to_hti_4')
                            ->maxLength(255),
                        TextInput::make('response_from_hti_4')
                            ->maxLength(255),
                    ])
                    ->columns(1)

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                return $query->with(['personalData', 'additionalDetails', 'completenessPersonalData']);
            })
            ->columns([
                ImageColumn::make('image')
                    ->circular()
                    ->defaultImageUrl(url('/images/avatar-default.png')),
                TextColumn::make('personalData.first_name')
                    ->label('Name')
                    ->formatStateUsing(function (Employee $employee) {
                        return $employee->personalData->first_name . ' ' . $employee->personalData->last_name;
                    })
                    ->toggleable(isToggledHiddenByDefault: false)
                    ->searchable(),
                TextColumn::make('empno')
                    ->searchable(),
                TextColumn::make('personalData.last_name')
                    ->label('Last Name')
                    ->hidden(true)
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                IconColumn::make('completenessPersonalData')
                    ->label('Completeness')
                    ->icon(function (Model $record) {
                        if ($record->isCompletePersonalData()) {
                            return 'heroicon-o-check-circle';
                        }

                        return 'heroicon-o-x-circle';
                    })
                    ->color(function (Model $record) {
                        if ($record->isCompletePersonalData()) {
                            return 'success';
                        }

                        return 'danger';
                    }),
                // TextColumn::make('personalData.birthday')
                //     ->date()
                //     ->label('Birthday')
                //     ->searchable(),
                // TextColumn::make('personalData.birthday_place')
                //     ->label('Birthday Place')
                //     ->searchable(),
                TextColumn::make('created_by_name')
                    ->label('Created By')
                    ->description(function (Model $record) {
                        return $record->created_at;
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_by_name')
                    ->label('Updated By')
                    ->description(function (Model $record) {
                        return $record->updated_at;
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelationManagersDisplayOrder(): array
{
    return [
        'top'// Relasi akan ditampilkan di atas
        //'bottom' // Atau bisa dikosongkan jika tidak ada yang di bawah
    ];
}
    public static function getRelations(): array
    {
        return [
            // ContractsRelationManager::class,
            ContractsRelationManager::class,
            AdvancesRelationManager::class,
            BankRelationManager::class,
            FamilyDetailsRelationManager::class,
            EducationsRelationManager::class,
            ForeignLanguagesRelationManager::class,
            JobHistoriesRelationManager::class,
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Grid::make(3)
                    ->schema([
                        Livewire::make(ViewSingleEmployee::class)
                            ->key('view-single-employee')
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'view' => Pages\ViewEmployee::route('/{record}'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
            'new-contract' => CreateEmployeeContract::route('/{record}/create-contract')
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayrollResource\Pages;
use App\Filament\Resources\PayrollResource\RelationManagers;
use App\Models\Payroll;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayrollResource extends Resource
{
    protected static ?string $model = Payroll::class;
    protected static ?string $navigationLabel = "Payroll";
    protected static ?string $modelLabel = "Payroll";
    protected static ?string $label = "Payroll";
    protected static ?string $navigationGroup = 'PAYROLL';
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('period'),
                Forms\Components\TextInput::make('employee_id')
                    ->numeric(),
                Forms\Components\TextInput::make('basic_salary')
                    ->numeric(),
                Forms\Components\TextInput::make('allowances')
                    ->numeric(),
                Forms\Components\TextInput::make('jkk_jkm')
                    ->numeric(),
                Forms\Components\TextInput::make('insurance')
                    ->numeric(),
                Forms\Components\TextInput::make('gross')
                    ->numeric(),
                Forms\Components\TextInput::make('tax_ter_per_month')
                    ->numeric(),
                Forms\Components\TextInput::make('tax_status')
                    ->maxLength(100),
                Forms\Components\Toggle::make('has_npwp'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('period')
                ->formatStateUsing(function (Model $record) {
                    return $record->period->format('M Y');
                })
                ->searchable(),
                TextColumn::make('employee.full_name')
                    ->label('Employee')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->whereHas('employee', function ($q) use ($search) {
                                $q->whereHas('personalData', function ($q) use ($search) {
                                    $q->where('first_name', 'like', "%{$search}%") ;
                                    $q->orWhere('last_name', 'like', "%{$search}%") ;
                                });
                            });
                            
                    })
                    ->sortable(),
                TextColumn::make('tax_status')
                    ->searchable(),
                // IconColumn::make('has_npwp')
                //     ->boolean(),
                // TextColumn::make('ter')
                //     ->label('TER Status'),
                TextColumn::make('basic_salary')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('allowances')
                    ->numeric()
                    ->sortable(),
                // TextColumn::make('jkk_jkm')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('insurance')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('bpjs_kesehatan')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('gross')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tax_ter_per_month')
                    ->numeric()
                    ->sortable(),
                // TextColumn::make('deduct_jht')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('deduct_bpjs_pension')
                //     ->numeric()
                //     ->sortable(),
                // TextColumn::make('deduct_bpjs_kesehatan')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('net_income')
                    ->numeric()
                    ->sortable(),
                
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('period')
                    ->form([
                        TextInput::make('period')
                            ->default(now()->format('Ym'))
                            // ->native()
                            // ->extraInputAttributes(['type' => 'month'])
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if (!isValidPeriod($data['period'])) {
                            $period = Carbon::parse(now());
                        }else{
                            $period = Carbon::createFromFormat('Ymd', $data['period'] . '01');
                        }
                        return $query
                            ->when(
                                $data['period'],
                                function (Builder $query, $date) use ($period) {
                                    $query->whereMonth('period', $period->format('m'))
                                        ->whereYear('period', $period->format('Y'));
                                },
                            );
                    })
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
                Action::make('Salary Slip')
                    ->url(fn (Model $record): string => route('payroll.salary.slip', $record))
                    ->openUrlInNewTab()
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayrolls::route('/'),
            'create' => Pages\CreatePayroll::route('/create'),
            'view' => Pages\ViewPayroll::route('/{record}'),
            'edit' => Pages\EditPayroll::route('/{record}/edit'),
        ];
    }
}

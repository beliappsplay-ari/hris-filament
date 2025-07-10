<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OthersIncomeNonTaxableResource\Pages;
use App\Filament\Resources\OthersIncomeNonTaxableResource\RelationManagers;
use App\Models\Employee;
use App\Models\OthersIncomeNonTaxable;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OthersIncomeNonTaxableResource extends Resource
{
    protected static ?string $model = OthersIncomeNonTaxable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Incomes Non Taxable';
    protected static ?string $navigationGroup = 'INCOME';
    protected static ?int $navigationSort = 4;
    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->inlineLabel()
            ->schema([
                Select::make('employee_id')
                    ->options(Employee::all()->pluck('empno_full_name', 'id')->toArray())
                    ->searchable(),
                // ->searchable(query: function (Builder $query, string $search): Builder {
                //     return $query
                //         ->whereHas('employee', function ($q) use ($search) {
                //             $q->whereHas('personalData', function ($q) use ($search) {
                //                 $q->where('first_name', 'like', "%{$search}%") ;
                //                 $q->orWhere('last_name', 'like', "%{$search}%") ;
                //             });
                //         });

                // }),
                Select::make('type')
                    ->options([
                        'Others' => 'Others',
                        'Recon HTI' => 'Recon HTI',
                    ])
                    ->required(),
                TextInput::make('amount')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->required()
                    ->numeric(),
                TextInput::make('remark')
                    ->maxLength(255),
                DatePicker::make('period')
                    ->native()
                    ->extraInputAttributes(['type' => 'month'])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('employee.full_name')
                    ->label('Employee')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->whereHas('employee', function ($q) use ($search) {
                                $q->whereHas('personalData', function ($q) use ($search) {
                                    $q->where('first_name', 'like', "%{$search}%");
                                    $q->orWhere('last_name', 'like', "%{$search}%");
                                });
                            });
                    })
                    ->sortable(),
                TextColumn::make('employee.empno'),
                TextColumn::make('period')
                    ->formatStateUsing(function (Model $record) {
                        return $record->period->format('M Y');
                    })
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('remark'),
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
                // SelectFilter::make('type')
                //     ->options([
                //         'Performance Review' => 'Performance Review',
                //         'Phone Allowance' => 'Phone Allowance',
                //         'Parking Allowance' => 'Parking Allowance',
                //         'Relocating Allowance' => 'Relocating Allowance',
                //         'Position Allowance' => 'Position Allowance',
                //     ]),
                Filter::make('period')
                    ->form([
                        TextInput::make('period')
                            ->default(now()->format('Ym'))
                        // ->native()
                        // ->extraInputAttributes(['type' => 'month'])
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        // dd($data);
                        if (!isValidPeriod($data['period'])) {
                            $period = Carbon::parse(now());
                        } else {
                            $period = Carbon::createFromFormat('Ymd', $data['period'] . '01');
                        }
                        return $query
                            ->when(
                                $data['period'],
                                function (Builder $query, $date) use ($period) {
                                    $query->whereMonth('period', $period->format('m'));
                                },
                            );
                    })
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOthersIncomeNonTaxables::route('/'),
            'create' => Pages\CreateOthersIncomeNonTaxable::route('/create'),
            'view' => Pages\ViewOthersIncomeNonTaxable::route('/{record}'),
            'edit' => Pages\EditOthersIncomeNonTaxable::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $period = now();
        return parent::getEloquentQuery()
            ->whereYear('period', $period->year)
            ->whereMonth('period', $period->month);
    }
}

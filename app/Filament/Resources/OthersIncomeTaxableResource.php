<?php

namespace App\Filament\Resources;

use App\Filament\Exports\OthersIncomeTaxableExporter;
use App\Filament\Resources\OthersIncomeTaxableResource\Pages;
use App\Filament\Resources\OthersIncomeTaxableResource\RelationManagers;
use App\Models\Employee;
use App\Models\OthersIncomeTaxable;
use Carbon\Carbon;
use Coolsam\FilamentFlatpickr\Forms\Components\Flatpickr;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OthersIncomeTaxableResource extends Resource
{
    protected static ?string $model = OthersIncomeTaxable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Incomes Taxable';
    protected static ?string $navigationGroup = 'INCOME';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->inlineLabel()
            ->schema([
                Select::make('employee_id')
                    ->options(Employee::all()->pluck('empno_full_name', 'id')->toArray())
                    ->searchable(),
                Select::make('type')
                    ->options([
                        'Phone Allowance' => 'Phone Allowance',
                        'Performance Review' => 'Performance Review',
                        'Parking Allowance' => 'Parking Allowance',
                        'Relocating Allowance' => 'Relocating Allowance',
                        'Position Allowance' => 'Position Allowance',
                        'Sign In Bonus' => 'Sign In Bonus',
                        'THR' => 'THR'
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
                TextColumn::make('employee.empno')
                    ->searchable(),
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
                SelectFilter::make('type')
                    ->options([
                        'Performance Review' => 'Performance Review',
                        'Phone Allowance' => 'Phone Allowance',
                        'Parking Allowance' => 'Parking Allowance',
                        'Relocating Allowance' => 'Relocating Allowance',
                        'Position Allowance' => 'Position Allowance',
                    ]),
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
                        }else{
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
                EditAction::make()
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
                ExportBulkAction::make()
                    ->exporter(OthersIncomeTaxableExporter::class)
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
            'index' => Pages\ListOthersIncomeTaxables::route('/'),
            'create' => Pages\CreateOthersIncomeTaxable::route('/create'),
            'view' => Pages\ViewOthersIncomeTaxable::route('/{record}'),
            'edit' => Pages\EditOthersIncomeTaxable::route('/{record}/edit'),
        ];
    }

    // public static function getEloquentQuery(): Builder
    // {
    //     $period = now();
    //     return parent::getEloquentQuery()
    //         ->whereYear('period', $period->year)
    //         ->whereMonth('period', $period->month);
    // }
}

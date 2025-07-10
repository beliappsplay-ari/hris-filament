<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeductionResource\Pages;
use App\Filament\Resources\DeductionResource\RelationManagers;
use App\Models\Deduction;
use App\Models\DeductionType;
use App\Models\Employee;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeductionResource extends Resource
{
    protected static ?string $model = Deduction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = "Taxable/Non Taxable";
    protected static ?string $modelLabel = 'Deduction';
    protected static ?string $navigationGroup = 'DEDUCTION';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->inlineLabel()
            ->schema([

                Select::make('employee_id')
                    ->options(Employee::all()->pluck('empno_full_name', 'id')->toArray())
                    ->searchable(),
                Select::make('type_of_deduction')
                    ->options(DeductionType::all()->pluck('name', 'id')->toArray())
                    ->searchable(),
                DatePicker::make('date_of_deduction')
                    ->required(),
                DatePicker::make('period_timesheet')
                    ->native()
                    ->extraInputAttributes(['type' => 'month']),
                TextInput::make('total_days')
                    ->numeric(),
                TextInput::make('amount')
                    ->required()
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->required()
                    ->numeric(),
                Textarea::make('remark')
                    ->columnSpanFull(),

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
                                    $q->where('first_name', 'like', "%{$search}%");
                                    $q->orWhere('last_name', 'like', "%{$search}%");
                                });
                            });
                    })
                    ->sortable(),
                TextColumn::make('deductionType.name')
                    ->searchable(),
                TextColumn::make('date_of_deduction')
                    ->date()
                    ->sortable(),
                TextColumn::make('remark')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('period_timesheet')
                    ->formatStateUsing(function (Model $record) {
                        return $record->period_timesheet->format('M Y');
                    })
                    ->sortable(),
                TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('total_days')
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
                                    $query->whereMonth('period_timesheet', $period->format('m'));
                                },
                            );
                    })
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
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
            'index' => Pages\ListDeductions::route('/'),
            'create' => Pages\CreateDeduction::route('/create'),
            'view' => Pages\ViewDeduction::route('/{record}'),
            'edit' => Pages\EditDeduction::route('/{record}/edit'),
        ];
    }
}

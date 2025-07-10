<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvanceResource\Pages;
use App\Filament\Resources\AdvanceResource\RelationManagers;
use App\Models\Advance;
use App\Models\Employee;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvanceResource extends Resource
{
    protected static ?string $model = Advance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'INCOME';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->inlineLabel()
            ->columns(1)
            ->schema([
                Select::make('employee_id')
                    ->label('Employee')
                    ->options(Employee::all()->pluck('empno_full_name', 'id')->toArray())
                    ->searchable(),
                TextInput::make('amount')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric()
                    ->required(),
                DatePicker::make('period')
                    ->native()
                    ->extraInputAttributes(['type' => 'month'])
                    ->required()
                    ->visible(fn(string $operation): bool => $operation === 'create'),
                TextInput::make('remark'),
                TextInput::make('amount_release')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric()
                    ->live(),
                DatePicker::make('release_on')
                    ->required(function (Get $get) {
                        return $get('amount_release');
                    }),
                Select::make('via')
                    ->options(config('rollo.advanceVia'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('employee.fullname')
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->whereHas('employee', function ($q) use ($search) {
                                $q->whereHas('personalData', function ($q) use ($search) {
                                    $q->where('first_name', 'like', "%{$search}%");
                                    $q->orWhere('last_name', 'like', "%{$search}%");
                                });
                            });
                    }),
                TextColumn::make('amount')
                    ->numeric(),
                TextColumn::make('period')
                    ->searchable()
                    ->formatStateUsing(function (Model $record) {
                        // dd($record);
                        return $record->period->format('M Y');
                    }),
                TextColumn::make('remark'),
                TextColumn::make('release_on')
                    ->formatStateUsing(function (Model $record) {
                        // dd($record);
                        return $record->period->format('Y-m-d');
                    }),
                TextColumn::make('amount_release')
                    ->numeric(),
                TextColumn::make('via')
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
                                    $query->whereMonth('period', $period->format('m'));
                                },
                            );
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make()
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
            'index' => Pages\ListAdvances::route('/'),
            'create' => Pages\CreateAdvance::route('/create'),
            'edit' => Pages\EditAdvance::route('/{record}/edit'),
        ];
    }
}

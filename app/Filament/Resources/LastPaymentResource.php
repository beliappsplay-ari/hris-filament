<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LastPaymentResource\Pages;
use App\Filament\Resources\LastPaymentResource\RelationManagers;
use App\Models\Employee;
use App\Models\LastPayment;
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
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LastPaymentResource extends Resource
{
    protected static ?string $model = LastPayment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'INCOME';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->inlineLabel()
            ->schema([
                Select::make('employee_id')
                    ->label('Employee')
                    ->options(Employee::all()->pluck('empno_full_name', 'id')->toArray())
                    ->searchable(),
                DatePicker::make('period')
                    ->native()
                    ->extraInputAttributes(['type' => 'month']),
                TextInput::make('gross_income')
                    ->required()
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->required()
                    ->numeric(),
                TextInput::make('thp_to_be_release')
                    ->required()
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->required()
                    ->numeric(),
                DatePicker::make('release_on')
                    ->required(),
                TextInput::make('amt_release')
                    ->required()
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->required()
                    ->numeric(),
                Select::make('via')
                    ->options(config('rollo.advanceVia')),
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
                TextColumn::make('period')
                    ->formatStateUsing(function (Model $record) {
                        // dd($record);
                        return $record->period->format('M Y');
                    }),
                TextColumn::make('gross_income')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('thp_to_be_release')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('release_on')
                    ->date()
                    ->sortable(),
                TextColumn::make('amt_release')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('via')
                    ->searchable(),
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
            'index' => Pages\ListLastPayments::route('/'),
            'create' => Pages\CreateLastPayment::route('/create'),
            'view' => Pages\ViewLastPayment::route('/{record}'),
            'edit' => Pages\EditLastPayment::route('/{record}/edit'),
        ];
    }
}

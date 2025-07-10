<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Support\RawJs;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Pelmered\FilamentMoneyField\Forms\Components\MoneyInput;

class AdvancesRelationManager extends RelationManager
{
    protected static string $relationship = 'advances';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('amount')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric()
                    ->required(),
                DatePicker::make('period')
                    ->native()
                    ->extraInputAttributes(['type' => 'month'])
                    ->required()
                    ->visible(fn (string $operation): bool => $operation === 'create'),
                DatePicker::make('release_on'),
                TextInput::make('amount_release')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric(),
                Select::make('via')
                    ->options(config('rollo.advanceVia'))
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('amount')
            ->columns([
                TextColumn::make('amount')
                    ->numeric(),
                TextColumn::make('period')
                    ->formatStateUsing(function (Model $record) {
                        // dd($record);
                        return $record->period->format('M Y');
                    }),
                TextColumn::make('release_on')
                    ->formatStateUsing(function (Model $record) {
                        // dd($record);
                        return $record->period->format('Y-m-d');
                    }),
                TextColumn::make('amount_release'),
                TextColumn::make('via')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->after(function (array $data, Model $record) {
                        // dd($record);
                        if($record->release_on){
                            $record->deduction()->create([
                                'type_of_deduction' => 1,
                                'employee_id' => $record->employee_id,
                                'date_of_deduction' => $record->release_on,
                                'amount' => $record->amount_release,
                                'period_timesheet' => $record->period
                            ]);
                        }
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->after(function (array $data, Model $record) {
                    if($record->release_on){
                        if($record->deduction){
                            $record->deduction()->update([
                                'amount' => $record->amount_release
                            ]);
                        }else{
                            $record->deduction()->create([
                                'type_of_deduction' => 1,
                                'employee_id' => $record->employee_id,
                                'date_of_deduction' => $record->release_on,
                                'amount' => $record->amount_release,
                                'period_timesheet' => $record->period
                            ]);
                        }
                    }
                }),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

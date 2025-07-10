<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\ParkingHistory;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
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

class ParkingHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'parkingHistories';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('current_parking_amount')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric(),
                DatePicker::make('effective_date'),
                TextInput::make('ref_no'),
                TextInput::make('reason'),
                DatePicker::make('ref_date'),
                TextInput::make('remark'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('current_parking_amount')
            ->defaultSort('effective_date', 'desc')
            ->paginated(false)
            ->columns([
                TextColumn::make('current_parking_amount')
                    ->label('Current Parking Amount')
                    ->formatStateUsing(function ($state) {
                        return toRp($state,false);
                    }),
                TextColumn::make('old_parking_amount')
                    ->formatStateUsing(function ($state) {
                        return toRp($state,false);
                    }),
                TextColumn::make('effective_date'),
                TextColumn::make('ref_no'),
                TextColumn::make('reason'),
                TextColumn::make('ref_date'),
                TextColumn::make('remark'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->after(function (ParkingHistory $record, array $data) {
                    $contract = $this->getOwnerRecord();
                    $contract->update([
                        'parking_allowance' => $record->current_parking_amount
                    ]);
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->after(function (ParkingHistory $record, array $data) {
                    $contract = $this->getOwnerRecord();
                    $latestParkingHistory = $contract->parkingHistories()->orderBy('effective_date', 'desc')->first();
                    if ($record->id == $latestParkingHistory->id) {
                        $contract->update([
                            'parking_allowance' => $record->current_parking_amount
                        ]);
                    }
                }),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        if($pageClass == 'App\Filament\Resources\ContractResource\Pages\ViewContract' && config('rollo.hideRelationManagerOnViewContract')){
            return false;
        }
        return true;
    }
}

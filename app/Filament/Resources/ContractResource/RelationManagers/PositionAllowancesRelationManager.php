<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\PositionAllowance;
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

class PositionAllowancesRelationManager extends RelationManager
{
    protected static string $relationship = 'positionAllowances';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('current_allowance')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric(),
                DatePicker::make('effective_date'),
                TextInput::make('ref_no'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('current_allowance')
            ->defaultSort('effective_date', 'desc')
            ->paginated(false)
            ->columns([
                TextColumn::make('current_allowance')
                ->formatStateUsing(function ($state) {
                    return toRp($state,false);
                }),
                TextColumn::make('old_allowance')
                ->formatStateUsing(function ($state) {
                    return toRp($state,false);
                }),
                TextColumn::make('effective_date'),
                TextColumn::make('ref_no'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->after(function(PositionAllowance $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $contract->update([
                        'position_allowance' => $record->current_allowance
                    ]);
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->after(function(PositionAllowance $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $latestPositionAllowance = $contract->positionAllowances()->orderBy('effective_date','desc')->first();
                    if($record->id == $latestPositionAllowance->id){
                        $contract->update([
                            'position_allowance' => $record->current_allowance
                        ]);
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

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        if($pageClass == 'App\Filament\Resources\ContractResource\Pages\ViewContract' && config('rollo.hideRelationManagerOnViewContract')){
            return false;
        }
        return true;
    }
}

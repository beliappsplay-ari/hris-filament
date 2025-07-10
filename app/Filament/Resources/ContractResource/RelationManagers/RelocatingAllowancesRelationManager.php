<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\RelocatingAllowance;
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

class RelocatingAllowancesRelationManager extends RelationManager
{
    protected static string $relationship = 'relocatingAllowances';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('amount')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric(),
                DatePicker::make('effective_date'),
                TextInput::make('remark'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('amount')
            ->defaultSort('effective_date', 'desc')
            ->paginated(false)
            ->columns([
                TextColumn::make('amount')
                ->formatStateUsing(function ($state) {
                    return toRp($state,false);
                }),
                TextColumn::make('old_amount')
                ->formatStateUsing(function ($state) {
                    return toRp($state,false);
                }),
                TextColumn::make('effective_date'),
                TextColumn::make('remark'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->after(function(RelocatingAllowance $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $contract->update([
                        'relocating_allowance' => $record->amount
                    ]);
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->after(function(RelocatingAllowance $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $latestRelocatingAllowance = $contract->relocatingAllowances()->orderBy('effective_date','desc')->first();
                    if($record->id == $latestRelocatingAllowance->id){
                        $contract->update([
                            'relocating_allowance' => $record->amount
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

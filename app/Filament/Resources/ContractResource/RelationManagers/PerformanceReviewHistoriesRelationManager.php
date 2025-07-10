<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\PerformanceReviewHistory;
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
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerformanceReviewHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'performanceReviewHistories';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('amount')
                    ->mask(RawJs::make('$money($input)'))
                    ->stripCharacters(',')
                    ->numeric(),
                DatePicker::make('effective_date'),
                TextInput::make('ref_no'),
                TextInput::make('remark'),
                TextInput::make('reason'),
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
                TextColumn::make('ref_no'),
                TextColumn::make('remark'),
                TextColumn::make('reason'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                ->after(function(PerformanceReviewHistory $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $contract->update([
                        'performance_review_amount' => $record->amount
                    ]);
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->after(function(PerformanceReviewHistory $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $latestPerformanceReviewHistory = $contract->performanceReviewHistories()->orderBy('effective_date','desc')->first();
                    if($record->id == $latestPerformanceReviewHistory->id){
                        $contract->update([
                            'performance_review_amount' => $record->amount
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
}

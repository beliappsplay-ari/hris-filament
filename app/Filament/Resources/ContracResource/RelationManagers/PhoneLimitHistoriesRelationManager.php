<?php

namespace App\Filament\Resources\ContracResource\RelationManagers;

use App\Models\PhoneLimitHistory;
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

class PhoneLimitHistoriesRelationManager extends RelationManager
{
    protected static string $relationship = 'phoneLimitHistories';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('current_phone_limit')
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
            ->paginated(false)
            ->recordTitleAttribute('current_phone_limit')
            ->defaultSort('effective_date', 'desc')
            ->columns([
                TextColumn::make('current_phone_limit')
                    ->label('Current Phone Limit')
                    ->formatStateUsing(function ($state) {
                        return toRp($state,false);
                    }),
                TextColumn::make('old_phone_limit')
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
                    ->after(function (PhoneLimitHistory $record, array $data) {
                        $contract = $this->getOwnerRecord();
                        $contract->update([
                            'phone_limit' => $record->current_phone_limit
                        ]);
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->after(function (PhoneLimitHistory $record, array $data) {
                        $contract = $this->getOwnerRecord();
                        $latestPhoneLimitHistory = $contract->phoneLimitHistories()->orderBy('effective_date', 'desc')->first();
                        if ($record->id == $latestPhoneLimitHistory->id) {
                            $contract->update([
                                'phone_limit' => $record->current_phone_limit
                            ]);
                        }
                    }),
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

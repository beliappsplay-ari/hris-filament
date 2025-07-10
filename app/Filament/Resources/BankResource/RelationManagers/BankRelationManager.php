<?php

namespace App\Filament\Resources\BankResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BankRelationManager extends RelationManager
{
    protected static string $relationship = 'bank';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('bank_name')
                    ->options(config('rollo.banks'))
                    ->default(function(Model $record){
                        return $record->bank_code;
                    })
                    ->live()
                    ->afterStateUpdated(function (Get $get, Set $set) {
                        $set('bank_code', $get('bank_name'));
                    }),
                TextInput::make('bank_code')
                    ->live()
                    ->afterStateHydrated(function (Get $get, Set $set) {
                        $set('bank_name', $get('bank_code'));
                    })
                    ->readOnly()
                    ->numeric(),
                TextInput::make('bank_address')
                    ->maxLength(255),
                TextInput::make('bank_account')
                    ->required()
                    ->maxLength(255),
                TextInput::make('account_name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('bank_name')
            ->columns([
                Tables\Columns\TextColumn::make('bank_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank_code')
                    ->sortable(),
                Tables\Columns\TextColumn::make('bank_address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank_account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('account_name')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['bank_name'] = config('rollo.banks')[$data['bank_name']];
                        // dd($data);
                        return $data;
                    })
                // Tables\Actions\AttachAction::make()
                // ->preloadRecordSelect(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                ->mutateFormDataUsing(function (array $data): array {
                    $data['bank_name'] = config('rollo.banks')[$data['bank_name']];
                    // dd($data);
                    return $data;
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

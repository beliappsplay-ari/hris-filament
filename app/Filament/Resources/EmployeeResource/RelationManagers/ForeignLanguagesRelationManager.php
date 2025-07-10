<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ForeignLanguagesRelationManager extends RelationManager
{
    protected static string $relationship = 'foreignLanguages';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('language')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Radio::make('reading')
                    ->required()
                    ->options([
                        'Pure' => 'Pure',
                        'Fair' => 'Fair',
                        'Fluent' => 'Fluent'
                    ])
                    ->inline()
                    ->columnSpanFull(),
                Radio::make('writing')
                    ->required()
                    ->options([
                        'Pure' => 'Pure',
                        'Fair' => 'Fair',
                        'Fluent' => 'Fluent'
                    ])
                    ->inline()
                    ->columnSpanFull(),
                Radio::make('speaking')
                    ->required()
                    ->options([
                        'Pure' => 'Pure',
                        'Fair' => 'Fair',
                        'Fluent' => 'Fluent'
                    ])
                    ->inline()
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('language')
            ->columns([
                TextColumn::make('language'),
                TextColumn::make('reading'),
                TextColumn::make('writing'),
                TextColumn::make('speaking'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

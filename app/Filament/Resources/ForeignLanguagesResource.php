<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ForeignLanguagesResource\Pages;
use App\Filament\Resources\ForeignLanguagesResource\RelationManagers;
use App\Models\ForeignLanguage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ForeignLanguagesResource extends Resource
{
    protected static ?string $model = ForeignLanguage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('reading'),
                TextColumn::make('writing'),
                TextColumn::make('speaking'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListForeignLanguages::route('/'),
            'create' => Pages\CreateForeignLanguages::route('/create'),
            'view' => Pages\ViewForeignLanguages::route('/{record}'),
            'edit' => Pages\EditForeignLanguages::route('/{record}/edit'),
        ];
    }
}

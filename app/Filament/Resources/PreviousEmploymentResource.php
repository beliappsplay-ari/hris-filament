<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PreviousEmploymentResource\Pages;
use App\Filament\Resources\PreviousEmploymentResource\RelationManagers;
use App\Models\PreviousEmployment;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PreviousEmploymentResource extends Resource
{
    protected static ?string $model = PreviousEmployment::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-uturn-left';
    protected static ?string $navigationGroup = 'SETUP';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company')
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
            'index' => Pages\ListPreviousEmployments::route('/'),
            'create' => Pages\CreatePreviousEmployment::route('/create'),
            'view' => Pages\ViewPreviousEmployment::route('/{record}'),
            'edit' => Pages\EditPreviousEmployment::route('/{record}/edit'),
        ];
    }
}

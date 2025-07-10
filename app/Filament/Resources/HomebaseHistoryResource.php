<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomebaseHistoryResource\Pages;
use App\Filament\Resources\HomebaseHistoryResource\RelationManagers;
use App\Models\HomebaseHistory;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomebaseHistoryResource extends Resource
{
    protected static ?string $model = HomebaseHistory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('effective_date')
                ->columnSpanFull(),
                Select::make('homebase')
                    ->relationship(name: 'newHomebase', titleAttribute: 'name'),
                Select::make('old_homebase')
                    ->relationship(name: 'oldHomebase', titleAttribute: 'name'),
                TextInput::make('ref_no')
                    ->maxLength(255),
                TextInput::make('reason')
                    ->maxLength(255),
                DatePicker::make('ref_date'),
                TextInput::make('remark')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('effective_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('homebase')
                    ->searchable(),
                TextColumn::make('old_homebase')
                    ->searchable(),
                TextColumn::make('ref_no')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('reason')
                    ->searchable(),
                TextColumn::make('ref_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('remark')
                    ->searchable(),
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
            'index' => Pages\ListHomebaseHistories::route('/'),
            'create' => Pages\CreateHomebaseHistory::route('/create'),
            'view' => Pages\ViewHomebaseHistory::route('/{record}'),
            'edit' => Pages\EditHomebaseHistory::route('/{record}/edit'),
        ];
    }
}

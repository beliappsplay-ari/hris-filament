<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FamilyDetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'familyDetails';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('status')
                    ->options([
                        "Spouse"=> "Spouse",
                        "1st Children" => "1st Children", 
                        "2nd Children" => "2nd Children", 
                        "3rd Children"=> "3rd Children"
                    ]),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('sex')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female'
                    ]),
                DatePicker::make('date_marriage'),
                TextInput::make('place_marriage')
                    ->maxLength(255),
                DatePicker::make('birthday'),
                TextInput::make('birth_place')
                    ->maxLength(255),
                TextInput::make('address')
                    ->maxLength(255),
                TextInput::make('homephone')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('handphone')
                    ->tel()
                    ->maxLength(255),
                TextInput::make('occupation')
                    ->maxLength(255),
                TextInput::make('company')
                    ->maxLength(255),
                TextInput::make('type_of_education')
                    ->maxLength(255),
                TextInput::make('graduate'),    
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_marriage')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('place_marriage')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('birth_place')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('homephone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('handphone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('occupation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_of_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('graduate')
                    ->numeric()
                    ->sortable(),
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

<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use App\Models\Contract;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Pelmered\FilamentMoneyField\Tables\Columns\MoneyColumn;

class ContractsRelationManager extends RelationManager
{
    protected static string $relationship = 'contracts';
    protected static ?string $title = 'Job Placement';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type_of_contract_print')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('type_of_contract_print')
            ->defaultSort('contract_start_date', 'desc')
            ->columns([
                TextColumn::make('contract_start_date'),
                TextColumn::make('contract_end_date'),
                TextColumn::make('basic_salary'),
                TextColumn::make('employee_status'),
                TextColumn::make('further_status'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Action::make('New Job Placement')
                ->url(
                    function(){
                        return route('filament.admin.resources.employees.new-contract',$this->getOwnerRecord());
                    })
                // Action::make('New Contract')
                // ->url(
                //     function(){
                //         return route('filament.admin.resources.employees.new-contract');
                //     })
            ])
            ->actions([
                Action::make('View')
                    ->url(fn (Contract $record): string => route('filament.admin.resources.contracts.view', $record)),
                Tables\Actions\EditAction::make()
                    ->url(fn (Contract $record): string => route('filament.admin.resources.contracts.edit', $record)),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

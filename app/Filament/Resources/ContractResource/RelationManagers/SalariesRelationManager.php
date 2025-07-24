<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\Salary;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SalariesRelationManager extends RelationManager
{
    protected static string $relationship = 'salaries';
    protected static ?string $title = "Salary Histories";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('currency')
                    ->default('IDR'),
                    
                TextInput::make('old_salary')
                    ->label('Old Salary')
                    ->disabled()
                    ->formatStateUsing(function ($state) {
                        return $state ? toRp($state, false) : '';
                    })
                    ->dehydrated(true),
                TextInput::make('salary')
                    ->required(),
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
            ->recordTitleAttribute('salary')
            ->defaultSort('effective_date', 'desc')
            ->columns([
                TextColumn::make('salary')
                    ->formatStateUsing(function ($state) {
                        return toRp($state,false);
                    }),
                TextColumn::make('old_salary')
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

                 ->mutateFormDataUsing(function (array $data): array {
                        // Ambil salary terakhir dari contract untuk dijadikan old_salary
                        $contract = $this->getOwnerRecord();
                        $latestSalary = $contract->salaries()
                            ->orderBy('effective_date', 'desc')
                            ->first();
                        
                        // Set old_salary dari salary terakhir atau basic_salary dari contract
                        $data['old_salary'] = $latestSalary ? $latestSalary->salary : $contract->basic_salary;
                        
                        return $data;
                    })


                ->after(function(Salary $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $contract->update([
                        'basic_salary' => $record->salary
                    ]);
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()

                 ->fillForm(function (Salary $record): array {
                        // Saat edit, tampilkan data existing termasuk old_salary
                        return [
                            'currency' => $record->currency,
                            'old_salary' => $record->old_salary,
                            'salary' => $record->salary,
                            'effective_date' => $record->effective_date,
                            'ref_no' => $record->ref_no,
                            'reason' => $record->reason,
                            'ref_date' => $record->ref_date,
                            'remark' => $record->remark,
                        ];
                    })



                ->after(function(Salary $record, array $data){
                    $contract = $this->getOwnerRecord();
                    $latestSalary = $contract->salaries()->orderBy('effective_date','desc')->first();
                    if($record->id == $latestSalary->id){
                        $contract->update([
                            'basic_salary' => $record->salary
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

<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\ContractDepartment;
use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DepartmentsRelationManager extends RelationManager
{
    protected static string $relationship = 'departments';
    public ?string $tableSortColumn = 'effective_date';
    public ?string $tableSortDirection = 'desc';
    protected static ?string $title = "Department Histories";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('department_id')
                ->options(Department::all()->pluck('name','id')->toArray())
                ->required(),
                Select::make('old_department')
                    ->options(Department::all()->pluck('name','id')->toArray())
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
            ->defaultSort('effective_date', 'desc')
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('New Department'),
                TextColumn::make('old_department')
                    ->formatStateUsing(function (string $state) : string {
                        return Department::find($state)->name;
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
                AttachAction::make()
                    ->label('New Department')
                    ->color('primary')
                    ->form(fn (AttachAction $action): array => [
                    $action->getRecordSelect(),
                    DatePicker::make('effective_date'),
                    TextInput::make('ref_no'),
                    TextInput::make('reason'),
                    DatePicker::make('ref_date'),
                    TextInput::make('remark'),
                    ])
                    ->preloadRecordSelect()
                    ->after(function(AttachAction $action,Department $record, array $data){
                        $contract = $this->getOwnerRecord();
                        $departmentBefore = $contract->departments()->wherePivot('effective_date','<',$data['effective_date'])->orderBy('effective_date','desc')->first();
                        // dd($departmentNow);
                        if($departmentBefore){
                            $pivotHasToUpdate = ContractDepartment::where('effective_date',$data['effective_date'])
                                                ->where('contract_id',$contract->id)
                                                ->first();
                            $pivotHasToUpdate->update([
                                'old_department' => $departmentBefore->id
                            ]);

                            $contract->update([
                                'department' => $pivotHasToUpdate->department_id
                            ]);
                        }
                    
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DetachAction::make()->label('Delete'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    DetachBulkAction::make()->label('Delete Selected'),
                ]),
            ])
            ->allowDuplicates();
    }

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        if($pageClass == 'App\Filament\Resources\ContractResource\Pages\ViewContract' && config('rollo.hideRelationManagerOnViewContract')){
            return false;
        }
        return true;
    }
}

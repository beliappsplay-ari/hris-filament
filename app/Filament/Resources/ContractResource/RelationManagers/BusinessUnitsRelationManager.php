<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\BusinessUnit;
use App\Models\BusinessUnitContract;
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

class BusinessUnitsRelationManager extends RelationManager
{
    protected static string $relationship = 'businessUnits';
    public ?string $tableSortColumn = 'effective_date';
    public ?string $tableSortDirection = 'desc';
    protected static ?string $title = "Business Unit Histories";

    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('business_unit_id')
                ->options(BusinessUnit::all()->pluck('name','id')->toArray())
                ->required(),
            Select::make('old_business_unit')
                ->options(BusinessUnit::all()->pluck('name','id')->toArray())
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
            ->recordTitleAttribute('name')
            ->defaultSort('effective_date', 'desc')
            ->columns([
                TextColumn::make('name')
                    ->label('New Business Unit'),
                TextColumn::make('old_business_unit')
                    ->formatStateUsing(function (string $state) : string {
                        return BusinessUnit::find($state)->name;
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
                    ->label('New Business Unit')
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
                    ->after(function(AttachAction $action,BusinessUnit $record, array $data){
                        $contract = $this->getOwnerRecord();
                        $businessUnitBefore = $contract->businessUnits()->wherePivot('effective_date','<',$data['effective_date'])->orderBy('effective_date','desc')->first();
                        // dd($businessUnitBefore);
                        if($businessUnitBefore){
                            $pivotHasToUpdate = BusinessUnitContract::where('effective_date',$data['effective_date'])
                                                ->where('contract_id',$contract->id)
                                                ->first();
                            $pivotHasToUpdate->update([
                                'old_business_unit' => $businessUnitBefore->id
                            ]);

                            $contract->update([
                                'business_unit' => $pivotHasToUpdate->business_unit_id
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

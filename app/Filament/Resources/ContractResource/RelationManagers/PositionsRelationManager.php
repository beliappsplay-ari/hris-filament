<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\ContractPosition;
use App\Models\Position;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PositionsRelationManager extends RelationManager
{
    protected static string $relationship = 'positions';
    public ?string $tableSortColumn = 'effective_date';
    public ?string $tableSortDirection = 'desc';
    protected static ?string $title = "Position Histories";

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('position_id')
                    ->options(Position::all()->pluck('title','id')->toArray())
                    ->required(),
                Select::make('old_position')
                    ->options(Position::all()->pluck('title','id')->toArray())
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
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title')
                    ->label('New Position'),
                TextColumn::make('old_position')
                    ->formatStateUsing(function (string $state) : string {
                        return Position::find($state)->title;
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
                    ->label('New Position')
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
                    ->after(function(AttachAction $action,Position $record, array $data){
                        $contract = $this->getOwnerRecord();
                        $positionBefore = $contract->positions()->wherePivot('effective_date','<',$data['effective_date'])->orderBy('effective_date','desc')->first();
                        // dd($positionNow);
                        if($positionBefore){
                            $pivotHasToUpdate = ContractPosition::where('effective_date',$data['effective_date'])
                                                ->where('contract_id',$contract->id)
                                                ->first();
                            $pivotHasToUpdate->update([
                                'old_position' => $positionBefore->id
                            ]);

                            $contract->update([
                                'position' => $pivotHasToUpdate->position_id
                            ]);
                        }
                    
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make()->label('Delete'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make()->label('Delete Selected'),
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

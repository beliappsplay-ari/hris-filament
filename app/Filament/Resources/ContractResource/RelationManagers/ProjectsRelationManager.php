<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\ContractProject;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';
    public ?string $tableSortColumn = 'effective_date';
    public ?string $tableSortDirection = 'desc';
    protected static ?string $title = "Project Histories";
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('project_id')
                    ->options(Project::all()->pluck('name', 'id')->toArray())
                    ->required(),
                DatePicker::make('effective_date'),
                TextInput::make('reason'),
                TextInput::make('remark'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->allowDuplicates()
            ->paginated(false)
            ->defaultSort('effective_date', 'desc')
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('Project'),
                TextColumn::make('old_project_id')
                    ->label('Old Project')
                    ->formatStateUsing(function (string $state) : string {
                        return Project::find($state)->name;
                    }),
                TextColumn::make('effective_date'),
                TextColumn::make('reason'),
                TextColumn::make('remark'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                AttachAction::make()
                    ->label('New Project')
                    ->color('primary')
                    ->form(fn (AttachAction $action): array => [
                    $action->getRecordSelect(),
                    DatePicker::make('effective_date'),
                    TextInput::make('reason'),
                    TextInput::make('remark'),
                    ])
                    ->preloadRecordSelect()
                    ->after(function(AttachAction $action,Project $record, array $data){
                        $contract = $this->getOwnerRecord();
                        $projectBefore = $contract->projects()->wherePivot('effective_date','<',$data['effective_date'])->orderBy('effective_date','desc')->first();
                        
                        if($projectBefore){
                            $pivotHasToUpdate = ContractProject::where('effective_date',$data['effective_date'])
                                                ->where('contract_id',$contract->id)
                                                ->first();
                            $pivotHasToUpdate->update([
                                'old_project_id' => $projectBefore->id
                            ]);

                            $contract->update([
                                'project' => $pivotHasToUpdate->project_id
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
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

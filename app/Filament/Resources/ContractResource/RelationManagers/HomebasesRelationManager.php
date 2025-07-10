<?php

namespace App\Filament\Resources\ContractResource\RelationManagers;

use App\Models\ContractHomebase;
use App\Models\Contract;
use App\Models\Homebase;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomebasesRelationManager extends RelationManager
{
    protected static string $relationship = 'homebases';
    public ?string $tableSortColumn = 'effective_date';
    public ?string $tableSortDirection = 'desc';
    protected static ?string $title = "Homebase Histories";
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('homebase_id')
                    ->options(Homebase::all()->pluck('name', 'id')->toArray())
                    ->required(),
                // Select::make('old_homebase')
                //     ->options(Homebase::all()->pluck('name','id')->toArray())
                //     ->required(),
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
                    ->label('New Homebase'),
                TextColumn::make('old_homebase')
                    ->formatStateUsing(function (string $state): string {
                        return Homebase::find($state)->name;
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
                // CreateAction::make(),
                AttachAction::make()
                    ->label('New Homebase')
                    ->color('primary')
                    ->form(fn(AttachAction $action): array => [
                        $action->getRecordSelect(),
                        DatePicker::make('effective_date'),
                        TextInput::make('ref_no'),
                        TextInput::make('reason'),
                        DatePicker::make('ref_date'),
                        TextInput::make('remark'),
                    ])
                    ->preloadRecordSelect()
                    ->before(function (AttachAction $action, array $data) {
                        // dd($data);
                    })
                    ->after(function (AttachAction $action, Homebase $record, array $data) {
                        // dd($data);
                        $contract = $this->getOwnerRecord();
                        $homebaseBefore = $contract->homebases()->wherePivot('effective_date', '<', $data['effective_date'])->orderBy('effective_date', 'desc')->first();
                        // dd($homebaseNow);
                        if ($homebaseBefore) {
                            $pivotHasToUpdate = ContractHomebase::where('effective_date', $data['effective_date'])
                                ->where('contract_id', $contract->id)
                                ->first();

                            $pivotHasToUpdate->update([
                                'old_homebase' => $homebaseBefore->id
                            ]);
                        }

                        $currentWorkbase = Homebase::find($data['recordId'])->name;
                        $test = $contract->currentWorkbases()->create([
                            'effective_date' => $data['effective_date'],
                            'current_workbase' => $currentWorkbase,
                            'old_current_workbase' => $homebaseBefore ? $homebaseBefore->name :null,
                            'remark' => $data['remark']
                        ]);

                        $contract->update([
                            'homebase' => $data['recordId'],
                            'current_workbase' => $currentWorkbase
                        ]);
                    }),
            ])
            ->actions([
                EditAction::make()
                    ->after(function (Homebase $record, EditAction $action, array $data) {
                        $contract = $this->getOwnerRecord();
                        $latestHomebase = $contract->homebases()->orderByPivot('effective_date', 'desc')->first();
                        // dd($contract);
                        // dd($action->getFormData()['homebase_id']);
                        // dd($latestHomebase->pivot->id);
                        if ($record->pivot_id == $latestHomebase->pivot->id) {
                            // dd('true');
                            $contract->homebase = $action->getFormData()['homebase_id'];
                            $contract->save();
                        }
                    }),
                DetachAction::make()->label('Delete'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DetachBulkAction::make()->label('Delete Selected'),
                ]),
            ])
            ->allowDuplicates();
    }

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        if ($pageClass == 'App\Filament\Resources\ContractResource\Pages\ViewContract' && config('rollo.hideRelationManagerOnViewContract')) {
            return false;
        }
        return true;
    }
}

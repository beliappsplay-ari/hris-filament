<?php

namespace App\Filament\Resources\AdvanceResource\Pages;

use App\Filament\Resources\AdvanceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvance extends EditRecord
{
    protected static string $resource = AdvanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        if($this->record->release_on){
            if($this->record->deduction){
                $this->record->deduction()->update([
                    'amount' => $this->record->amount_release
                ]);
            }else{
                $this->record->deduction()->create([
                    'type_of_deduction' => 2,
                    'employee_id' => $this->record->employee_id,
                    'date_of_deduction' => $this->record->release_on,
                    'amount' => $this->record->amount_release,
                    'period_timesheet' => $this->record->period,
                    'remark' => $this->record->remark
                ]);
            }
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

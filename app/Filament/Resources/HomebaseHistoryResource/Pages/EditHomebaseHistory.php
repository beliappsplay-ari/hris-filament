<?php

namespace App\Filament\Resources\HomebaseHistoryResource\Pages;

use App\Filament\Resources\HomebaseHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomebaseHistory extends EditRecord
{
    protected static string $resource = HomebaseHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }

    protected function getRedirectUrl(): ?string
    {
        // dd($this->record->jobPlace);
        return route('filament.admin.resources.employees.jobplace',$this->record->jobPlace->employee->id);
    }
}

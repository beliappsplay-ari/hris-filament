<?php

namespace App\Filament\Resources\JobHistoryResource\Pages;

use App\Filament\Resources\JobHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJobHistory extends EditRecord
{
    protected static string $resource = JobHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

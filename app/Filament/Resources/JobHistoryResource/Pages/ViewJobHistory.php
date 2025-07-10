<?php

namespace App\Filament\Resources\JobHistoryResource\Pages;

use App\Filament\Resources\JobHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJobHistory extends ViewRecord
{
    protected static string $resource = JobHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

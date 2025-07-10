<?php

namespace App\Filament\Resources\PreviousEmploymentResource\Pages;

use App\Filament\Resources\PreviousEmploymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPreviousEmployment extends ViewRecord
{
    protected static string $resource = PreviousEmploymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\FurtherStatusResource\Pages;

use App\Filament\Resources\FurtherStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFurtherStatus extends ViewRecord
{
    protected static string $resource = FurtherStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

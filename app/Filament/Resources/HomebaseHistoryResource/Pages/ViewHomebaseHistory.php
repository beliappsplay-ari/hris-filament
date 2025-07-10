<?php

namespace App\Filament\Resources\HomebaseHistoryResource\Pages;

use App\Filament\Resources\HomebaseHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHomebaseHistory extends ViewRecord
{
    protected static string $resource = HomebaseHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\OthersIncomeTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeTaxableResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOthersIncomeTaxable extends ViewRecord
{
    protected static string $resource = OthersIncomeTaxableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

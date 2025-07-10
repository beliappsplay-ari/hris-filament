<?php

namespace App\Filament\Resources\OthersIncomeTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeTaxableResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOthersIncomeTaxable extends CreateRecord
{
    protected static string $resource = OthersIncomeTaxableResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}

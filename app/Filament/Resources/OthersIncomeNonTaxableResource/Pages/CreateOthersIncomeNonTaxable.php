<?php

namespace App\Filament\Resources\OthersIncomeNonTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeNonTaxableResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOthersIncomeNonTaxable extends CreateRecord
{
    protected static string $resource = OthersIncomeNonTaxableResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // dd($data);
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}

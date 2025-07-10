<?php

namespace App\Filament\Resources\OthersIncomeNonTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeNonTaxableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOthersIncomeNonTaxable extends EditRecord
{
    protected static string $resource = OthersIncomeNonTaxableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}

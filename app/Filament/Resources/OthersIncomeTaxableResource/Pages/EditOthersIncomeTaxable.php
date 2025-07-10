<?php

namespace App\Filament\Resources\OthersIncomeTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeTaxableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOthersIncomeTaxable extends EditRecord
{
    protected static string $resource = OthersIncomeTaxableResource::class;

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

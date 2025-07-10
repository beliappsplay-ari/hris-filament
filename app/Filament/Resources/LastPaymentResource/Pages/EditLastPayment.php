<?php

namespace App\Filament\Resources\LastPaymentResource\Pages;

use App\Filament\Resources\LastPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLastPayment extends EditRecord
{
    protected static string $resource = LastPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

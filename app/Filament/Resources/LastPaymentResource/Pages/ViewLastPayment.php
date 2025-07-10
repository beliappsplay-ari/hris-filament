<?php

namespace App\Filament\Resources\LastPaymentResource\Pages;

use App\Filament\Resources\LastPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLastPayment extends ViewRecord
{
    protected static string $resource = LastPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

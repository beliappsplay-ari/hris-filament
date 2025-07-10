<?php

namespace App\Filament\Resources\LastPaymentResource\Pages;

use App\Filament\Resources\LastPaymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLastPayments extends ListRecords
{
    protected static string $resource = LastPaymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

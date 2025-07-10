<?php

namespace App\Filament\Resources\OthersIncomeNonTaxableResource\Pages;

use App\Filament\Resources\OthersIncomeNonTaxableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOthersIncomeNonTaxables extends ListRecords
{
    protected static string $resource = OthersIncomeNonTaxableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

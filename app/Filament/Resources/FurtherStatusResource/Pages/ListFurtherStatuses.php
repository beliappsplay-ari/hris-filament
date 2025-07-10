<?php

namespace App\Filament\Resources\FurtherStatusResource\Pages;

use App\Filament\Resources\FurtherStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFurtherStatuses extends ListRecords
{
    protected static string $resource = FurtherStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

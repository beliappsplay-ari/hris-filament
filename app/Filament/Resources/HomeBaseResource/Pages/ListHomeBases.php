<?php

namespace App\Filament\Resources\HomeBaseResource\Pages;

use App\Filament\Resources\HomeBaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeBases extends ListRecords
{
    protected static string $resource = HomeBaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

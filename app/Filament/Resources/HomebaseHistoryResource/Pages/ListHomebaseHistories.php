<?php

namespace App\Filament\Resources\HomebaseHistoryResource\Pages;

use App\Filament\Resources\HomebaseHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomebaseHistories extends ListRecords
{
    protected static string $resource = HomebaseHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

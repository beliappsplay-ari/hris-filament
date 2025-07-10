<?php

namespace App\Filament\Resources\PreviousEmploymentResource\Pages;

use App\Filament\Resources\PreviousEmploymentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPreviousEmployments extends ListRecords
{
    protected static string $resource = PreviousEmploymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

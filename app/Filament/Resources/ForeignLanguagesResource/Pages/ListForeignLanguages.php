<?php

namespace App\Filament\Resources\ForeignLanguagesResource\Pages;

use App\Filament\Resources\ForeignLanguagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListForeignLanguages extends ListRecords
{
    protected static string $resource = ForeignLanguagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

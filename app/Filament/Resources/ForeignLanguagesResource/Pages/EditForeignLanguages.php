<?php

namespace App\Filament\Resources\ForeignLanguagesResource\Pages;

use App\Filament\Resources\ForeignLanguagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditForeignLanguages extends EditRecord
{
    protected static string $resource = ForeignLanguagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

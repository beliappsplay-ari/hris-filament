<?php

namespace App\Filament\Resources\HomeBaseResource\Pages;

use App\Filament\Resources\HomeBaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeBase extends EditRecord
{
    protected static string $resource = HomeBaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

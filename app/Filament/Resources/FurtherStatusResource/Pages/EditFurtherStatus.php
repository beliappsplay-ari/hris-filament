<?php

namespace App\Filament\Resources\FurtherStatusResource\Pages;

use App\Filament\Resources\FurtherStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFurtherStatus extends EditRecord
{
    protected static string $resource = FurtherStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

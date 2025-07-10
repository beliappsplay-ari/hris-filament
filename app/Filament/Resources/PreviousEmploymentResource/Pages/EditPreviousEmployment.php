<?php

namespace App\Filament\Resources\PreviousEmploymentResource\Pages;

use App\Filament\Resources\PreviousEmploymentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPreviousEmployment extends EditRecord
{
    protected static string $resource = PreviousEmploymentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

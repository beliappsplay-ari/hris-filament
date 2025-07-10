<?php

namespace App\Filament\Resources\EmployeeAdditionalDetailResource\Pages;

use App\Filament\Resources\EmployeeAdditionalDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployeeAdditionalDetail extends EditRecord
{
    protected static string $resource = EmployeeAdditionalDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

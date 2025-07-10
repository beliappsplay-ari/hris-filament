<?php

namespace App\Filament\Resources\EmployeeAdditionalDetailResource\Pages;

use App\Filament\Resources\EmployeeAdditionalDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEmployeeAdditionalDetail extends ViewRecord
{
    protected static string $resource = EmployeeAdditionalDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

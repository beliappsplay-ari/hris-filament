<?php

namespace App\Filament\Resources\ContractResource\Pages;

use App\Filament\Resources\ContractResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;

class ViewContract extends ViewRecord
{
    protected static string $resource = ContractResource::class;
    // protected static string $view = 'filament.resources.contract-resource.pages.view-contract';
    protected function getHeaderActions(): array
    {
        return [
            Action::make('Print')
                // ->link(route('contracts.print',$this->record))
                ->url(fn (): string => route('contracts.print', ['contract' => $this->record->id]))
                ->color('info')
                ->openUrlInNewTab(),
            Actions\EditAction::make(),
        ];
    }

    public function getBreadcrumbs(): array
    {
        return [
            route('filament.admin.resources.employees.index') => 'Employees',
            route('filament.admin.resources.employees.view', $this->record->employee_id) => $this->record->employee->personalData->first_name,
            '#' => 'Contract Detail',

        ];
    }
}

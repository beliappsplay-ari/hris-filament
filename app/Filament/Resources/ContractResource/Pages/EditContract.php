<?php

namespace App\Filament\Resources\ContractResource\Pages;

use App\Filament\Resources\ContractResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContract extends EditRecord
{
    protected static string $resource = ContractResource::class;

    protected function getHeaderActions(): array
    {
        $employeeId = $this->record->employee_id;
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make()
            ->successRedirectUrl(route('filament.admin.resources.employees.view',$employeeId))
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

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['start_payroll'] = Carbon::createFromFormat('Ymd', $this->data['start_payroll'] . '01')->format('Y-m-d');

        return $data;
    }
}

<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Models\Employee;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;

class ViewEmployee extends ViewRecord
{
    protected static string $resource = EmployeeResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Action::make('Copy ID')
                ->label('Copy ID')
                ->color('info')
                ->form([
                    TextInput::make('Employee Name')
                        ->readOnly()
                        ->default(function(Employee $record){
                            return $record->personalData->first_name.' '.$record->personalData->last_name;
                        }),
                    TextInput::make('empno')
                        ->label('New EMPNO')
                        ->readOnly()
                        ->default(function(Employee $record){
                            return generateEMPNO();
                        })
                ])
                ->action(function (array $data, Employee $record): void {
                    $record->load('personalData','additionalDetails','bank','familyDetails','educations','foreignLanguages','jobHistories');
                    // dd($record->bank);
                    $copyEmployee = $record;
                    $copyEmployee->empno = $data['empno'];
                    // $copyPersonalData = $record->personalData;
                    // $copyAdditionalDetails = $record->copyAdditionalDetails;

                    $newEmployee = Employee::create($copyEmployee->toArray());
                    $newEmployee->personalData()->create($record->personalData->toArray());
                    $newEmployee->additionalDetails()->create($record->additionalDetails->toArray());
                    foreach($record->bank as $bank){
                        $newEmployee->bank()->create($bank->toArray());
                    }
                    foreach($record->familyDetails as $familyDetail){
                        $newEmployee->familyDetails()->create($familyDetail->toArray());
                    }
                    foreach($record->educations as $education){
                        $newEmployee->educations()->create($education->toArray());
                    }
                    foreach($record->foreignLanguages as $foreignLanguage){
                        $newEmployee->foreignLanguages()->create($foreignLanguage->toArray());
                    }
                    foreach($record->jobHistories as $jobHistory){
                        $newEmployee->jobHistories()->create($jobHistory->toArray());
                    }
                    redirect()->route('filament.admin.resources.employees.view',$newEmployee->id);
                    Notification::make()
                        ->title('ID Copied successfully')
                        ->success()
                        ->send();
                })
        ];
    }
    
}

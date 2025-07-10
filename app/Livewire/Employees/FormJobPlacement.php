<?php

namespace App\Livewire\Employees;

use App\Models\ContractHistory;
use App\Models\Division;
use App\Models\Employee;
use App\Models\Homebase;
use App\Models\JobPlace;
use App\Models\Position;
use App\Models\Project;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Illuminate\Support\HtmlString;
use Livewire\Component;

class FormJobPlacement extends Component implements HasForms
{

    use InteractsWithForms;
    public $data = [];
    public $employee;

    public function mount(Employee $employee){
        $this->$employee = $employee;
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.employees.form-job-placement',[
            'homebases' => Homebase::all(),
            'positions' => Position::all(),
            'projects' => Project::all(),
            'divisions' => Division::all()
        ]);
    }

    public function getFormSchema() : Array {
        return [
            Wizard::make([
                Wizard\Step::make('Order')
                    ->schema([
                        TextInput::make('name')
                        ->required()
                    ]),
                    Wizard\Step::make('Delivery')
                    ->schema([
                        TextInput::make('address')
                        // ...
                    ]),
                    Wizard\Step::make('Billing')
                    ->schema([
                        TextInput::make('phone')
                        // ...
                    ]),
            ])
            ->submitAction(new HtmlString('<button type="submit">Submit</button>'))
        ];
    }

    public function update():void
    {
        $this->employee->load('jobPlace','personalData');
        
        $dataToInsert = array_diff_key($this->data,array_flip(['is_ex_nsn',"transfer_dates","amount_transferred" ,"received_dates","amount_received","received_dge_bank","bt_period","allowance_bt_amount","btid_no_settled_id","exp_without_bt_amount","start_claim_date","type_of_contract_print"]));
        $dataToInsert['employee_id'] = $this->employee->id;
        $dataToInsert['is_blacklisted'] = 0;
        
        if($this->employee->jobPlace){
            $this->employee->jobPlace->update($dataToInsert);
            $jobPlace = $this->employee->jobPlace;
        }else{
            $jobPlace = JobPlace::create($dataToInsert);
        }

        ContractHistory::create([
            'job_place_id' => $jobPlace->id,
            'start_of_contract' => $jobPlace->contract_start_date,
            'end_of_contract' => $jobPlace->contract_end_date,
            'type_of_contract_print' => $this->data['type_of_contract_print']
        ]);

        $this->redirect(route('filament.admin.resources.employees.jobplace',$this->employee->id));
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();
    }
}

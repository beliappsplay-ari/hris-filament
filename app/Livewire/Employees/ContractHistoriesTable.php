<?php

namespace App\Livewire\Employees;

use App\Models\Employee;
use Livewire\Component;

class ContractHistoriesTable extends Component
{

    public $employee;

    public function mount(Employee $employee){
        $this->$employee = $employee;
    }
    public function render()
    {
        return view('livewire.employees.contract-histories-table');
    }
}

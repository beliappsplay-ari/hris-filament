<?php

namespace App\Livewire\Employees;

use App\Models\Employee;
use Livewire\Component;

class PositionHistoriesTable extends Component
{

    public $positions;

    public function mount($positions){
        $this->$positions = $positions;
    }
    public function render()
    {
        return view('livewire.employees.position-histories-table');
    }
}

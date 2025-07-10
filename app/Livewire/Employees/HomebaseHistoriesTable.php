<?php

namespace App\Livewire\Employees;

use App\Models\Employee;
use Livewire\Component;

class HomebaseHistoriesTable extends Component
{

    public $homebases;

    public function mount($homebases){
        $this->$homebases = $homebases;
    }
    public function render()
    {
        return view('livewire.employees.homebase-histories-table');
    }
}

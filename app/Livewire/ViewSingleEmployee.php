<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ViewSingleEmployee extends Component
{
    public Model $record;
    public $employee;

    public function mount(Model $record) {
        $this->employee = $record->load('personalData');
    }
    public function render()
    {
        return view('livewire.view-single-employee');
    }
}

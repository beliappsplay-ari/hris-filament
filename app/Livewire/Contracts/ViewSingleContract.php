<?php

namespace App\Livewire\Contracts;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ViewSingleContract extends Component
{

    public Model $record;
    public $contract;

    public function mount(Model $record) {
        $this->contract = $record->load('employee.personalData');
    }
    public function render()
    {
        return view('livewire.contracts.view-single-contract');
    }
}

<x-filament-panels::page>
    @php
        $record->load('contracts.homebases','jobPlace.salaryHistory','jobPlace.originalWorkbaseHistory','jobPlace.currentWorkbaseHistory');
    @endphp

    <form method="POST" wire:submit="create">
        {{ $this->form }}
    </form>
    {{-- @livewire('employees.form-job-placement',['employee' => $record]) --}}
    @livewire('employees.contract-histories-table', ['employee' => $record])
    {{-- @livewire('employees.salary-histories-table', ['employee' => $record])
    @livewire('employees.homebase-histories-table', ['homebases' => $contract->homebases])
    @livewire('employees.original-workbase-histories-table', ['employee' => $record])
    @livewire('employees.current-workbase-histories-table', ['employee' => $record]) --}}
</x-filament-panels::page>
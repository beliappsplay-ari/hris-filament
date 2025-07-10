<x-filament-panels::page>
    <form method="POST" wire:submit="create">
        {{ $this->form }}
        <button type="submit" style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="mt-3 fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">Submit</button>
    </form>
    {{-- @livewire('employees.form-job-placement',['employee' => $record]) --}}
    {{-- @livewire('employees.contract-histories-table', ['employee' => $record]) --}}
    {{-- @livewire('employees.salary-histories-table', ['employee' => $record])
    @livewire('employees.homebase-histories-table', ['homebases' => $contract->homebases])
    @livewire('employees.original-workbase-histories-table', ['employee' => $record])
    @livewire('employees.current-workbase-histories-table', ['employee' => $record]) --}}
</x-filament-panels::page>

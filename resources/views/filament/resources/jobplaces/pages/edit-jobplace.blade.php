<x-filament-panels::page>
    <x-filament-panels::form wire:submit="update">
        @livewire('edit-job-place',['jobPlace' => $record->load('employee.personalData')])
 
        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>
</x-filament-panels::page>
<x-filament-panels::page>
    <x-filament-panels::form wire:submit="create">
        @livewire('create-job-place')
 
        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>
</x-filament-panels::page>
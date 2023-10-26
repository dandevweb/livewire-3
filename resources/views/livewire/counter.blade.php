<div>
    <div>
        Hello World
    </div>

    <br>

    Counter:: {{ $counter }}

    <br>
    {{-- <x-text-input wire:model.live="counter" /> --}}
    <x-text-input wire:model.blur="counter" />
    <x-primary-button wire:click='refresh'>
        Refresh
    </x-primary-button>

    <br><br>

    Name:: {{ $name }} {{ $lastName }}
</div>

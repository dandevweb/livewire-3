<div>
    <div>
        Hello World
    </div>

    <br>

    Counter:: {{ $counter }}

    <br>
    <x-text-input wire:model.live="name" />
    <x-text-input wire:model.blur="counter" />
    <x-primary-button wire:click='refresh'>
        Refresh
    </x-primary-button>

    <br><br>

    <div x-data>
        <span x-text='$wire.name'></span>
        <x-secondary-button x-on:click="$wire.set('name', 'Jeremias')">Jeremias</x-secondary-button>

    </div>


    <br><br>

    Name:: {{ $name }} {{ $lastName }}
</div>

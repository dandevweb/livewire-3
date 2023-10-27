<div>
    User:: {{ $user->name }} :: {{ $user->email }}
    <x-primary-button wire:click='refresh'>
        Refresh
    </x-primary-button>

</div>

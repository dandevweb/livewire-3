<form wire:submit='submit' class="flex flex-col gap-4">
    <div>
        <x-text-input wire:model.blur='name' placeholder="User Name" />
        @error('name')
            <div class="text-sm font-semibold text-red-500 font-italic">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model.live='email' placeholder="User Email" />
        @error('email')
            <div class="text-sm font-semibold text-red-500 font-italic">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model.blur='password' type="password" placeholder="Password" />
        @error('password')
            <div class="text-sm font-semibold text-red-500 font-italic">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model.blur='password_confirmation' type="password"
            placeholder="Password Confirmation" />
    </div>

    <div>
        <x-primary-button>
            Save User
        </x-primary-button>
    </div>
</form>

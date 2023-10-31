<form wire:submit='submit' class="flex flex-col gap-4">
    <div>
        <x-text-input wire:model='name' placeholder="User Name" />
        @error('name')
            <div class="text-sm font-semibold text-red-500 font-italic">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model='email' placeholder="User Email" />
        @error('email')
            <div class="text-sm font-semibold text-red-500 font-italic">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model='password' type="password" placeholder="Password" />
        @error('password')
            <div class="text-sm font-semibold text-red-500 font-italic">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model='password_confirmation' type="password"
            placeholder="Password Confirmation" />
    </div>

    <div>
        <x-primary-button>
            Save User
        </x-primary-button>
    </div>
</form>

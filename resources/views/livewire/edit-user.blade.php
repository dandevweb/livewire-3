<form wire:submit='submit' class="flex flex-col gap-4">
    <div>
        <x-text-input wire:model.blur='form.name' placeholder="User Name" />
        @error('form.name')
            <div class="font-italic text-sm font-semibold text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model.live='form.email' placeholder="User Email" />
        @error('form.email')
            <div class="font-italic text-sm font-semibold text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model.blur='form.password' type="password" placeholder="Password" />
        @error('form.password')
            <div class="font-italic text-sm font-semibold text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <x-text-input wire:model.blur='form.password_confirmation' type="password"
            placeholder="Password Confirmation" />
    </div>

    <div>
        <x-primary-button>
            Save User
        </x-primary-button>
    </div>
</form>

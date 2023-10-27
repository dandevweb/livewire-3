<form wire:submit='calculate'>
    <x-text-input placeholder="Primeiro número" wire:model='num1' />
    <select wire:model='operator' class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <x-text-input placeholder="Segundo número" wire:model='num2' />
    <x-primary-button wire:submit='calculate' type="submit">Calcular</x-primary-button>

    <br>

    Resultado: {{ $result }}
</form>

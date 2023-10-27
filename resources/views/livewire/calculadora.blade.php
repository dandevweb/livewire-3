<form wire:submit='calculate'>
    <x-text-input placeholder="Primeiro número" wire:model='num1' wire:keydown.y='naoQueroY' />
    <select wire:model='operator' class="text-slate-700">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <x-text-input placeholder="Segundo número" wire:model='num2' />
    <x-primary-button type="submit">
        <span wire:loading.class='hidden' wire:target='calculate'>Calcular</span>
        <span wire:loading wire:target='calculate'>Calculando...</span>
    </x-primary-button>

    <br>

    Resultado: {{ $result }}
</form>

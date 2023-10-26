<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Counter extends Component
{
    #[Locked]
    public int $counter = 0;

    public string $name = '';
    public string $lastName = '';

    public function mount(): void
    {
        $this->counter = 100;

        $this->fill([
            'name' => 'John',
            'lastName' => 'Doe',
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function refresh(): void
    {
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;

    public function mount(): void
    {
        $this->counter = 100;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}

<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Calculadora extends Component
{
    public int $num1 = 0;
    public float $num2 = 0;
    public string $operator = '+';
    public float $result = 0;


    public function render()
    {
        return view('livewire.calculadora');
    }

    public function calculate()
    {
        sleep(1);
        $tmp = "{$this->num1} {$this->operator} {$this->num2};";

        $this->result = eval('return ' . $tmp);

        Log::info("Calculou: {$tmp} = {$this->result}");
    }

    public function naoQueroY()
    {
        $this->num1 = str($this->num1)->replace('y', 'Não quero Y');
        sleep(3);
    }

    public function add10($prop)
    {
        $this->authorize('add10', $this);

        $this->$prop += 10;
    }
}

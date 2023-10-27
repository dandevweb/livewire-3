<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Calculadora extends Component
{
    public ?string $num1 = null;
    public float $num2 = 0;
    public string $operator = '+';
    public float $result = 0;


    public function render()
    {
        return view('livewire.calculadora');
    }

    public function calculate()
    {
        sleep(3);
        $tmp = "{$this->num1} {$this->operator} {$this->num2};";

        $this->result = eval('return ' . $tmp);

        Log::info("Calculou: {$tmp} = {$this->result}");
    }

    public function naoQueroY()
    {
        $this->num1 = str($this->num1)->replace('y', 'Não quero Y');
        sleep(3);
    }
}

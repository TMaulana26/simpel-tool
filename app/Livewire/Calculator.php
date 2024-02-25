<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $num1 = 0;
    public $num2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $num1 = (float)$this->num1;
        $num2 = (float)$this->num2;
        if ($this->action == '+') {
            $this->result = $num1 + $num2;
            \Log::info('Calculate method called with result: ' . $this->result);
        } elseif ($this->action == '-') {
            $this->result = $num1 - $num2;
            \Log::info('Calculate method called with result: ' . $this->result);
        } elseif ($this->action == ':') {
            $this->result = $num1 / $num2;
            \Log::info('Calculate method called with result: ' . $this->result);
        } elseif ($this->action == 'x') {
            $this->result = $num1 * $num2;
            \Log::info('Calculate method called with result: ' . $this->result);
        } elseif ($this->action == '%') {
            $this->result = $num1 / 100 * $num2;
            \Log::info('Calculate method called with result: ' . $this->result);
        }
    }

    public function updated($property)
    {
        if ($this->num1 == '' || $this->num2 == '') {
            $this->disabled = true;
        } else {
            $this->disabled = false;
        }
    }
}

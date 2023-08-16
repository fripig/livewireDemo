<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{
    public function getCount(): void
    {
        $this->count = rand(50,999999);
    }
    public function render()
    {
        return <<<'HTML'
        <div>
        線上人數 : {{ $count }}
        <button wire:click="getCount">update</button>
        </div>
        HTML;
    }
}

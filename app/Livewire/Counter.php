<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function getCount(): void
    {
        $this->count = rand(50,999999);
    }
    public function render()
    {
        return view('livewire.counter');
    }
}

<?php

namespace App\Livewire\Traits;

trait useCount
{
    public $count = 0;
    public function getCount(): void
    {
        $this->count = rand(50,999999);
    }
}

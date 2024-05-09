<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class CustomPagination extends Component
{
    public function render()
    {
        return view('livewire.custom-pagination');
    }
    public function scrollToTop()
    {
        Livewire::emit('scrollToTop');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class SidebarComponent extends Component
{
    public $currentPage;

    public function mount($currentPage)
    {
        $this->currentPage = $currentPage;
    }

    public function render()
    {
        return view('livewire.sidebar-component');
    }
}

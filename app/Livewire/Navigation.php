<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $label;
    public $content = [];
    public $isOpen = false;
    public $key;
    public $url;

    public function mount($label, $content, $key, $url = null)
    {
        $this->label = $label;
        $this->content = $content;
        $this->key = $key;
        $this->url = $url;
    }

    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function closeDropdown()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}

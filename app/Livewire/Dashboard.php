<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $currentPage = 'kelas';
    public function render()
    {
        return view('livewire.dashboard');
    }
    public function page($page)
    {
        $this->currentPage = $page;
    }
}

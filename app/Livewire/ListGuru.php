<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class ListGuru extends Component
{
    public $kelas;
    public $guruList = [];
    public function mount()
    {
        $this->kelas = Kelas::with('guru')->get();
        $this->guruList = $this->kelas->pluck('guru')->flatten();
    }
    public function render()
    {
        return view('livewire.list-guru');
    }
}

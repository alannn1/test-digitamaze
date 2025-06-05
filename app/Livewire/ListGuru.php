<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class ListGuru extends Component
{
    public $kelas;
    public $guruList = [];
    public function mount($kelasId)
    {
        $this->kelas = Kelas::with('guru')->findOrFail($kelasId);
        $this->guruList = $this->kelas->guru;
    }
    public function render()
    {
        return view('livewire.list-guru');
    }
}

<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class ListKelas extends Component
{
    public $kelasList = [];
    public function mount()
    {
        $this->kelasList = Kelas::with(['siswa', 'guru'])->get();
    }
    public function render()
    {
        return view('livewire.list-kelas');
    }
}

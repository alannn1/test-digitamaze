<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class ListSiswa extends Component
{
    public $kelas;
    public $siswaList = [];
    public function mount()
    {
        $this->kelas = Kelas::with('siswa')->get();
        $this->siswaList = $this->kelas->pluck('siswa')->flatten();
    }
    public function render()
    {
        return view('livewire.list-siswa');
    }
}

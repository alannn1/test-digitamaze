<?php

namespace App\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class ListSiswa extends Component
{
    public $kelas;
    public $siswaList = [];
    public function mount($kelasId)
    {
        $this->kelas = Kelas::with('siswa')->findOrFail($kelasId);
        $this->siswaList = $this->kelas->siswa;
    }
    public function render()
    {
        return view('livewire.list-siswa');
    }
}

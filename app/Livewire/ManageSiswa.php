<?php

namespace App\Livewire;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;

class ManageSiswa extends Component
{
    public $siswa, $kelasList;
    public $nama, $nis, $kelas_id;
    public $editID = null;
    protected $rules = [
        'nama' => 'required|string|max:255',
        'nis' => 'required|string|max:100',
        'kelas_id' => 'required|exists:kelas,id',
    ];
    public function mount()
    {
        $this->kelasList = Kelas::all();
        $this->loadSiswa();
    }
    public function loadSiswa()
    {
        $this->siswa = Siswa::with('kelas')->get();
    }
    public function resetForm()
    {
        $this->nama = $this->nis = $this->kelas_id = '';
        $this->editID = null;
    }
    public function store()
    {
        $this->validate();
        Siswa::create([
            'nama' => $this->nama, 
            'nis' => $this->nis, 
            'kelas_id' => $this->kelas_id
        ]);

        $this->resetForm();
        $this->loadSiswa();
    }
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $this->editID = $siswa->id;
        $this->nama = $siswa->nama;
        $this->nis = $siswa->nis;
        $this->kelas_id = $siswa->kelas_id;
    }
    public function update()
    {
        $this->validate();

        $siswa = Siswa::findOrFail($this->editID);
        $siswa->update([
            'nama' => $this->nama,
            'nis' => $this->nis,
            'kelas_id' => $this->kelas_id,
        ]);

        $this->resetForm();
        $this->loadSiswa();
    }
    public function delete($id)
    {
        Siswa::findOrFail($id)->delete();
        $this->loadSiswa();
    }
    public function render()
    {
        return view('livewire.manage-siswa');
    }

}

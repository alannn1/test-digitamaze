<?php

namespace App\Livewire;

use App\Models\Guru;
use App\Models\Kelas;
use Livewire\Component;

class ManageGuru extends Component
{
    public $guru, $kelasList;
    public $nama, $nip, $kelas_id;
    public $editId = null;
    protected $rules = [
        'nama' => 'required|string|max:255',
        'nip' => 'required|string|max:100',
        'kelas_id' => 'required|exists:kelas,id',
    ];
    public function mount()
    {
        $this->kelasList = Kelas::all();
        $this->loadGuru();
    }
    public function loadGuru()
    {
        $this->guru = Guru::with('kelas')->get();
    }
    public function resetForm()
    {
        $this->nama = $this->nip = $this->kelas_id = '';
        $this->editId = null;
    }
    public function store()
    {
        
        Guru::create([
            'nama' => $this->nama,
            'nip' => $this->nip,
            'kelas_id' => $this->kelas_id,
        ]);

        $this->resetForm();
        $this->loadGuru();
    }
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        $this->editId = $guru->id;
        $this->nama = $guru->nama;
        $this->nip = $guru->nip;
        $this->kelas_id = $guru->kelas_id;
    }
    public function update()
    {
        $this->validate();

        $siswa = Guru::findOrFail($this->editId);
        $siswa->update([
            'nama' => $this->nama,
            'nip' => $this->nip,
            'kelas_id' => $this->kelas_id,
        ]);

        $this->resetForm();
        $this->loadGuru();
    }
    public function delete($id)
    {
        Guru::findOrFail($id)->delete();
        $this->loadGuru();
    }
    public function render()
    {
        return view('livewire.manage-guru');
    }
}

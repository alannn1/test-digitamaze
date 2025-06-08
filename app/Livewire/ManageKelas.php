<?php

namespace App\Livewire;

use App\Models\Kelas;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ManageKelas extends Component
{
    public $kelasList;
    public $nama_kelas;
    public $editID = null;
    protected $rules = [
        'nama_kelas' => 'required|string|max:100',
    ];
    public function render()
    {
        $this->kelasList = Kelas::orderBy('nama_kelas')->get();
        return view('livewire.manage-kelas');
    }
    public function store()
    {
        $this->validate();
        Kelas::create(['nama_kelas' => $this->nama_kelas]);

        $this->resetInput();
        session()->flash('message', 'Kelas berhasil ditambahkan');
    }
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        $this->editID = $kelas->id;
        $this->nama_kelas = $kelas->nama_kelas;
    }
    public function update()
    {
        $this->validate();

        $kelas = Kelas::findOrFail($this->editID);
        $kelas->update(['nama_kelas' => $this->nama_kelas]);

        $this->resetInput();
        session()->flash('message', 'Kelas berhasil diperbarui');
    }
    public function delete($id)
    {
        Kelas::findOrFail($id)->delete();
        session()->flash('message', 'kelas berhasil dihapus');
    }
    public function resetInput()
    {
        $this->nama_kelas = '';
        $this->editID = null;
    }
}

<div>
    <div class="absolute">
        @livewire('component.navbar')
    </div>
    <div class="w-full pl-24 pt-5">
        <h1 class="font-medium text-xl px-3 py-2 bg-gray-300 rounded-md">Manage Guru</h1>
        <form wire:submit.prevent="{{ $editId ? 'update' : 'store' }}" class="flex space-x-2 my-10">
            <div class="h-16 border-b border-gray-500 w-full">
                <input type="text" wire:model="nama" placeholder="Nama" class="border border-gray-300 focus:border focus border-gray-700 transition-all duration-300 rounded-md py-1 px-1">
                <input type="text" wire:model="nip" placeholder="NIP" class="border border-gray-300 focus:border focus border-gray-700 transition-all duration-300 rounded-md py-1 px-1">
                <select wire:model="kelas_id" class="border border-gray-300 focus:border focus:border-gray-500 px-2 py-1 rounded-md">
                    <option>--Pilih Kelas--</option>
                    @foreach ($kelasList as $kelas)
                        <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                    @endforeach
                </select>
                <button type="submit" class="bg-blue-500 px-3 py-2 rounded-md text-white ml-3">{{ $editId ? 'Update' : 'Tambah' }}</button>
                @if ($editId)
                    <button type="button" wire:click="resetForm">Batal</button>
                @endif
            </div>
        </form>
        <div>
            <div class="">

            </div>
            <table class="w-full text-sm text-left rtl:text-right text-white">
                <thead class="text-xs text-gray-400 bg-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">NIP</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $gurus)
                        <tr class="bg-white border-b bg-gray-500 border-gray-700">
                            <th scope="row" class="px-6 py-4 text-black">{{ $gurus->nama }}</th>
                            <td class="px-6 py-4 text-black">{{ $gurus->nip }}</td>
                            <td class="px-6 py-4 text-black">{{ $gurus->kelas->nama_kelas ?? '-' }}</td>
                            <td>
                                <button type="button" wire:click="edit({{ $gurus->id }})" class="px-2 py-1 bg-blue-500 rounded-md">Edit</button>
                                <button type="button" wire:click="delete({{ $gurus->id }})" class="px-2 py-1 bg-blue-500 rounded-md" onclick="alert('Yakin Hapus?')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

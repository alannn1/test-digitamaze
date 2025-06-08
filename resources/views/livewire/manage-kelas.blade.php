<div class="w-full flex">

    <!-- Navbar -->
    <div class="absolute">
        @livewire('component.navbar')
    </div>

    <div class="w-full pl-24 pt-5"  >
        <h1 class="font-medium text-xl px-3 py-2 bg-gray-300 rounded-md">Manage Kelas</h1>
        <form wire:submit.prevent="{{ $editID ? 'update' : 'store' }}" class="my-10">
            <div class="h-16 border-b border-gray-500">
                <input type="text" wire:model="nama_kelas" placeholder="Nama Kelas" class="border border-gray-300 focus:border focus border-gray-700 transition-all duration-300 rounded-md py-1 px-1">
                <button class="bg-blue-500 px-3 py-2 rounded-md text-white ml-3" type="submit">{{ $editID ? 'update' : 'store' }}</button>
                @if ($editID)
                    <button type="button" wire:click="resetInput">Batal</button>
                @endif
            </div>
        </form>
        <div class="w-full relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-white">
                <thead class="text-xs text-gray-400 bg-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nama Kelas</th>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelasList as $kelas)     
                        <tr class="bg-white border-b bg-gray-500 border-gray-700">
                            <th scope="row" class="px-6 py-4 text-black">{{ $kelas->id }}</th>
                            <td class="px-6 py-4 text-black">{{ $kelas->nama_kelas }}</td>
                            <td class="px-6 py-4">
                                <button wire:click="edit({{ $kelas->id }})" class="px-2 py-1 bg-blue-500 rounded-md">Edit</button>
                                <button wire:click="delete({{ $kelas->id }})" class="px-2 py-1 bg-red-500 rounded-md"  onclick="alert('Yakin Hapus?')">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

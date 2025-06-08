<div>
    <div class="absolute">
        @livewire('component.navbar')
    </div>
    <div class="w-full pl-24 pt-5">
        <div class="w-full flex p-5">
            <h1 class="font-medium text-xl px-3 py-2 bg-gray-300 rounded-md w-full">Daftar Semua Siswa</h1>
        </div>
        <div class="w-full relative overflow-x-auto px-5">
            <table class="w-full text-sm text-left rtl:text-right text-black">
                <thead class="text-xs text-gray-400 bg-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">NIS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $k)
                        @foreach ($k->siswa as $siswa)
                            <tr class="bg-white border-b bg-gray-500 border-gray-700">
                                <td class="px-6 py-4">{{ $siswa->id }}</td>
                                <td class="px-6 py-4">{{ $siswa->nama }}</td>
                                <td class="px-6 py-4">{{ $siswa->nis }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

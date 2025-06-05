<div>
    <div class="w-full h-14 border-b border-gray-300 flex items-center pl-5 shadow-md">
        <a href="{{ route('dashboard') }}" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
            <span class="text-lg font-medium ml-3">Kembali</span>
        </a>
    </div>
    <div class="w-full flex p-5">
        <span class="text-xl font-bold">Daftar Guru Kelas</span>
        <span class="text-xl font-medium ml-3">{{ $kelas->nama_kelas }}</span>
    </div>
    <div class="w-full relative overflow-x-auto px-5">
        <table class="w-full text-sm text-left rtl:text-right text-white">
            <thead class="text-xs text-gray-400 bg-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">NIS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guruList as $guru)
                    <tr class="bg-white border-b bg-gray-500 border-gray-700">
                        <td class="px-6 py-4">{{ $guru->id }}</td>
                        <td class="px-6 py-4">{{ $guru->nama }}</td>
                        <td class="px-6 py-4">{{ $guru->nip }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="overflow-x-hidden">
    <div x-data="{ sidebarOpen: false }" class="flex h-screen">
        <div :class="sidebarOpen ? 'w-56 absolute left-0' : 'w-20'" class="bg-gray-100 text-white h-screen transition-all duration-300 ease-in-out overflow-hidden z-20">
            <button @click="sidebarOpen = !sidebarOpen" class="text-white z-30 top-4 transition duration-500" :class="sidebarOpen ? 'absolute left-48 -rotate-180' : 'absolute left-4'">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-black"><path fill="currentColor" d="M2 4h20v2H2zm0 7h14v2H2zm1 7H2v2h20v-2z"/></svg>
            </button>
            <ul class="mt-[20vh] text-black w-full space-y-5 relative h-screen">
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <button wire:click="page('kelas')" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M4.5 20v-1h2V4h8v1h3v14h2v1h-3V6h-2v14zm3-15v14zm4 7.77q.31 0 .54-.23t.23-.54t-.23-.54t-.54-.23t-.54.23t-.23.54t.23.54t.54.23M7.5 19h6V5h-6z"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Kelas</span>
                    </button>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <button wire:click="page('guru')" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"><path d="m14.111 20.768l7.268-7.268l2.121 2.122l-7.268 7.267l-2.732.611zM5.625 1.812L9 3.5h4.5"/><path d="M13.5 8.25L9 10L4.5 8.25v-6L9 .5l4.5 1.75zM7.5 6v-.5m3 .5v-.5m5.587 9.053L15.5 12.5L9 11l-6.5 1.5l-2 7h11"/><path d="M11.453 11.566L9 15.5l-2.453-3.934"/></g></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Guru</span>
                    </button>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <button wire:click="page('siswa')" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M24 24c4.42 0 8-3.58 8-8s-3.58-8-8-8s-8 3.58-8 8s3.58 8 8 8m10-8c0 5.525-4.475 10-10 10s-10-4.475-10-10S18.475 6 24 6s10 4.475 10 10M9.223 34.212C8.22 35.022 8 35.629 8 36v4h32v-4c0-.37-.22-.979-1.224-1.788c-.98-.791-2.442-1.545-4.214-2.197C31.02 30.712 26.753 30 24 30s-7.02.712-10.562 2.015c-1.772.652-3.234 1.406-4.215 2.197M24 28c-6.007 0-18 3.035-18 8v6h36v-6c0-4.965-11.992-8-18-8" clip-rule="evenodd"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Siswa</span>
                    </button>
                </li>
                <li class="px-4 hover:bg-white cursor-pointer flex items-center mt-5">
                    <livewire:auth.logout>
                    <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Logout</span>
                </li>
            </ul>
        </div>
        <!-- End Navbar -->
        <div :class="sidebarOpen ? 'ml-56' : 'ml-0'" class="w-full p-6">
            @if ($currentPage === 'kelas')
                @livewire('manage-kelas')
            @elseif ($currentPage === 'guru')
                @livewire('manage-guru')
            @elseif ($currentPage === 'siswa')
                @livewire('manage-siswa ')
            @endif 
        </div>
    </div>
</div>


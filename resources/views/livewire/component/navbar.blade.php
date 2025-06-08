<div>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen">
        <div :class="sidebarOpen ? 'w-56 absolute left-0' : 'w-20'" class="bg-gray-100 text-white h-screen transition-all duration-300 ease-in-out overflow-hidden z-20">
            <button @click="sidebarOpen = !sidebarOpen" class="text-white z-30 top-4 transition duration-500" :class="sidebarOpen ? 'absolute left-48 -rotate-180' : 'absolute left-4'">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-black"><path fill="currentColor" d="M2 4h20v2H2zm0 7h14v2H2zm1 7H2v2h20v-2z"/></svg>
            </button>
            <ul class="mt-[20vh] text-black w-full space-y-5 relative h-screen">
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <a href="{{ route('kelas') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M4.5 20v-1h2V4h8v1h3v14h2v1h-3V6h-2v14zm3-15v14zm4 7.77q.31 0 .54-.23t.23-.54t-.23-.54t-.54-.23t-.54.23t-.23.54t.23.54t.54.23M7.5 19h6V5h-6z"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Kelas</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <a href="{{ route('guru') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256"><path fill="currentColor" d="M128 68a28 28 0 1 0-28-28a28 28 0 0 0 28 28m0-48a20 20 0 1 1-20 20a20 20 0 0 1 20-20m87.42 116.78l-45.25-51.3a28 28 0 0 0-21-9.48h-42.34a28 28 0 0 0-21 9.48l-45.25 51.3a16 16 0 0 0 22.56 22.69L89 138.7l-19.7 74.88a16 16 0 0 0 29.08 13.35L128 176l29.58 51a16 16 0 0 0 29.08-13.35L167 138.7l25.9 20.77a16 16 0 0 0 22.56-22.69Zm-5.76 16.87a8 8 0 0 1-11.31 0a3 3 0 0 0-.33-.29l-35.51-28.48a4 4 0 0 0-6.38 4.13L179 215.94a4 4 0 0 0 .24.67a8 8 0 1 1-14.5 6.76c-.05-.11-.11-.21-.17-.32L131.46 166a4 4 0 0 0-6.92 0l-33.12 57.05c-.06.11-.12.21-.17.32a8 8 0 1 1-14.5-6.76a4 4 0 0 0 .24-.67L99.87 129a4 4 0 0 0-6.38-4.13L58 153.36a3 3 0 0 0-.33.29a8 8 0 0 1-11.31-11.31l.17-.18l45.3-51.39a20 20 0 0 1 15-6.77h42.34a20 20 0 0 1 15 6.77l45.32 51.39l.17.18a8 8 0 0 1 0 11.31"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Guru</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <a href="{{ route('siswa') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48"><path fill="currentColor" fill-rule="evenodd" d="M24 24c4.42 0 8-3.58 8-8s-3.58-8-8-8s-8 3.58-8 8s3.58 8 8 8m10-8c0 5.525-4.475 10-10 10s-10-4.475-10-10S18.475 6 24 6s10 4.475 10 10M9.223 34.212C8.22 35.022 8 35.629 8 36v4h32v-4c0-.37-.22-.979-1.224-1.788c-.98-.791-2.442-1.545-4.214-2.197C31.02 30.712 26.753 30 24 30s-7.02.712-10.562 2.015c-1.772.652-3.234 1.406-4.215 2.197M24 28c-6.007 0-18 3.035-18 8v6h36v-6c0-4.965-11.992-8-18-8" clip-rule="evenodd"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Siswa</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <a href="{{ route('kelas.list') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1m-7 8v-4h-4v4H7V4h10v14z"/><path fill="currentColor" d="M9 6h2v2H9zm4 0h2v2h-2zm-4 4h2v2H9zm4 0h2v2h-2z"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Kelas List</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <a href="{{ route('guru.list') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20"><path fill="currentColor" d="M10 3a1.5 1.5 0 1 0 0 3a1.5 1.5 0 0 0 0-3M7.5 4.5a2.5 2.5 0 1 1 5 0a2.5 2.5 0 0 1-5 0m8-.5a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0a2 2 0 0 1-4 0m-10 0a1 1 0 1 1 2 0a1 1 0 0 1-2 0m1-2a2 2 0 1 0 0 4a2 2 0 0 0 0-4m.6 11.998L5 15a2 2 0 0 1-2-2V9.25A.25.25 0 0 1 3.25 9h1.764c.04-.367.17-.708.365-1H3.25C2.56 8 2 8.56 2 9.25V13a3 3 0 0 0 3.404 2.973a5 5 0 0 1-.304-.975m9.496.975Q14.794 16 15 16a3 3 0 0 0 3-3V9.25C18 8.56 17.44 8 16.75 8h-2.129c.196.292.325.633.365 1h1.764a.25.25 0 0 1 .25.25V13a2 2 0 0 1-2.1 1.998a5 5 0 0 1-.304.975M7.25 8C6.56 8 6 8.56 6 9.25V14a4 4 0 0 0 8 0V9.25C14 8.56 13.44 8 12.75 8zM7 9.25A.25.25 0 0 1 7.25 9h5.5a.25.25 0 0 1 .25.25V14a3 3 0 1 1-6 0z"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Guru List</span>
                    </a>
                </li>
                <li class="px-4 py-2 hover:bg-white cursor-pointer">
                    <a href="{{ route('siswa.list') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 56 56"><path fill="currentColor" d="M28 27.66c3.485 0 6.326-3.105 6.326-6.883c0-3.735-2.826-6.693-6.326-6.693c-3.47 0-6.326 3.002-6.326 6.722c.014 3.764 2.855 6.853 6.326 6.853m-16.87.322c3.016 0 5.491-2.71 5.491-6.034c0-3.25-2.445-5.872-5.491-5.872c-3.017 0-5.507 2.665-5.492 5.901c.015 3.31 2.475 6.005 5.492 6.005m33.755 0c3.002 0 5.477-2.695 5.477-6.005c.015-3.236-2.475-5.901-5.477-5.901c-3.06 0-5.506 2.621-5.506 5.872c0 3.324 2.475 6.034 5.506 6.034M28 25.448c-2.138 0-3.969-2.05-3.969-4.642c0-2.548 1.802-4.51 3.97-4.51c2.181 0 3.968 1.933 3.968 4.48c0 2.593-1.802 4.672-3.969 4.672m-16.87.352c-1.787 0-3.31-1.714-3.31-3.823c0-2.064 1.508-3.72 3.31-3.72c1.845 0 3.324 1.626 3.324 3.691c0 2.138-1.523 3.852-3.324 3.852m33.755 0c-1.816 0-3.339-1.714-3.339-3.852c0-2.065 1.479-3.69 3.339-3.69c1.801 0 3.295 1.655 3.295 3.72c0 2.108-1.509 3.822-3.295 3.822M2.987 41.41h11.496c-.703-.395-1.245-1.274-1.142-2.167H2.621c-.293 0-.439-.117-.439-.395c0-3.632 4.144-7.03 8.933-7.03c1.845 0 3.5.44 4.92 1.274a7.6 7.6 0 0 1 1.655-1.552c-1.889-1.245-4.159-1.889-6.575-1.889C4.979 29.651 0 34.103 0 38.98c0 1.625.996 2.43 2.987 2.43m50.04 0c1.977 0 2.973-.805 2.973-2.43c0-4.877-4.98-9.329-11.115-9.329c-2.416 0-4.672.644-6.575 1.89c.659.453 1.2.966 1.67 1.551c1.405-.834 3.074-1.274 4.905-1.274c4.789 0 8.933 3.398 8.933 7.03c0 .278-.132.395-.425.395h-10.72c.088.893-.439 1.772-1.142 2.167Zm-34.224 0h18.394c2.43 0 3.588-.732 3.588-2.343c0-3.837-4.848-9.387-12.785-9.387c-7.952 0-12.8 5.55-12.8 9.387c0 1.611 1.158 2.343 3.603 2.343M18.1 39.2c-.38 0-.541-.103-.541-.41c0-2.403 3.72-6.898 10.441-6.898c6.707 0 10.427 4.495 10.427 6.897c0 .308-.147.41-.527.41Z"/></svg>
                        <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Siswa List</span>
                    </a>
                </li>
                
                <li class="px-4 hover:bg-white cursor-pointer flex items-center mt-5">
                    <livewire:auth.logout>
                    <span x-show="sidebarOpen" class="ml-3 transition-opacity duration-500">Logout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="flex items-center select-none">
    <div class="relative" id="dropdownButton">
        <div onclick="toggleDropdown()"
            class="relative flex max-w-xs cursor-pointer items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <svg class="w-10" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="25" fill="#76A1CC"/>
                <path d="M25 26.6667C28.8368 26.6667 31.9444 23.5591 31.9444 19.7223C31.9444 15.8855 28.8368 12.7778 25 12.7778C21.1632 12.7778 18.0555 15.8855 18.0555 19.7223C18.0555 23.5591 21.1632 26.6667 25 26.6667ZM25 30.1389C20.3646 30.1389 11.1111 32.4653 11.1111 37.0834V40.5556H38.8889V37.0834C38.8889 32.4653 29.6354 30.1389 25 30.1389Z" fill="#F9FAFC"/>
                </svg>
        </div>
        <div id="dropdown"
            class="absolute right-0 z-[999] mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none hidden"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <a href="{{ route('profil') }}" class="cursor-pointer hover:bg-BlueAccent hover:text-white p-2 flex items-center">
                <div class="flex items-center justify-start">
                    <div class="">
                        Lihat Profil
                    </div>
                </div>
            </a>
            <a href="{{ route('bantuan') }}" class="cursor-pointer hover:bg-BlueAccent hover:text-white p-2 flex items-center">
                <div class="flex items-center justify-start">
                    <div class="">
                        Bantuan
                    </div>
                </div>
            </a>
            <a href="{{ route('hapus-akun') }}" class="cursor-pointer hover:bg-BlueAccent hover:text-white p-2 flex items-center">
                <div class="flex items-center justify-start">
                    <div class="">
                        Hapus Akun
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<script>
    function toggleDropdown() {
        let dropdown = document.querySelector('#dropdownButton #dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>

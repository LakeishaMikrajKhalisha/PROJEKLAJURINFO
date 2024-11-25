<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js']);
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title>Halaman</title>
        <script>
          function submitForm() {
              document.getElementById('searchForm').submit();
          }
      </script>
    </head>
<header>
        <!--Nav Search-->
<div class="mx-40">
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <!--Pencarian-->
    <div class="flex md:order-2">
      <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
      </button>
      <div class="relative hidden md:block">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          <span class="sr-only">Search icon</span>
        </div>
        <form action="{{ route('penelusuran.index') }}" method="GET" id="searchForm">
        <input type="text" id="search-navbar" class="block w-80 mr-4 p-2 ps-10 text-sm text-gray-900 border border-gray-300 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pencarian" name="judulArtikel" value="{{ old('judulArtikel', $judulArtikel) }}" 
               oninput="submitForm()"/>
        </form>
      </div>
      <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <!--contoh-->
      <div class="flex items-center select-none">
        <div class="relative" id="dropdownButton">
            <div onclick="toggleDropdown()" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div id="dropdown" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <div class="flex items-center justify-start">
                <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                  <img width="10" class="h-5 w-auto mr-1" src="{{ asset('storage\userIcon.svg') }}"/>
                    <a href="">Lihat profil</a></div>
                </div>
              <div class="flex items-center justify-start">
                <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                  <img width="10" class="h-5 w-auto mr-1" src="{{ asset('storage\trash.svg') }}"/>
                  <a href="">Hapus akun</a></div>
              </div>
              </div>
        </div>
        </div>
    </div>
</nav>
</div>
        <!--nav kategori-->
        <div class="bg-BlueAccent text-white h-10">
        <nav class="navigation mx-40 flex justify-between items-center text-base font-medium">
            <div class="flex items-center justify-center">
            <a href="#" class="my-2 border-0 hover:bg-gray-50 hover:bg-opacity-20 w-20 text-center">Bisnis</a>
            </div>
            <div class="flex items-center justify-center">
            <a href="#" class="my-2 border-0 hover:bg-gray-50 hover:bg-opacity-20 w-20 text-center">Teknologi</a>
            </div>
            <div class="flex items-center justify-center">
            <a href="#" class="my-2 border-0 hover:bg-gray-50 hover:bg-opacity-20 w-20 text-center">Olahraga</a>
            </div>
            <div class="flex items-center justify-center">
            <a href="#" class="my-2 border-0 hover:bg-gray-50 hover:bg-opacity-20 w-20 text-center">Kecantikan</a>
            </div>
            <div class="flex items-center justify-center">
            <a href="#" class="my-2 border-0 hover:bg-gray-50 hover:bg-opacity-20 w-20 text-center">Kesehatan</a>
            </div>
            <div class="flex items-center justify-center">
            <a href="#" class="my-2 border-0 hover:bg-gray-50 hover:bg-opacity-20 w-20 text-center">Lifestyle</a>
            </div>
        </nav>
      </div>
</header>
<script>
  function toggleDropdown(){
    let dropdown = document.querySelector('#dropdownButton #dropdown');
    dropdown.classList.toggle('hidden');
}
</script>
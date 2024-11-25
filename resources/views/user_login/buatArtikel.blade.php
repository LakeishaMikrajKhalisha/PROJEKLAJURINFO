<!DOCTYPE html>
<html lang="en">
@include('mainHeader')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Dashboard Profil</title>
    <link href="/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
</head>
<body>
<div class="mx-40">
<form action="{{ url('/buat-artikel') }}" method="POST" id="artikelSaya">
  @csrf
<div class="relative my-4 pb-2">
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap mx-auto items-center justify-between h-10">
            <div class="flex items-center mt-4">
                    <a href="{{ url('daftar-artikel/draft') }}" class="flex py-2 text-BlueAccent rounded md:p-0 justify-start font-base hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link"><< Kembali</a>
            </div>
          <div class="hidden md:block w-auto mt-4" id="navbar-default">
            <ul class="font-medium flex md:p-0 border-gray-100 md:flex-row space-x-4 rtl:space-x-reverse items-center">
              <li>
                <div class="flex justify-end" id="dropdownButton2">
                    <div onclick="toggleDropdown2()" class="border border-fontDefault text-fontDefault shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold p-1 pl-2 mt-1 cursor-pointer flex items-center">Kategori
                        <img width="10" class="ml-10" src="{{ asset('storage\down_arrow_icon.svg') }}"/>
                    </div>
                    <select id="dropdown2" class="absolute z-10 mt-1 w-32 origin-top-right bg-white py-1 shadow-lg ring-1 ring-black-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <div class="flex items-center justify-start">
                        <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                          <option class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-0" name="bisnis">Bisnis</option>
                        </div>
                      <div class="flex items-center justify-start">
                        <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                          <option class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-1" name="teknologi" >Teknologi</option>
                      </div>
                      <div class="flex items-center justify-start">
                        <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                          <option class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-2" name="olahraga">Olahraga</option>
                      </div>
                      <div class="flex items-center justify-start">
                        <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                          <option class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-3" name="kecantikan">Kecantikan</option>
                      </div>
                      <div class="flex items-center justify-start">
                        <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                          <option class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-4" name="lifestyle">Kesehatan</option>
                      </div>
                      <div class="flex items-center justify-start">
                        <div class="cursor-pointer hover:bg-grey-500 p-2 flex items-center">
                          <option class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-5" name="lifestyle">Lifestyle</option>
                      </div>
                    </select>
                </div>    
              </li>
              <li>
                <input type="submit" class="border border-BlueAccent text-BlueAccent bg-white shadow-md hover:bg-slate-400 hover:border-slate-800 w-24 text-sm font-semibold text-center px-auto py-1 mt-1" name="simpan" id="simpan" value="Simpan"/>
              </li>
              <li>
                <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-24 text-sm font-semibold text-center px-auto py-1 mt-1" name="publikasi" id="publikasi" value="Publikasi"/>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
<p class="text-3xl font-bold border-t border-grey leading-none text-fontDefault text-center py-4">Buat Artikel</p>
<div class="mt-2">
    <label for="judulArtikel" class="block text-xl font-medium text-fontDefault">Judul Artikel</label>
    <div class="relative mt-2 rounded-md shadow-sm">
      <input type="text" name="judulArtikel" id="judulArtikel" class="block w-full border-0 py-1.5 pl-4 pr-20 text-fontDefault text-2xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-60 font-bold placeholder:text-sm"/>   
    </div>
</div>
<div class="mt-2">
<label for="isiArtikel" class="block text-xl font-medium text-fontDefault">Tulis Artikel</label>
<div class="relative mt-2 rounded-md shadow-sm">
<textarea type="longtext" name="isiArtikel" id="isiArtikel"  class="h-60 w-full block border-0 pt-2 pl-4 pr-20 text-fontDefault text-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-60 font-bold placeholder:text-sm resize-none overflow-hidden mb-10">
</textarea>
</div>
</div>
</form>
</div>
</body>
<script>
  function toggleDropdown2(){
    let dropdown2 = document.querySelector('#dropdownButton2 #dropdown2');
    dropdown2.classList.toggle('hidden');
}
</script>
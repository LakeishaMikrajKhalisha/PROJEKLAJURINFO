<!DOCTYPE html>
<html lang="en">
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
<body class="mx-40">
<div class="relative my-4 pb-2">
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap mx-auto items-center justify-between h-10">
            <div class="flex items-center mt-4">
                    <a href="#" class="flex py-2 text-BlueAccent rounded md:p-0 justify-start font-base hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link">Kembali</a>
            </div>
          <div class="hidden md:block w-auto mt-4" id="navbar-default">
            <ul class="font-medium flex md:p-0 border-gray-100 md:flex-row space-x-4 rtl:space-x-reverse items-center">
              <li>
                <div class="flex justify-end" id="dropdownButton">
                    <div onclick="toggleDropdown()" class="border border-fontDefault text-fontDefault shadow-md hover:bg-slate-400 hover:border-slate-800 w-24 text-sm font-semibold text-center p-1 pl-2 mt-1 cursor-pointer flex justify-between">Kategori
                        <img width="10" class="ml-1 mr-2" src="{{ asset('storage\down_arrow_icon.svg') }}"/>
                    </div>
                    <div id="dropdown" class="rounded border-2 border-grey bg-white absolute top-2 my-10 max-w-32 shadow-md hidden z-10 font-base">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900 outline-none", Not Active: "text-gray-700" -->
                            <p class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-0">Bisnis</p>
                            <p class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-1">Teknologi</p>
                            <p class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-2">Olahraga</p>
                            <p class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-0">Kecantikan</p>
                            <p class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-1">Kesehatan</p>
                            <p class="block px-4 py-2 text-sm text-fontDefault" role="menuitem" tabindex="-1" id="menu-item-2">Lifestyle</p>
                        </div>
                    </div>
                </div>    
              </li>
              <li>
                <input type="button" class="border border-BlueAccent text-BlueAccent bg-white shadow-md hover:bg-slate-400 hover:border-slate-800 w-24 text-sm font-semibold text-center px-auto py-1 mt-1" value="Simpan"/>
              </li>
              <li>
                <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-24 text-sm font-semibold text-center px-auto py-1 mt-1" value="Publikasi"/>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>
<p class="text-3xl font-bold border-t border-grey leading-none text-fontDefault text-center py-4">Edit Artikel</p>
<div class="mt-4">
    <label for="judulArtikel" class="block text-xl font-medium text-fontDefault">Judul Artikel</label>
    <div class="relative mt-2 rounded-md shadow-sm">
      <input type="text" name="judulArtikel" id="judulArtikel" class="block w-full border-0 py-1.5 pl-4 pr-20 text-fontDefault text-2xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-60 font-bold">
    </div>
</div>
<div id="toolbar-container" class="mt-6">
  <span class="ql-formats">
    <select class="ql-font"></select>
    <select class="ql-size"></select>
  </span>
  <span class="ql-formats">
    <button class="ql-bold"></button>
    <button class="ql-italic"></button>
    <button class="ql-underline"></button>
    <button class="ql-strike"></button>
  </span>
  <span class="ql-formats">
    <select class="ql-color"></select>
    <select class="ql-background"></select>
  </span>
  <span class="ql-formats">
    <button class="ql-script" value="sub"></button>
    <button class="ql-script" value="super"></button>
  </span>
  <span class="ql-formats">
    <button class="ql-header" value="1"></button>
    <button class="ql-header" value="2"></button>
    <button class="ql-blockquote"></button>
    <button class="ql-code-block"></button>
  </span>
  <span class="ql-formats">
    <button class="ql-list" value="ordered"></button>
    <button class="ql-list" value="bullet"></button>
    <button class="ql-indent" value="-1"></button>
    <button class="ql-indent" value="+1"></button>
  </span>
  <span class="ql-formats">
    <button class="ql-direction" value="rtl"></button>
    <select class="ql-align"></select>
  </span>
  <span class="ql-formats">
    <button class="ql-link"></button>
    <button class="ql-image"></button>
    <button class="ql-video"></button>
    <button class="ql-formula"></button>
  </span>
  <span class="ql-formats">
    <button class="ql-clean"></button>
  </span>
</div>
<div id="editor" class="h-60 w-auto">
</div>
</body>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    modules: {
      syntax: true,
      toolbar: '#toolbar-container',
    },
    placeholder: 'Compose an epic...',
    theme: 'snow',
  });
</script>
<script>
    function toggleDropdown(){
        let dropdown = document.querySelector('#dropdownButton #dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard Profil</title>
<!-- header profil -->
@include('mainHeader')
<figure class="relative">
    <div class="border-BlueAccent border-2 h-64">
        <img class="h-full w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
    </div>
    <figcaption class="absolute bottom-0 left-0 right-0 flex justify-end mx-40">
        <input type="button" class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-2 mb-2 mt-1" value="Upload Header"/>
    </figcaption>
</figure>
<!--nav profil-->
<div class="border-2 border-BlueAccent">
    <div class="mx-40">
<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap mx-auto items-center justify-center h-10">
      <div class="hidden md:block w-auto mr-6" id="navbar-default">
        <ul class="font-medium flex md:p-0 border-gray-100 md:flex-row md:space-x-8 rtl:space-x-reverse gap-x-12 items-center py-2">
          <li>
            <a href="{{ url('profil-utama/login')}}" class="flex text-fontDefault rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link">Profil Utama</a>
          </li>
          <li>
            <a href="{{ url('daftar-artikel/publish') }}" class="block text-fontDefault rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link">Daftar Artikel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    </div>
</div>
<div class="mx-40 my-4">
<div class="flex items-center justify-center mb-2 m-4 mt-6">
  <h5 class="text-2xl font-bold leading-none text-fontDefault mb-2">Daftar Artikel</h5>
</div>
<div class="flex items-center justify-end">
<div class="border border-BlueAccent text-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 pl-2 mt-1 cursor-pointer flex justify-center items-center">
<a href="{{ url('/tambah-artikel') }}" class="hover:text-link items-center flex" target="_blank">Buat Artikel    
  <img width="10" class="h-5 w-auto ml-1" src="{{ asset('storage\editArtikel.svg') }}"/></a>
</div>
</div>
<div class="border-t border-b border-grey border-1 flex justify-center items-start mt-4">
  <li class="list-none"><a href="{{ url('daftar-artikel/publish') }}" class=" hover:bg-BlueAccent hover:bg-opacity-25 w-28 flex items-center justify-center text-BlueAccent hover:text-link text-xl font-medium m-2">Publish</a></li>
  <li class="list-none"><a href="{{ url('daftar-artikel/draft') }}" class=" hover:bg-BlueAccent hover:bg-opacity-25 w-28 flex items-center justify-center text-BlueAccent hover:text-link text-xl font-medium ml-4 m-2">Draft</a></li>
</div>
</head>
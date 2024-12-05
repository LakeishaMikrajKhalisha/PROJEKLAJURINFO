<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Lajur Info</title>
</head>
<body >
    <x-header :categories/>
    <div class="mx-40 my-4">
    <!-- headline -->
    <figure class="relative">
        <div class="container flex items-center justify-center h-72 mt-2">
            <img class="h-full w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
        </div>
        <figcaption class="absolute px-4 text-white bottom-2 text-4xl font-medium hover:text-white">
            @foreach ($judulArtikelSatu as $judul)
            <a href="{{ url('artikel/'.$judul->id)}}" class="hover:underline hover:underline-offset-1"> {{ $judul->judulArtikel }}</a>
            @endforeach
        </figcaption>
    </figure>
    <!--dropdown-->
    <div class="flex items-center select-none">
    <div class="relative mt-4" id="dropdownButton2">
        <div class="flex border w-24 h-10 border-BlueAccent shadow-md">
            <p class="text-fontDefault font-medium flex mx-auto items-center justify-center text-lg">Terbaru</p>
        </div>
    </div>
    </div>
    <!--daftar artikel-->
    <div class="grid grid-cols-3 gap-4 mt-4">
        @foreach ($artikel as $dataArtikel)
        <div class="relative">
            <img class="h-44 w-80" src="{{ asset('storage\img.jpg') }}" alt=""/>
            <div class="flex items-center text-sm font-normal border-black">
                <div class="">
                    <a href="" class="hover:text-link text-BlueAccent">Kecantikan</a></div>
                <div class="ml-1 text-black">
                    <p class="text-grey">| {{($dataArtikel->created_at)}}</p></div>
            </div>
            <a href="{{ url('artikel/'.$dataArtikel->id)}}" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold">
                {{ $dataArtikel->judulArtikel }}
            </a>
        </div>
        @endforeach
    </div>
    <div class="mt-10">
    {{ $artikel->links() }}
    </div>
    <!--kolom kedua-->
    </div>
</body>
</html>

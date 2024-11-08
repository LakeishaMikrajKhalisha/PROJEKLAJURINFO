<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Judul Artikel</title>
</head>
<body class="mx-40 my-4">
    <!-- headline -->
    <figure class="relative">
        <div class="container flex items-center justify-center border-black border-2 h-72 mt-2">
            <img class="h-full w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
        </div>
        <figcaption class="absolute px-4 text-white bottom-2 text-4xl font-medium hover:text-link">
            <a href="" class="hover:underline hover:underline-offset-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
        </figcaption>
    </figure>
    <!--dropdown-->
    <div class="flex items-center select-none">
    <div class="relative mt-4" id="dropdownButton">
        <div onclick="toggleDropdown()" class="border-solid border-grey border-2 px-5 py-2 rounded cursor-pointer font-bold flex justify-between max-w-32 bg-white shadow-sm">Terbaru
            <img width="10" class="ml-2" src="{{ asset('storage\down_arrow_icon.svg') }}"/>
        </div>
        <div id="dropdown" class="rounded border-2 border-grey bg-white absolute top-2 my-10 max-w-24 shadow-md hidden z-10">
            <div class="cursor-pointer hover:bg-grey-500 p-2">Terpopuler</div>
            <div class="cursor-pointer hover:bg-grey-500 p-2">Terbaru</div>
        </div>
    </div>
    <!--daftar artikel-->
    </div>
    <div class="grid grid-cols-3 divide-x gap-4 border-2 border-black mt-4">
        <div class="relative">
            <img class="h-44 w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
            <div class="flex items-center text-sm font-normal border-black">
                <div class="">
                    <a href="" class="hover:text-link text-BlueAccent">Kecantikan</a></div>
                <div class="ml-1 text-black">
                    <p>| 06 Desember 2023</p></div>
            </div>
            <a href="" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</a>
        </div>
        <div class="relative">
            <img class="h-44 w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
            <div class="flex items-center text-sm font-normal border-black">
                <div class="">
                    <a href="" class="hover:text-link text-BlueAccent">Kecantikan</a></div>
                <div class="ml-1 text-black">
                    <p>| 06 Desember 2023</p></div>
            </div>
            <a href="" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</a>
        </div>
        <div class="relative">
            <img class="h-44 w-full" src="{{ asset('storage\img.jpg') }}" alt=""/>
            <div class="flex items-center text-sm font-normal border-black">
                <div class="">
                    <a href="" class="hover:text-link text-BlueAccent">Kecantikan</a></div>
                <div class="ml-1 text-black">
                    <p>| 06 Desember 2023</p></div>
            </div>
            <a href="" class="hover:underline  hover:text-link hover:underline-offset-1 text-xl font-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</a>
        </div>
    </div>
    <script>
        function toggleDropdown(){
            let dropdown = document.querySelector('#dropdownButton #dropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <x-header :categories />
    <form action="">
        <figure class="relative">
            <div class="border-BlueAccent border-2 h-64">
                <img class="h-full w-full" src="{{ asset('storage\img.jpg') }}" alt="" />
            </div>
            <figcaption class="absolute bottom-0 left-0 right-0 flex justify-end mx-40">
                <input type="image"
                    class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-2 mb-2 mt-1"
                    name="image_header" />
            </figcaption>
        </figure>
    </form>
    <div class="relative mx-40 flex">
        <!--foto profil -->
        <form action="">
            <div class="container w-40 flex flex-col items-center">
                <div class="bg-grey rounded-full h-32 w-32 m-4 flex items-center justify-center">
                    <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="25" fill="#76A1CC" />
                        <path
                            d="M25 26.6667C28.8368 26.6667 31.9444 23.5591 31.9444 19.7223C31.9444 15.8855 28.8368 12.7778 25 12.7778C21.1632 12.7778 18.0555 15.8855 18.0555 19.7223C18.0555 23.5591 21.1632 26.6667 25 26.6667ZM25 30.1389C20.3646 30.1389 11.1111 32.4653 11.1111 37.0834V40.5556H38.8889V37.0834C38.8889 32.4653 29.6354 30.1389 25 30.1389Z"
                            fill="#F9FAFC" />
                    </svg>
                </div>
                <div class="flex justify-center mb-2 ml-4">
                    <input type="button"
                        class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-32 text-sm font-semibold text-center p-1 mr-4 mb-2 mt-1"
                        value="Upload Gambar" />
                </div>
            </div>
        </form>
        <!-- nama & komen -->
        <div class="container w-full flex flex-col items-start mx-2">
            <strong class="text-4xl mt-4 text-fontDefault">{{ Auth::user()->name }}</strong>
            <form class="mb-0 w-full h-full">
                <div class="py-2 px-4 bg-white mb-2 h-40 border border-grey">
                    <textarea id="comment" class="px-0 w-full text-sm text-fontDefault border-0 focus:ring-0 focus:outline-none"
                        placeholder="Ketik bio anda..." required></textarea>
                </div>
                <input type="button"
                    class="border border-white text-white bg-BlueAccent shadow-md hover:bg-slate-400 hover:border-slate-800 w-20 text-sm font-semibold text-center p-1 mr-4 mb-2"
                    value="Edit bio" />
            </form>
        </div>
    </div>
    <!-- data diri -->
    <div class="mx-60">
        <div class="flex items-center justify-center mb-2 mt-6">
            <h5 class="text-2xl font-bold leading-none text-BlueAccent mb-2">Data Profil</h5>
        </div>
        <div class="border-t border-x-fontDefault">
            <form>
                <div class="my-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-4"
                        placeholder="Isi nama lengkap" required />
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="born" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="date" id="born" name="born"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Isi tanggal lahir" required />
                    </div>
                    <div>
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Kelamin</label>
                        <div class="flex items-center">
                            <input id="gender" type="radio" value="Pria" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gender"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pria</label>
                        </div>
                        <div class="flex items-center">
                            <input id="gender" type="radio" value="Wanita" name="gender"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="gender"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Wanita</label>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                        Telepon</label>
                    <input type="tel" id="phone" name="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Isi nomor telepon" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
                <x-button class="py-2" type="submit">Simpan</x-button>
            </form>
        </div>
    </div>
</body>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lajur Info | Tambah Artikel</title>
    <link href="/styles.css" rel="stylesheet" />
    <link href="/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />
</head>

<body>
    <div class="mx-40">
        <form action="{{ route('artikel.store') }}" method="POST" id="article" enctype="multipart/form-data">
            @csrf
            <div class="relative my-4 pb-2">
                <nav class="border-b pb-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <a href="{{ url('daftar-artikel/draft') }}"
                                class="flex py-2 text-BlueAccent rounded md:p-0 justify-start font-base hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-link">
                                << Kembali</a>
                        </div>
                        <div class="flex justify-end items-center gap-4 w-1/2">
                            <x-options-category></x-options-category>
                            <div class="flex gap-2">
                                <button
                                    class="border-2 border-[#76a1cc] px-5 text-[#76a1cc] bg-white w-full text-xl py-2 font-semibold hover:bg-gray-300 hover:bg-opacity-60"
                                    type="button">
                                    Simpan
                                </button>
                                <x-button class="text-xl" type="submit">Kirim</x-button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="my-2">
                <label for="title" class="block text-xl font-medium text-fontDefault">Judul Artikel</label>
                <div class="relative mt-2 rounded-md shadow-sm">
                    <input type="text" name="title" id="title"
                        class="block w-full border-0 py-1.5 pl-4 pr-20 text-fontDefault text-2xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-60 font-bold placeholder:text-sm" />
                </div>
            </div>
            <x-text-editor></x-text-editor>
            <textarea name="content" id="content" hidden></textarea>
        </form>
        {{-- {{ request()-> }} --}}
    </div>
</body>

</html>

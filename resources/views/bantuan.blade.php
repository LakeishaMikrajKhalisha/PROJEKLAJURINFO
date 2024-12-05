<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Lajur Info | Bantuan</title>
</head>

<body>
    <section class="h-screen w-full flex justify-center items-center">
        <div class="border-2 w-3/4 shadow-md shadow-grey">
            <h1 class="text-center font-semibold text-2xl py-2">BANTUAN</h1>
            <p class="text-center">Silahkan isi form di bawah ini untuk kritik, saran, atau pertanyaan</p>
            <form method="POST" action="{{ route('bantuan') }}" class="p-4">
                @csrf
                <label for="name" class="font-semibold">Nama</label> <br>
                <input type="text" name="name" id="name" required autofocus class="w-full outline-none">
                <label for="email" class="font-semibold">Email</label> <br>
                <input type="email" name="email" id="email" required class="w-full outline-none">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <label for="subjek" class="font-semibold">Subjek</label> <br>
                <input type="text" name="subjek" id="subjek" required class="w-full outline-none">
                <label for="message" class="font-semibold">Pesan</label> <br>
                <textarea name="message" id="message" cols="30" rows="10" class="w-full h-20"></textarea>
                <div class="flex justify-end gap-2">
                    <a href="{{ route('homepage') }}">
                        <button
                            class="border-2 border-[#76a1cc] px-5 text-[#76a1cc] bg-white w-full text-xl font-semibold hover:bg-gray-300 hover:bg-opacity-60"
                            type="button">
                            Cancel
                        </button>
                    </a>
                    <x-button type="submit">Kirim</x-button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>

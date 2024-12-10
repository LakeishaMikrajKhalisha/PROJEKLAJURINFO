<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Lajur Info | Ubah Password</title>
</head>

<body>
    <section class="h-screen w-full flex justify-center items-center">
        <div class="border-2 w-3/4 shadow-md shadow-grey">
            <h1 class="border-b-2 text-center font-semibold text-2xl py-2">UBAH PASSWORD</h1>
            <form method="POST" action="{{ route('password.store') }}" class="p-4">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <label for="email" class="font-semibold">Email</label> <br>
                <input type="email" name="email" id="email" required value="{{ old('email', $request->email) }}" class="w-full outline-none"> <br>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <label for="password_baru" class="font-semibold">Password Baru</label> <br>
                <input type="password" name="password" id="password" required class="w-full outline-none"> <br>
                <label for="password_confirmation" class="font-semibold">Konfirmasi Password</label> <br>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full outline-none">
                <div class="flex justify-end py-2">
                    <x-button class="py-2" type="submit">Simpan Perubahan</x-button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>

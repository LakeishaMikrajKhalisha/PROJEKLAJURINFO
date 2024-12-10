<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Lajur Info | Lupa Password</title>
</head>
<body>
    <section class="h-screen w-full flex justify-center items-center">
        <div class="border-2 w-3/4 shadow-md shadow-grey">
            <h1 class="border-b-2 text-center font-semibold text-2xl py-2">VERIFIKASI EMAIL</h1>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('password.email') }}" class="p-4">
                @csrf
                <label for="email" class="font-semibold">EMAIL</label> <br>
                <input type="email" name="email" id="email" required autofocus class="w-full outline-none">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <div class="flex justify-end py-2">
                    <x-button class="py-2" type="submit">Kirim</x-button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

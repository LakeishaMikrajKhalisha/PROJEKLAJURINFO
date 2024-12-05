{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
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

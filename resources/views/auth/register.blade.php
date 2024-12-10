<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Lajur Info | Register</title>
</head>

<body>
    <section class="bg-[#f2f2f2] h-screen w-full flex justify-center items-center">
        <x-form method="POST" action="{{ route('register') }}">
            @csrf
            DAFTAR AKUN
            <x-slot:desc>
                Selamat Datang di LAJURINFO!
            </x-slot:desc>
            <x-slot:input>
                <x-form-input id="name" name="name" placeholder="Buat Username" value="{{ old('name') }}" autofocus required>
                    <x-slot:label_for>name</x-slot:label_for>
                    Username
                </x-form-input>
                @error('name')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                @enderror
                <x-form-input type="email" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                    <x-slot:label_for>email</x-slot:label_for>
                    Email
                </x-form-input>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <x-form-input type="password" id="password" name="password" placeholder="Buat Password" required>
                    <x-slot:label_for>password</x-slot:label_for>
                    Password
                </x-form-input>
            </x-slot:input>
            <x-slot:remember>
                {{-- <div class="flex items-center py-2">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="remember_me" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                        Me</label>
                </div> --}}
            </x-slot:remember>
            <x-slot:button>
                <div class="flex flex-col my-4">
                    <x-button class="border-2 border-gray-300 w-full py-2 text-xl" type="submit">DAFTAR AKUN</x-button>
                    <a href="{{ route('login.google') }}">
                        <button
                            class="border-2 border-[#76a1cc] text-[#76a1cc] bg-white w-full text-xl py-2 mt-1 font-semibold hover:bg-gray-300 hover:bg-opacity-60" type="button">
                            DAFTAR DENGAN GOOGLE
                        </button>
                    </a>
                </div>
            </x-slot:button>
            <x-slot:info>Sudah Punya Akun</x-slot:info>
            <x-slot:redirect>Login</x-slot:redirect>
            </x-form:>
    </section>
</body>

</html>

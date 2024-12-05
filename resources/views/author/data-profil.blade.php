<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Lajur Info | </title>
</head>

<body>
    <section>
        <x-sidebar>
            <x-menu page="pengaturan" role="author">
                Pengaturan
            </x-menu>
            <x-menu page="artikel" role="author">
                Artikel
            </x-menu>
            <x-menu page="notifikasi" role="author">
                Notifikasi
            </x-menu>
        </x-sidebar>
    </section>
</body>

</html>

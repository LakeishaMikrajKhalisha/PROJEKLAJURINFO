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

<body>
    <x-header :categories />
    <section class="w-full h-screen px-20">
        <div class="my-3">
            <x-options></x-options>
        </div>
        <x-carousel></x-carousel>
        <x-article-card :articles/>
    </section>
    <x-footer></x-footer>
</body>

</html>
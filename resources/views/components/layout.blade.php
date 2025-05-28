<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body class="h-full">
    <div class="min-h-full" x-data="{ isOpen: false }">
        <x-navbar></x-navbar>

        <x-header>
            <h1>{{$tittle}}</h1>
        </x-header>

        <x-article>
            {{$slot}}
        </x-article>
    </div>
</body>
</html>

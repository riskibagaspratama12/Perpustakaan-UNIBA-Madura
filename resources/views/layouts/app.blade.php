<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Perpustakaan' }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .pt-navbar {
        padding-top: 60px
    }

    </style>
</head>

<body>
<body>

    @include('layouts.navigation')

    <main class="pt-navbar">
        {{ $slot }}
    </main>

</body>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative flex flex-col justify-center items-center sm:flex sm:flex-col gap-5 sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white">
        <div class="flex justify-center items-center dark:text-white">
            <h1 class="font-semibold text-4xl sm:text-7xl uppercase border-b-4 border-b border-transparent hover:border-blue-500 transition">Stars Roleplay</h1>
        </div>
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>
    </body>
</html>
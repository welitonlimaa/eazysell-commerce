<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <style>
            @layer utilities {
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }
        }
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/cart.js'])
    </head>
    <body class="antialiased min-w-full min-h-screen text-gray-900 bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        @include('components.header')
        <main class="container px-6 py-8 mx-auto">
            @yield('content')
        </main>
        @include('components.footer')
    </body>
</html>

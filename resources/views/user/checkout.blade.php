<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ 'EazySell' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/checkout.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
            @include('components.form-checkout')
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            const cart = JSON.parse(localStorage.getItem('cart'));
            $(function() {
                $('#checkoutForm').submit(function(event) {
                    event.preventDefault();
                    const form = $(this);
                    const url = form.attr('action');
                    const formData = form.serializeArray();
                    formData.push({ name: 'products', value: JSON.stringify(cart) });
                    $.post(url, formData)
                    .done(function(response) {
                        window.location.href = '/dashboard';
                        console.log(response);
                    })
                    .fail(function(xhr, status, error) {
                        console.error(error);
                    });
                });
            });

        </script>
    </body>
</html>

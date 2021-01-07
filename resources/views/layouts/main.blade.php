<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Comics</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        {{-- Inizio esercizio laravel comics --}}

        @include('partials.header')

        @yield('content-main')

        @include('partials.footer')

        {{-- Fine esercizio laravel comics --}}
    </body>
</html>
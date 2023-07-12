<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <title>
            @yield('title', config('app.name', 'SMS'))
        </title>

        <!-- Styles -->
        @vite('resources/css/app.css')
        <livewire:styles />

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>
        
    </head>
    <body class="bg-gray-100 font-sans text-lg">
        @yield('body')
        <livewire:display-status />
    </body>
</html>
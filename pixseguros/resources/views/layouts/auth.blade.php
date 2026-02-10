<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'PixSeguros') }}</title>  -->
        <title>
            {{ isset($title) ? $title.' | ' : '' }}
            {{ config('app.name') }}
            {{ request()->routeIs('home') ? '- Seguros para você' : '' }}
        </title>

        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans text-secondary-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-secondary-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-72 h-20 fill-current text-secondary-500" />
                </a>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        @livewireScripts
    </body>
</html>
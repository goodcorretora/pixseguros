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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-secondary-50 flex flex-col">
            <!-- Navigation -->
            <x-layouts.navigation />

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <x-layouts.footer />
            <livewire:cookies.cookie-consent />
        </div>
        @livewireScripts
    </body>
</html>

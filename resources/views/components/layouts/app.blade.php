<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kostku')</title>
    <!-- <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png"> -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-green-400">
    <div class="bg-red-400">
        @auth
        @if(auth()->user()->role === 'pengelola')
        @include('components.sidebar.pengelola')
        @else
        @include('components.sidebar.penyewa')
        @endif
        @endauth
        <div class="bg-blue-400 ml-64 p-4 min-h-screen">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
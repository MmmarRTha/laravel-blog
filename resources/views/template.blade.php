<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog Project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4 px-4 md:py-8">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-8 md:h-12 mx-auto">
                </a>
                <form action="{{ route('home') }}" method="GET" class="flex-grow">
                    <input name="search" type="text" placeholder="Search" value="{{ request('search') }}"
                           class="px-4 py-2 w-1/2 rounded border border-gray-300 focus:outline-none focus:border-gray-400 focus:ring-gray-400"
                    >
                </form>
            </div>
            <div class="text-lg bg-gradient-to-b from-slate-700 to-slate-500 rounded px-3 py-2 font-normal text-white hover:bg-gradient-to-t">
                @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </header>
            <div class="opacity-60 h-px mb-4 mx-auto" style="
                background: linear-gradient(to right,
                rgba(200, 200, 200, 0) 0%,
                rgba(200, 200, 200, 1) 30%,
                rgba(200, 200, 200, 1) 70%,
                rgba(200, 200, 200, 0) 100%
                );
            ">
            </div>
        @yield('content')
        <p class="py-5 md:py:16">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-12 mx-auto">
        </p>
    </div>
</body>
</html>

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
        <header class="flex justify-between items-center py-8">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-12">
                </a>
                <form action="">
                    <input class="rounded" type="text" placeholder="Search">
                </form>
            </div>
            <div class="text-lg bg-slate-700 rounded px-3 py-2 font-normal text-white hover:bg-slate-800">
                @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
                @else
                <a href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </header>
        <div class="opacity-60 h-px mb-4" style="
            background: linear-gradient(to right,
            rgba(200, 200, 200, 0) 0%,
            rgba(200, 200, 200, 1) 30%,
            rgba(200, 200, 200, 1) 70%,
            rgba(200, 200, 200, 0) 100%
            );
        ">
        </div>
        @yield('content')
        <p class="py-16">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-12 mx-auto">
        </p>
    </div>
</body>
</html>
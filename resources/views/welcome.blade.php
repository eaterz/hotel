<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Laravel</title>

    <!-- Fonts -->


    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
<header >
    <div class="container mx-auto flex justify-between items-center p-6">
        <!-- Logo -->
        <div class="flex items-center">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/w-hotels-logo-svg-vector.svg" alt="Hotel logo" class="h-20 w-20 mr-2">
        </div>

        <!-- Navigation Links -->
        @if (Route::has('login'))
            <div class="flex space-x-4">
                @auth
                    <a href="{{ url('/home') }}" class="transition text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
                @else
                    <a href="{{ route('login') }}" class="transition text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="transition text-black hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</header>

<main>
    <div class="flex items-center justify-center mt-40">

        <div class="text-center">
            <h1 class="text-6xl font-bold text-gray-800 italic">Welcome to Hotel</h1>

        </div>
    </div>
</main>
</body>
</html>

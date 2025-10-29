<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   @if (app()->environment('local'))
        {{-- Saat dijalankan di lokal pakai Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        {{-- Saat production (Railway) pakai file hasil build --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-C6G_3qQV.css') }}">
        <script type="module" src="{{ asset('build/assets/app-Bj43h_rG.js') }}"></script>
    @endif

</head>
<body>


    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-white font-bold text-xl">MyApp</a>
            <ul class="flex space-x-4">
                <li><a href="/about" class="text-white hover:underline">Profile</a></li>
                <li><a href="{{ route('logout') }}" class="text-white hover:underline">logout</a></li>
            </ul>
        </div>
    </nav>

    <div class=" m-2 rounded-lg mt-12">
        @yield('content')
    </div>

</body>
</html>

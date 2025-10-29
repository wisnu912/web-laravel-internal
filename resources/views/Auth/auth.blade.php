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
<body class="bg-gradient-to-r from-white  to-sky-200">


    <div class="text-2xl  text-center text-bg-dark mt-10">

        {{-- check request login aau register --}}
        @if (Request::is('login'))
             <h1 class="font-bold text-base sm:text-sm md:text-xl lg:text-1xl ">
                Login Untuk upload video
             </h1>

             @elseif (Request::is('register'))
             <h1 class="font-bold text-base sm:text-sm md:text-xl lg:text-1xl">
                Register untuk membuat akun
             </h1>
        @endif

        @yield('content')
    </div>
</body>
</html>

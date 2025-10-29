<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @if (app()->environment('local'))
        {{-- Saat dijalankan di lokal pakai Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        {{-- Saat production (Railway) pakai file hasil build --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-C6G_3qQV.css') }}">
        <script type="module" src="{{ asset('build/assets/app-Bj43h_rG.js') }}"></script>
    @endif

</head>
<body class="bg-gray-200 ">
    <h1 class="text-base font-bold text-center mt-20 lg:text-5xl">
        Welcome to Web Internal upVid
    </h1>

    <div class="grid grid-cols-1 lg:flex md:flex gap-6 lg:w-full items-center
    justify-center mt-32  p-4 bg-gray-50 ">
        <!-- Card 1: Informasi -->
        <div class="bg-white shadow-lg rounded-lg p-8 w-full flex flex-col items-center sm:w-42
        md:w-62 lg:w-1/2 ">
            <h2 class="text-2xl font-semibold mb-4 text-blue-600
             text-base sm:text-sm md:text-lg lg:text-xl">Web Internal Up Video</h2>
            <p class="text-gray-700 text-center mb-6 text-sm
            sm:text-sm md:text-lg lg:text-xl">
                Temukan berbagai video internal menarik yang dapat membantu manajemen data video untuk konten
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">
                Konten Eksklusif & Menarik
            </span>
        </div>

        <!-- Card 2: Login/Register -->
        <div class="bg-white shadow-lg rounded-lg p-8  w-full lg:w-1/2
        flex flex-col items-center">
            <h2 class="text-2xl font-semibold mb-4 text-green-600  text-base sm:text-sm md:text-lg lg:text-xl">Akses Konten Video</h2>
            <p class="text-gray-700 text-center mb-6  text-base sm:text-sm md:text-lg lg:text-xl">
                Login untuk mengakses Manajemen video Konten
                atau daftar jika Anda belum memiliki akun.
            </p>
            <div class="flex gap-4">
                <a href="{{ route('register') }}" class="bg-blue-500 cursor-pointer hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition">
                    Register
                </a>
                <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-600 cursor-pointer text-white font-bold py-2 px-4 rounded transition">
                    Login
                </a>
            </div>
        </div>
    </div>

</body>
</html>

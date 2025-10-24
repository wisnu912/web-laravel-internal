<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <h1 class="text-5xl font-bold text-center mt-20">
        Welcome to Web Internal upVid
    </h1>

    <div class="flex items-center justify-center mt-32 gap-8 p-4 bg-gray-50">
        <!-- Card 1: Informasi -->
        <div class="bg-white shadow-lg rounded-lg p-8 w-1/2 flex flex-col items-center">
            <h2 class="text-2xl font-semibold mb-4 text-blue-600">Web Internal Up Video</h2>
            <p class="text-gray-700 text-center mb-6">
                Temukan berbagai video internal menarik yang dapat membantu manajemen data video untuk konten
            <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">
                Konten Eksklusif & Menarik
            </span>
        </div>

        <!-- Card 2: Login/Register -->
        <div class="bg-white shadow-lg rounded-lg p-8 w-1/2
        flex flex-col items-center">
            <h2 class="text-2xl font-semibold mb-4 text-green-600">Akses Konten Video</h2>
            <p class="text-gray-700 text-center mb-6">
                Login untuk mengakses Manajemen video Konten atau daftar jika Anda belum memiliki akun.
            </p>
            <div class="flex gap-4">
                <a href="" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition">
                    Register
                </a>
                <a href="" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition">
                    Login
                </a>
            </div>
        </div>
    </div>

</body>
</html>

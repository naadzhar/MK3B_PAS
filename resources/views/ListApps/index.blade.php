<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Apps</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-pink-50 text-gray-800">
    <h1 class="text-center text-3xl font-bold text-pink-600 my-8">Daftar Aplikasi</h1>
    
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach ($listApps as $app)
            <div class="flex flex-col items-center mb-4 border border-pink-300 p-3 rounded-lg bg-white shadow-md transition-transform transform hover:scale-105">
                <span class="block text-xl font-bold text-pink-600 text-center">{{ $app->application }}</span>
                <p class="mt-2 text-gray-700 text-center">{{ $app->description }}</p>
                <p class="mt-2 text-green-600 font-bold text-lg">Harga: {{ $app->price }}</p>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
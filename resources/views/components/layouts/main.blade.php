<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'UPT-TIK Itenas' }}</title>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    {{-- NAVBAR --}}
    <header class="fixed top-0 left-0 w-full bg-white shadow z-50">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            
            <div class="flex items-center space-x-3">
                {{-- <img src="/img/logo.png" class="h-10"> --}}
                <span class="font-semibold text-xl text-blue-700">
                    UPT-TIK Itenas
                </span>
            </div>

            <nav class="space-x-6 font-medium">
                <a href="/" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="/profil" class="text-gray-700 hover:text-blue-600">Profil</a>
                <a href="/layanan" class="text-gray-700 hover:text-blue-600">Layanan</a>
                <a href="/dokumen" class="text-gray-700 hover:text-blue-600">Dokumen</a>
                <a href="/kontak" class="text-gray-700 hover:text-blue-600">Kontak</a>
            </nav>
        </div>
    </header>

    <main class="pt-20">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer class="bg-blue-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-6 py-12">
            <p class="text-sm opacity-80">© 2025 UPT-TIK Itenas</p>
        </div>
    </footer>

</body>
</html>
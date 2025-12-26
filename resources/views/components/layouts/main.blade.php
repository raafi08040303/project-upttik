<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'UPT-TIK Itenas' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen text-gray-800">

    {{-- NAVBAR --}}
    <header class="fixed top-0 left-0 w-full bg-white/95 backdrop-blur-sm shadow-md z-50 transition-all">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-orange-500 rounded flex items-center justify-center text-white font-bold text-xl">
                    I
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-blue-900 text-lg leading-none">UPT-TIK</span>
                    <span class="text-xs text-gray-500 font-medium tracking-wide">INSTITUT TEKNOLOGI NASIONAL</span>
                </div>
            </div>

            <nav class="hidden md:flex space-x-8 font-medium text-sm">
                <a href="{{ url('/') }}" 
                   class="{{ Request::is('/') ? 'text-blue-600 font-bold' : 'text-gray-600 hover:text-blue-600' }} transition">
                   Home
                </a>
                <a href="{{ url('/profil') }}" 
                   class="{{ Request::is('profil') ? 'text-blue-600 font-bold' : 'text-gray-600 hover:text-blue-600' }} transition">
                   Profil
                </a>
                <a href="{{ url('/layanan') }}" 
                   class="{{ Request::is('layanan') ? 'text-blue-600 font-bold' : 'text-gray-600 hover:text-blue-600' }} transition">
                   Layanan
                </a>
                <a href="{{ url('/documents') }}" 
                   class="{{ Request::is('documents') ? 'text-blue-600 font-bold' : 'text-gray-600 hover:text-blue-600' }} transition">
                   Dokumen
                <a href="http://map.network.itenas.ac.id/" target="_blank" 
                   class="text-gray-600 hover:text-blue-600 transition">
                   Pemetaan Jaringan
                </a>
                <a href="{{ url('/kontak') }}" 
                   class="bg-blue-900 text-white px-5 py-2.5 rounded-full hover:bg-blue-800 transition shadow">
                   Hubungi Kami
                </a>
            </nav>

            <button class="md:hidden text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </header>

    {{-- CONTENT UTAMA --}}
    <main class="pt-20 flex-grow">
        {{ $slot }}
    </main>

    {{-- FOOTER (Dibuat lebih lengkap) --}}
    <footer class="bg-blue-900 text-white mt-auto border-t border-blue-800">
        <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
            
            <div>
                <h3 class="font-bold text-lg mb-4">UPT-TIK ITENAS</h3>
                <p class="opacity-80 leading-relaxed">
                    Menyediakan layanan teknologi informasi yang handal untuk mendukung kegiatan akademik dan administrasi kampus.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4">Tautan Penting</h3>
                <ul class="space-y-2 opacity-80">
                    <li><a href="https://www.itenas.ac.id/" class="hover:text-orange-400 transition">Website Utama Itenas</a></li>
                    <li><a href="https://mahasiswa.itenas.ac.id/mahasiswa/MNM000" class="hover:text-orange-400 transition">Sistem Akademik (SIKAD)</a></li>
                    <li><a href="https://elearning.itenas.ac.id/login/index.php" class="hover:text-orange-400 transition">E-Learning</a></li>
                </ul>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4">Alamat</h3>
                <p class="opacity-80">
                    Gedung 14 Lantai 2<br>
                    Jl. PH.H. Mustofa No.23<br>
                    Bandung 40124, Jawa Barat
                </p>
            </div>
        </div>

        <div class="bg-blue-950 py-4 text-center">
            <p class="text-xs opacity-60">© 2025 UPT-TIK Institut Teknologi Nasional Bandung. All rights reserved.</p>
        </div>
    </footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@stack('scripts')
@stack('styles')
</body>
</html>
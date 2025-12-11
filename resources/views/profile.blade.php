<x-layouts.main title="Profil UPT-TIK">
    
    {{-- HEADER JUDUL --}}
    <section class="bg-blue-900 py-12">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-3xl font-bold text-white">Profil Kami</h1>
            <p class="text-blue-200 mt-2">Mengenal lebih dekat UPT-TIK Itenas</p>
        </div>
    </section>

    {{-- KONTEN PROFIL --}}
    <section class="max-w-7xl mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            
            {{-- Kolom Teks --}}
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang UPT-TIK</h2>
                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                    Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi (UPT-TIK) Itenas 
                    bertanggung jawab penuh atas pengelolaan infrastruktur jaringan, pengembangan sistem informasi, 
                    dan layanan teknologi bagi seluruh civitas akademika.
                </p>
                <p class="text-gray-600 leading-relaxed text-justify">
                    Kami berkomitmen untuk menghadirkan transformasi digital yang mendukung 
                    proses belajar mengajar yang efektif dan efisien.
                </p>
            </div>

            {{-- Kolom Gambar / Struktur --}}
            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200 text-center">
                <div class="w-full h-48 bg-gray-300 rounded flex items-center justify-center mb-4">
                    <span class="text-gray-500 font-medium">Foto Gedung / Tim IT</span>
                </div>
                <p class="text-sm text-gray-500 italic">Gedung UPT-TIK Lantai 2</p>
            </div>
        </div>

        {{-- VISI MISI --}}
        <div class="mt-16 grid md:grid-cols-2 gap-8">
            <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-600">
                <h3 class="font-bold text-blue-900 text-lg mb-2">Visi</h3>
                <p class="text-gray-700">Menjadi pusat layanan TIK yang unggul dan terpercaya.</p>
            </div>
            <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-600">
                <h3 class="font-bold text-blue-900 text-lg mb-2">Misi</h3>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Mengembangkan infrastruktur jaringan handal.</li>
                    <li>Menyediakan layanan support yang responsif.</li>
                </ul>
            </div>
        </div>
    </section>

</x-layouts.main>
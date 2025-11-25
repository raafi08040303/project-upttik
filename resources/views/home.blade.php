<x-layouts.main title="Beranda">

    {{-- HERO --}}
    <section class="relative h-[500px] bg-cover bg-center"
        style="background-image: url('/img/hero.jpg')">
        
        <div class="absolute inset-0 bg-black/50"></div>

        <div class="max-w-7xl mx-auto px-6 h-full flex items-center relative z-10">
            <div>
                <h1 class="text-white text-4xl font-bold drop-shadow-lg">
                    Pusat Teknologi Informasi dan Komunikasi
                </h1>

                <p class="text-gray-200 mt-4 max-w-xl">
                    Mendukung layanan teknologi informasi untuk seluruh civitas akademika Itenas.
                </p>

                <a href="/layanan" 
                   class="inline-block mt-6 px-6 py-3 bg-blue-600 text-white rounded shadow hover:bg-blue-700">
                    Lihat Layanan
                </a>
            </div>
        </div>
    </section>


    {{-- LAYANAN GRID --}}
    <section class="max-w-7xl mx-auto px-6 mt-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-8">Layanan UPT-TIK</h2>

        <div class="grid md:grid-cols-3 gap-6">
            
            {{-- CARD 1 --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg mb-2">Helpdesk</h3>
                <p class="text-gray-600">Pengajuan layanan, troubleshooting, dan dukungan IT.</p>
            </div>

            {{-- CARD 2 --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg mb-2">Jaringan</h3>
                <p class="text-gray-600">Pengelolaan jaringan internet dan perangkat kampus.</p>
            </div>

            {{-- CARD 3 --}}
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <h3 class="font-semibold text-lg mb-2">Sistem Informasi</h3>
                <p class="text-gray-600">Pengembangan aplikasi dan sistem kampus.</p>
            </div>

        </div>
    </section>

</x-layouts.main>

<x-layouts.main title="Beranda - UPT TIK Itenas">

    {{-- BAGIAN 1: HERO SECTION (MODEL SPLIT) --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-20 flex flex-col-reverse md:flex-row items-center gap-12">
            
            <div class="md:w-1/2 text-center md:text-left">
                <span class="inline-block bg-blue-100 text-blue-700 font-bold px-4 py-1 rounded-full text-sm mb-6">
                    Official Website
                </span>
                <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                    Layanan Digital <br>
                    <span class="text-blue-700">Kampus Itenas</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Kami menyediakan infrastruktur jaringan, sistem informasi akademik, dan dukungan teknis terpadu untuk seluruh civitas akademika.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="/layanan" class="bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition shadow-lg hover:-translate-y-1">
                        Jelajahi Layanan
                    </a>
                    <a href="/kontak" class="border-2 border-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:border-blue-700 hover:text-blue-700 transition">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            <div class="md:w-1/2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop" 
                         class="rounded-2xl shadow-2xl relative z-10 border-4 border-white" 
                         alt="Mahasiswa Itenas">
                    
                    <div class="absolute top-10 -right-10 w-full h-full bg-orange-200 rounded-2xl -z-10 transform rotate-3"></div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-blue-600 rounded-full opacity-20 filter blur-3xl"></div>
                </div>
            </div>

        </div>
    </section>

    {{-- BAGIAN 2: LAYANAN UTAMA --}}
    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900">Apa yang Kami Lakukan?</h2>
                <div class="h-1 w-24 bg-orange-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition border border-gray-100 group">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-3xl mb-6 group-hover:bg-blue-600 group-hover:text-white transition">
                        💻
                    </div>
                    <h3 class="text-xl font-bold mb-3">Sistem Informasi</h3>
                    <p class="text-gray-600">Pengelolaan SIKAD, E-Learning, dan portal mahasiswa.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition border border-gray-100 group">
                    <div class="w-14 h-14 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center text-3xl mb-6 group-hover:bg-orange-500 group-hover:text-white transition">
                        📡
                    </div>
                    <h3 class="text-xl font-bold mb-3">Jaringan Internet</h3>
                    <p class="text-gray-600">Layanan WiFi kampus, VPN, dan pemeliharaan server.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition border border-gray-100 group">
                    <div class="w-14 h-14 bg-green-50 text-green-600 rounded-xl flex items-center justify-center text-3xl mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        🛠
                    </div>
                    <h3 class="text-xl font-bold mb-3">Helpdesk IT</h3>
                    <p class="text-gray-600">Bantuan teknis, reset password, dan perbaikan perangkat.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- BAGIAN 3: LOKASI & KONTAK (INI YANG BARU) --}}
    <section class="bg-white py-20 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Kunjungi Kami</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Datang langsung ke kantor UPT-TIK untuk konsultasi teknis atau bantuan layanan IT secara tatap muka.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 mt-1 mr-4">
                                📍
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Alamat Kantor</h4>
                                <p class="text-gray-600 text-sm">
                                    Gedung 14 Lantai 2, Institut Teknologi Nasional<br>
                                    Jl. PH.H. Mustofa No.23, Bandung 40124
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 mt-1 mr-4">
                                📞
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Kontak</h4>
                                <p class="text-gray-600 text-sm">
                                    (022) 7272215 (Ext. 123)<br>
                                    helpdesk@itenas.ac.id
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center text-orange-600 mt-1 mr-4">
                                ⏰
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Jam Operasional</h4>
                                <p class="text-gray-600 text-sm">
                                    Senin - Jumat: 08.00 - 16.00 WIB<br>
                                    Istirahat: 12.00 - 13.00 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: PETA --}}
               <div class="h-96 bg-gray-200 rounded-2xl overflow-hidden shadow-lg border-4 border-white relative z-10">
                    <iframe 
                        width="100%" 
                        height="100%" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Institut%20Teknologi%20Nasional%20Bandung&hl=id&z=17&output=embed">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

</x-layouts.main>
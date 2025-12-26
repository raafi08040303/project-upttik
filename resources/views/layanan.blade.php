<x-layouts.main title="Layanan UPT-TIK">

    {{-- HEADER SECTION --}}
    <div class="bg-gradient-to-r from-blue-900 to-blue-800 py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Layanan Akademik & IT</h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                Daftar layanan teknologi informasi yang tersedia untuk mendukung kegiatan Dosen, Staf, dan Mahasiswa Itenas.
            </p>
        </div>
    </div>

    {{-- GRID LAYANAN --}}
    <div class="max-w-7xl mx-auto px-6 py-16">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- CARD 1: Akun & Email --}}
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <div class="w-14 h-14 bg-blue-50 rounded-lg flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600">Akun & Email</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Layanan pembuatan email institusi (@itenas.ac.id), reset password SSO, dan manajemen akun akademik.
                    </p>
                    <a href="https://tik-care.itenas.ac.id/tiket/create" class="inline-flex items-center text-blue-600 font-semibold hover:underline">
                        HUBUNGI KAMI <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- CARD 2: Koneksi Internet --}}
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <div class="w-14 h-14 bg-orange-50 rounded-lg flex items-center justify-center text-orange-600 mb-6 group-hover:bg-orange-500 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-orange-600">Internet & WiFi</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Informasi area hotspot kampus, cara koneksi WiFi Itenas di Laptop/HP, dan pelaporan gangguan sinyal.
                    </p>
                    <a href="https://tik-care.itenas.ac.id/tiket/create" class="inline-flex items-center text-orange-600 font-semibold hover:underline">
                        HUBUNGI KAMI <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- CARD 3: Software Berlisensi --}}
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <div class="w-14 h-14 bg-green-50 rounded-lg flex items-center justify-center text-green-600 mb-6 group-hover:bg-green-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-600">Software Licensi</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Fasilitas unduh software legal untuk mahasiswa aktif seperti Microsoft Office 365, Antivirus, dan SPSS.
                    </p>
                    <a href="https://tik-care.itenas.ac.id/tiket/create" class="inline-flex items-center text-green-600 font-semibold hover:underline">
                        HUBUNGI KAMI <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- CARD 4: E-Learning (Moodle) --}}
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <div class="w-14 h-14 bg-purple-50 rounded-lg flex items-center justify-center text-purple-600 mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-purple-600">Kuliah Online</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Bantuan teknis penggunaan E-Learning (Moodle), sinkronisasi mata kuliah, dan kendala login mahasiswa.
                    </p>
                    <a href="#" class="inline-flex items-center text-purple-600 font-semibold hover:underline">
                        HUBUNGI KAMI <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- CARD 5: Perbaikan Hardware --}}
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <div class="w-14 h-14 bg-red-50 rounded-lg flex items-center justify-center text-red-600 mb-6 group-hover:bg-red-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-red-600">Servis & Hardware</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Layanan pengecekan dan perbaikan ringan untuk PC Lab, Laptop Inventaris, dan perangkat IT kelas.
                    </p>
                    <a href="/kontak" class="inline-flex items-center text-red-600 font-semibold hover:underline">
                        HUBUNGI KAMI <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </div>

            {{-- CARD 6: Hosting & Domain --}}
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden">
                <div class="p-6">
                    <div class="w-14 h-14 bg-teal-50 rounded-lg flex items-center justify-center text-teal-600 mb-6 group-hover:bg-teal-600 group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-teal-600">Hosting & Domain</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">
                        Fasilitas subdomain (ukm.itenas.ac.id) dan hosting website untuk unit kegiatan, himpunan, dan event.
                    </p>
                    <a href="https://tik-care.itenas.ac.id/tiket/create" class="inline-flex items-center text-teal-600 font-semibold hover:underline">
                        HUBUNGI KAMI <span class="ml-2">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    
    {{-- MULAI BAGIAN GALERI --}}
    <div class="bg-gray-50 py-16 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Fasilitas & Infrastruktur</h2>
                <p class="text-gray-500 mt-2">Dukungan perangkat keras dan ruangan untuk menunjang kegiatan akademik.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <div class="group relative h-64 rounded-xl overflow-hidden cursor-pointer shadow-lg">
                    <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?auto=format&fit=crop&w=800&q=80" 
                         alt="Lab Komputer" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <p class="text-xs font-bold bg-blue-600 px-2 py-1 rounded w-fit mb-1">Gedung 14</p>
                        <h3 class="font-bold text-lg">Lab Komputer Multimedia</h3>
                    </div>
                </div>

                <div class="group relative h-64 rounded-xl overflow-hidden cursor-pointer shadow-lg">
                    <img src="https://images.unsplash.com/photo-1558494949-efc5e60dc3a0?auto=format&fit=crop&w=800&q=80" 
                         alt="Server Room" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <p class="text-xs font-bold bg-red-600 px-2 py-1 rounded w-fit mb-1">Restricted</p>
                        <h3 class="font-bold text-lg">Data Center Utama</h3>
                    </div>
                </div>

                <div class="group relative h-64 rounded-xl overflow-hidden cursor-pointer shadow-lg">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" 
                         alt="Helpdesk" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <p class="text-xs font-bold bg-green-600 px-2 py-1 rounded w-fit mb-1">Layanan</p>
                        <h3 class="font-bold text-lg">Loket Helpdesk</h3>
                    </div>
                </div>

                <div class="group relative h-64 rounded-xl overflow-hidden cursor-pointer shadow-lg">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=800&q=80" 
                         alt="NOC" 
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <p class="text-xs font-bold bg-purple-600 px-2 py-1 rounded w-fit mb-1">Monitoring</p>
                        <h3 class="font-bold text-lg">Network Operation Center</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- SELESAI BAGIAN GALERI --}}

</x-layouts.main>
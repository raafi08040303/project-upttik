<x-layouts.main title="Profil - UPT TIK Itenas">

    {{-- HEADER: JUDUL HALAMAN --}}
    <section class="bg-blue-900 py-20 relative overflow-hidden">
        {{-- Background Pattern (Hiasan) --}}
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-orange-500 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-blue-400 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <span class="text-orange-400 font-bold tracking-wider uppercase text-sm mb-2 block">Tentang Kami</span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
                Profil UPT TIK
            </h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                Unit Pelaksana Teknis Teknologi Informasi dan Komunikasi Institut Teknologi Nasional.
            </p>
        </div>
    </section>

    {{-- BAGIAN 1: SEJARAH --}}
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                
                {{-- Kolom Kiri: Gambar --}}
                <div class="md:w-1/2">
                    <div class="relative group">
                        <div class="absolute -inset-2 bg-gradient-to-r from-blue-600 to-orange-500 rounded-2xl opacity-75 blur transition duration-1000 group-hover:opacity-100 group-hover:duration-200"></div>
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=1000&auto=format&fit=crop" 
                             alt="Sejarah UPT TIK" 
                             class="relative rounded-2xl shadow-xl w-full object-cover transform transition duration-500 hover:scale-[1.01]">
                        
                        {{-- Badge Tahun --}}
                        <div class="absolute bottom-4 left-4 bg-white px-4 py-2 rounded-lg shadow-lg">
                            <span class="block text-xs text-gray-500 font-bold uppercase">Berdiri Sejak</span>
                            <span class="block text-xl font-bold text-blue-800">1998</span>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Teks Sejarah --}}
                <div class="md:w-1/2">
                    <div class="inline-block bg-blue-100 text-blue-700 font-bold px-3 py-1 rounded-full text-xs mb-4">
                        HISTORY
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Sejarah <span class="text-blue-600">UPT-TIK</span></h2>
                    
                    <div class="space-y-4 text-gray-600 leading-relaxed text-justify">
                        <p>
                            Sejarah berdirinya UPT TIK Itenas, diawali dengan pembentukan <strong>Pusat Komputer (Puskom)</strong> Itenas pada tahun <strong>1998</strong>, dimana pada tahun tersebut adalah tahun dimulainya penggunaan Sistem Informasi sebagai pendukung kegiatan akademik dan non akademik di Itenas.
                        </p>
                        <p>
                            Seiring dengan perkembangan Itenas, dalam rangka mengelola sumber daya informasi yang ada di Itenas, pada tahun <strong>2003</strong> Itenas membentuk Unit Pelaksana Teknis Pusat Pengembangan Komputer dan Komunikasi Elektronik <strong>(UPT-PPKKE)</strong>. Tugas utama UPT-PPKKE mengelola infrastruktur jaringan Intranet dan Internet di Itenas serta mengelola website dan email dibawah domain itenas.ac.id.
                        </p>
                        <p>
                            Pada tahun <strong>2008</strong>, nama UPT-PPKKE diubah menjadi <strong>UPT-Teknologi Informasi dan Komunikasi (UPT-TIK)</strong>. Sejalan dengan perubahan nama tersebut, tugas dan tanggung jawab yang diemban oleh UPT-TIK menjadi semakin kompleks, menyangkut seluruh aspek yang terkait dengan Infrastruktur TIK dan layanan Sistem Informasi Itenas.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- BAGIAN 2: VISI & MISI --}}
    <section class="bg-gray-50 py-20 relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                {{-- Visi --}}
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-blue-600 hover:shadow-xl transition relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <svg class="w-24 h-24 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Visi</h3>
                    <p class="text-gray-700 leading-relaxed italic text-lg">
                        "Menjadi pusat layanan teknologi informasi yang handal, inovatif, dan terintegrasi untuk mendukung tercapainya Itenas sebagai perguruan tinggi unggul."
                    </p>
                </div>

                {{-- Misi --}}
                <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-orange-500 hover:shadow-xl transition relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4 opacity-10">
                        <svg class="w-24 h-24 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Misi</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-orange-100 text-orange-600 font-bold text-xs mr-3 mt-1">1</span>
                            Mengembangkan infrastruktur jaringan yang stabil dan aman.
                        </li>
                        <li class="flex items-start">
                            <span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-orange-100 text-orange-600 font-bold text-xs mr-3 mt-1">2</span>
                            Menyediakan sistem informasi akademik yang user-friendly.
                        </li>
                        <li class="flex items-start">
                            <span class="inline-flex items-center justify-center h-6 w-6 rounded-full bg-orange-100 text-orange-600 font-bold text-xs mr-3 mt-1">3</span>
                            Memberikan layanan dukungan teknis yang responsif.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- BAGIAN 3: MANFAAT LAYANAN (DITEMPATKAN DISINI) --}}
    <section class="bg-white py-20 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            
            {{-- Intro Teks --}}
            <div class="max-w-4xl mx-auto mb-16 text-gray-700 leading-relaxed">
                <div class="text-center mb-10">
                    <span class="inline-block bg-blue-100 text-blue-700 font-bold px-4 py-1 rounded-full text-xs mb-4">BENEFITS</span>
                    <h2 class="text-3xl font-bold text-gray-900">Manfaat Layanan <span class="text-blue-600">UPT-TIK</span></h2>
                </div>
                
                <p class="mb-4 text-justify md:text-center">
                    Berdasarkan Statuta Itenas, dalam rangka mewujudkan visi, misi dan tujuan pendidikan di Itenas, maka UPT-TIK dibentuk dengan tanggung jawab dan wewenang:
                </p>
                
                <ul class="space-y-2 mb-8 ml-4 md:ml-0 md:text-center">
                    <li>1. Mengelola dan mengembangkan sistem informasi manajemen berbasis teknologi informasi.</li>
                    <li>2. Mengelola dan memelihara pengembangan web dan basis data Institut.</li>
                    <li>3. Memelihara dan mengembangkan jaringan sistem informasi manajemen.</li>
                </ul>

                <p class="italic text-center font-medium text-gray-600 bg-gray-50 p-4 rounded-lg border border-gray-100">
                    "Dengan demikian keberadaan UPT-TIK akan memberikan manfaat yang luas bagi seluruh pihak, baik kepada seluruh civitas akademika Itenas, maupun kepada pihak luar Itenas."
                </p>
            </div>

            {{-- Grid Manfaat (Kotak Biru) --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:-translate-y-1 transition duration-300 group">
                    <div class="bg-blue-600 py-4 px-6 group-hover:bg-blue-800 transition">
                        <h3 class="text-white font-bold text-center text-lg">Pihak Luar Itenas</h3>
                    </div>
                    <div class="p-6 h-full">
                        <p class="text-gray-600 text-sm text-center leading-relaxed">
                            Teknologi Informasi dan Komunikasi, dimanfaatkan sebagai media pelaporan data perguruan tinggi (PDPT), Publikasi dan Promosi Itenas.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:-translate-y-1 transition duration-300 group">
                    <div class="bg-blue-600 py-4 px-6 group-hover:bg-blue-800 transition">
                        <h3 class="text-white font-bold text-center text-lg">Pimpinan</h3>
                    </div>
                    <div class="p-6 h-full">
                        <p class="text-gray-600 text-sm text-center leading-relaxed">
                            Teknologi informasi dan komunikasi, dimanfaatkan sebagai sumber data dan informasi yang akurat dalam pengambilan keputusan yang efektif.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:-translate-y-1 transition duration-300 group">
                    <div class="bg-blue-600 py-4 px-6 group-hover:bg-blue-800 transition">
                        <h3 class="text-white font-bold text-center text-lg">Dosen</h3>
                    </div>
                    <div class="p-6 h-full">
                        <p class="text-gray-600 text-sm text-center leading-relaxed">
                            Sebagai alat bantu dalam proses belajar mengajar, sumber pencarian materi pembelajaran, dan media berinteraksi antara dosen dan mahasiswa.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:-translate-y-1 transition duration-300 group">
                    <div class="bg-blue-600 py-4 px-6 group-hover:bg-blue-800 transition">
                        <h3 class="text-white font-bold text-center text-lg">Mahasiswa</h3>
                    </div>
                    <div class="p-6 h-full">
                        <p class="text-gray-600 text-sm text-center leading-relaxed">
                            Sebagai media komunikasi, sumber materi pembelajaran, dan sebagai penunjang proses administrasi akademik di Itenas.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:-translate-y-1 transition duration-300 group">
                    <div class="bg-blue-600 py-4 px-6 group-hover:bg-blue-800 transition">
                        <h3 class="text-white font-bold text-center text-lg">Karyawan</h3>
                    </div>
                    <div class="p-6 h-full">
                        <p class="text-gray-600 text-sm text-center leading-relaxed">
                            Teknologi informasi dimanfaatkan sebagai alat bantu meningkatkan produktivitas kerja dan sebagai sumber peningkatan pengetahuan.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden hover:-translate-y-1 transition duration-300 group">
                    <div class="bg-blue-600 py-4 px-6 group-hover:bg-blue-800 transition">
                        <h3 class="text-white font-bold text-center text-lg">Alumni</h3>
                    </div>
                    <div class="p-6 h-full">
                        <p class="text-gray-600 text-sm text-center leading-relaxed">
                            Dimanfaatkan sebagai media interaksi antara kampus dengan alumni, dan sebagai sarana informasi bursa kerja (Career Center).
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- BAGIAN 1: BAGAN STRUKTUR ORGANISASI & TUGAS POKOK --}}
    {{-- ================================================================= --}}
    <section class="bg-white py-20 border-t border-gray-100">
        <div class="max-w-5xl mx-auto px-6">
            
            {{-- Judul --}}
            <div class="text-center mb-16">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-xs mb-2 block">Organization Chart</span>
                <h2 class="text-3xl font-bold text-gray-900">Struktur Organisasi <span class="text-blue-600">UPT-TIK</span></h2>
                <p class="text-gray-500 mt-2">Berikut ini adalah struktur organisasi UPT-TIK Itenas</p>
            </div>

            {{-- 1. BAGAN DIAGRAM (CSS Only) --}}
            <div class="mb-20 overflow-x-auto pb-8">
                <div class="min-w-[600px] flex flex-col items-center">
                    
                    {{-- Level 1: Kepala UPT --}}
                    <div class="bg-gray-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg relative z-10 w-48 text-center">
                        Kepala<br>UPT-TIK
                    </div>

                    {{-- Garis Penghubung Vertikal (Atas) --}}
                    <div class="h-8 w-1 bg-gray-300"></div>

                    {{-- Garis Penghubung Horizontal --}}
                    <div class="w-[60%] h-1 bg-gray-300 relative">
                        {{-- Garis Turun Kiri --}}
                        <div class="absolute left-0 top-0 h-8 w-1 bg-gray-300"></div>
                        {{-- Garis Turun Tengah --}}
                        <div class="absolute left-1/2 -translate-x-1/2 top-0 h-8 w-1 bg-gray-300"></div>
                        {{-- Garis Turun Kanan --}}
                        <div class="absolute right-0 top-0 h-8 w-1 bg-gray-300"></div>
                    </div>

                    {{-- Level 2: Para Kabag --}}
                    <div class="flex justify-between w-[80%] mt-7 gap-4">
                        
                        {{-- Kabag Jaringan --}}
                        <div class="flex-1">
                            <div class="bg-blue-600 text-white font-bold py-3 px-2 rounded-lg shadow-md text-sm text-center hover:bg-blue-700 transition">
                                Kabag<br>Jaringan
                            </div>
                        </div>

                        {{-- Kabag Pangkalan Data --}}
                        <div class="flex-1">
                            <div class="bg-blue-600 text-white font-bold py-3 px-2 rounded-lg shadow-md text-sm text-center hover:bg-blue-700 transition">
                                Kabag<br>Pangkalan Data
                            </div>
                        </div>

                        {{-- Kabag Sistem Informasi --}}
                        <div class="flex-1">
                            <div class="bg-blue-600 text-white font-bold py-3 px-2 rounded-lg shadow-md text-sm text-center hover:bg-blue-700 transition">
                                Kabag<br>Sistem Informasi
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- 2. DESKRIPSI TUGAS (LIST TEXT) --}}
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12 border border-gray-100">
                <h3 class="text-xl font-bold text-gray-900 mb-8 border-b pb-4">Tugas & Tanggung Jawab</h3>
                
                <ul class="space-y-6 text-gray-700 leading-relaxed text-sm md:text-base">
                    
                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs mt-1">1</span>
                        <div>
                            <strong class="block text-gray-900 mb-1">Kepala UPT-TIK</strong>
                            Memimpin dan mengkoordinasikan Pelayanan, Perencanaan dan Pengembangan di bidang Infrastruktur, Jaringan, Internet, Sistem Informasi dan Pengolahan Informasi.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs mt-1">2</span>
                        <div>
                            <strong class="block text-gray-900 mb-1">Kepala Bagian Jaringan</strong>
                            Memimpin bagian pelayanan, pengelolaan, pemeliharaan, dan pengembangan Infrastruktur, Jaringan Komputer, dan Layanan Internet.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs mt-1">3</span>
                        <div>
                            <strong class="block text-gray-900 mb-1">Kepala Bagian Sistem Informasi</strong>
                            Memimpin bagian pelayanan, pengelolaan, pemeliharaan, dan pengembangan Sistem Informasi dan Pengolahan Informasi.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs mt-1">4</span>
                        <div>
                            <strong class="block text-gray-900 mb-1">Kepala Bagian Pangkalan Data</strong>
                            Pengelolaan, pemeliharaan, evaluasi dan pengembangan pangkalan data yang digunakan pada bidang akademik dan non akademik institute.
                        </div>
                    </li>

                    <li class="flex gap-4">
                        <span class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs mt-1">5</span>
                        <div>
                            <strong class="block text-gray-900 mb-1">Staf Pelaksana (Tim Kerja/Technical Support)</strong>
                            Memberikan dukungan teknis secara penuh seluruh kegiatan layanan UPT-TIK.
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section>

   
    {{-- ================================================================= --}}
    {{-- BAGIAN 2: TIM KAMI (MODERN DESIGN - FOTO ASLI) --}}
    {{-- ================================================================= --}}
    <section class="bg-white py-24 relative overflow-hidden">
        
        {{-- Hiasan Background Abstrak --}}
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-blue-50 blur-3xl opacity-50"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-orange-50 blur-3xl opacity-50"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            
            {{-- Header Judul --}}
            <div class="text-center mb-20">
                <span class="text-orange-500 font-bold tracking-widest uppercase text-xs mb-3 block">Meet Our Team</span>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Tim <span class="text-blue-600">UPT-TIK</span></h2>
                <div class="h-1.5 w-24 bg-gradient-to-r from-blue-600 to-blue-400 mx-auto rounded-full"></div>
                <p class="text-gray-500 mt-6 max-w-2xl mx-auto text-lg">
                    Orang-orang profesional dibalik layanan teknologi informasi Institut Teknologi Nasional.
                </p>
            </div>

            {{-- 1. KEPALA UPT (Dikhususkan di Tengah Atas) --}}
            <div class="flex justify-center mb-16">
                <div class="group relative bg-white p-8 rounded-2xl shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300 w-full max-w-sm text-center transform hover:-translate-y-2">
                    
                    {{-- Foto Profile --}}
                    <div class="relative w-40 h-40 mx-auto mb-6">
                        <div class="absolute inset-0 rounded-full bg-blue-600 opacity-10 group-hover:opacity-20 transition-opacity"></div>
                        
                        {{-- FOTO: Pastikan nama file di folder public/images/tim/ adalah 'pak-yusup.jpg' --}}
                        <img src="{{ asset('images/tim/pak-yusup.jpg') }}" 
                             alt="Kepala UPT" 
                             class="w-full h-full object-cover rounded-full p-1 border-2 border-blue-100 relative z-10 shadow-sm">
                    </div>
                    
                    {{-- Info --}}
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Yusup Miftahuddin, S.Kom., M.T.</h3>
                    <span class="inline-block bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full mb-4">
                        Kepala UPT-TIK
                    </span>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Memimpin strategi dan operasional teknologi informasi untuk mendukung visi Itenas.
                    </p>
                </div>
            </div>

            {{-- 2. GRID STAFF & KOORDINATOR --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                {{-- CARD STAFF 1: DANY --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: pak-dany.jpg --}}
                        <img src="{{ asset('images/tim/pak-dany.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Dany, S.T.</h4>
                    <p class="text-blue-600 text-sm font-medium mb-2">Kepala Bagian Sistem Informasi</p>
                </div>

                {{-- CARD STAFF 2: NENDEN --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: bu-nenden.jpg --}}
                        <img src="{{ asset('images/tim/bu-nenden.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Nenden Erlyawati, S.Kom.</h4>
                    <p class="text-blue-600 text-sm font-medium mb-2">Kepala Bagian Pangkalan Data</p>
                </div>

                {{-- CARD STAFF 3: FARID --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: pak-farid.jpg --}}
                        <img src="{{ asset('images/tim/pak-farid.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Farid Firmansyah, S.T.</h4>
                    <p class="text-blue-600 text-sm font-medium mb-2">Kepala Bagian Jaringan</p>
                </div>

                {{-- CARD STAFF 4: ANDRI --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: pak-andri.jpg --}}
                        <img src="{{ asset('images/tim/pak-andri.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Andri Permana, A.Md.</h4>
                    <p class="text-gray-500 text-sm font-medium mb-2">Staff Technical Support</p>
                </div>

                {{-- CARD STAFF 5: DEVILA --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: pak-devila.jpg --}}
                        <img src="{{ asset('images/tim/pak-devila.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Devila Indra M., A.Md.</h4>
                    <p class="text-gray-500 text-sm font-medium mb-2">Staff Technical Support</p>
                </div>

                {{-- CARD STAFF 6: HASNA --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: bu-hasna.jpg --}}
                        <img src="{{ asset('images/tim/bu-hasna.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Hasna Septi Dewi, S.Kom.</h4>
                    <p class="text-gray-500 text-sm font-medium mb-2">Programmer</p>
                </div>

                {{-- CARD STAFF 7: ASSIDIQ --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: pak-assidiq.jpg --}}
                        <img src="{{ asset('images/tim/pak-assidiq.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">M. Assidiq Fattah, S.Kom.</h4>
                    <p class="text-gray-500 text-sm font-medium mb-2">Programmer</p>
                </div>

                {{-- CARD STAFF 8: ANISA --}}
                <div class="bg-white p-6 rounded-xl shadow-lg border border-gray-50 hover:border-blue-200 transition duration-300 group text-center">
                    <div class="w-28 h-28 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-md group-hover:scale-105 transition-transform duration-300">
                        {{-- GANTI NAMA FILE: bu-anisa.jpg --}}
                        <img src="{{ asset('images/tim/bu-anisa.jpeg') }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-gray-900 text-lg">Anisa Putri S, S.Kom.</h4>
                    <p class="text-gray-500 text-sm font-medium mb-2">Programmer</p>
                </div>

            </div>

        </div>
    </section>
   
    {{-- BAGIAN: ROADMAP (GAMBAR) --}}
   
    <section class="py-20 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 text-center">

            {{-- Header Judul --}}
            <div class="mb-12">
                <span class="text-blue-600 font-bold tracking-wider uppercase text-xs mb-2 block">Our Strategic Plan</span>
                <h2 class="text-3xl font-bold text-gray-900">Roadmap <span class="text-orange-500">Pengembangan</span></h2>
                <p class="text-gray-500 mt-2">Peta jalan teknologi informasi dan komunikasi UPT-TIK Itenas.</p>
            </div>

            {{-- Container Gambar Roadmap --}}
            <div class="bg-white p-4 rounded-2xl shadow-lg border border-gray-100 inline-block">
                <img src="{{ asset('images/roadmap.jpg') }}" 
                     alt="Roadmap Pengembangan UPT-TIK" 
                     class="w-full h-auto max-h-[600px] object-contain rounded-xl hover:scale-[1.02] transition duration-500">
            </div>

        </div>
    </section>
        </div>
    </section>
        </div>
    </section>

</x-layouts.main>
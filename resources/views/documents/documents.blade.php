<x-layouts.main title="Dokumen UPT-TIK">

    {{-- HEADER --}}
    <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Dokumen UPT-TIK
                </h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                    Koleksi dokumen resmi yang tersedia di UPT-TIK ITENAS
                </p>
            </div>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="max-w-7xl mx-auto px-6 -mt-8 pb-16">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">

            {{-- FILTER SECTION --}}
            <div class="bg-gradient-to-r from-gray-50 to-blue-50/30 px-6 py-5 border-b border-gray-200">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-1">
                            Daftar Dokumen
                        </h2>
                        <p class="text-sm text-gray-500">
                            Kelola dan akses dokumen dengan mudah
                        </p>
                    </div>

                    <div class="flex items-center gap-2">
                        <label class="text-sm font-medium text-gray-600">Filter:</label>
                        <select id="filterType"
                            class="w-full md:w-52 border-2 border-gray-200 rounded-xl px-4 py-2.5 text-sm font-medium text-gray-700 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all cursor-pointer hover:border-gray-300 bg-white">
                            <option value="">📋 Semua Jenis</option>
                            <option value="SOP">📝 SOP</option>
                            <option value="Panduan">📖 Panduan</option>
                            <option value="Surat">✉️ Surat</option>
                        </select>
                    </div>
                </div>
            </div>

            {{-- TABLE --}}
            <div class="p-6">
                <div class="overflow-x-auto rounded-xl border border-gray-200">
                    <table id="documentsTable" class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                            <tr>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider w-16">
                                    No
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">
                                    Judul Dokumen
                                </th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider w-32">
                                    Jenis
                                </th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider w-40">
                                    Dibuat
                                </th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider w-40">
                                    Diperbarui
                                </th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider w-32">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100"></tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    {{-- MODAL PREVIEW PDF --}}
    <div id="pdfModal"
        class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
        <div class="bg-white w-full max-w-6xl h-[85vh] rounded-2xl overflow-hidden shadow-2xl transform transition-all">
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-blue-50/30">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800">Preview Dokumen</h3>
                </div>
                <button onclick="closePdf()" 
                    class="w-10 h-10 flex items-center justify-center rounded-lg text-gray-500 hover:text-white hover:bg-red-500 transition-all duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <iframe id="pdfFrame" class="w-full h-[calc(100%-64px)]"></iframe>
        </div>
    </div>

    {{-- STYLES --}}
    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <style>
            /* DataTables Custom Styling */
            .dataTables_wrapper {
                font-family: inherit;
            }

            .dataTables_wrapper .dataTables_length,
            .dataTables_wrapper .dataTables_filter,
            .dataTables_wrapper .dataTables_info,
            .dataTables_wrapper .dataTables_paginate {
                padding: 12px 0;
            }

            .dataTables_wrapper .dataTables_length select,
            .dataTables_wrapper .dataTables_filter input {
                border: 2px solid #e5e7eb;
                padding: 8px 12px;
                border-radius: 10px;
                margin-left: 8px;
                font-size: 14px;
                transition: all 0.2s;
            }

            .dataTables_wrapper .dataTables_filter input {
                width: 250px;
            }

            .dataTables_wrapper .dataTables_length select:focus,
            .dataTables_wrapper .dataTables_filter input:focus {
                outline: none;
                border-color: #3b82f6;
                box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 8px 14px !important;
                margin: 0 3px !important;
                border-radius: 8px !important;
                border: 2px solid transparent !important;
                background: white !important;
                font-weight: 500 !important;
                transition: all 0.2s !important;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                background: #eff6ff !important;
                border-color: #3b82f6 !important;
                color: #3b82f6 !important;
            }

            .dataTables_wrapper .dataTables_paginate .paginate_button.current {
                background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
                color: white !important;
                border-color: #3b82f6 !important;
            }

            .dataTables_wrapper .dataTables_info {
                color: #6b7280;
                font-size: 14px;
            }

            /* Table Row Hover */
            #documentsTable tbody tr {
                transition: all 0.2s;
            }

            #documentsTable tbody tr:hover {
                background-color: #f8fafc;
                transform: scale(1.001);
            }

            /* Loading Animation */
            .dataTables_processing {
                background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
                color: white !important;
                border: none !important;
                border-radius: 12px !important;
                padding: 16px 24px !important;
                font-weight: 600 !important;
                box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3) !important;
            }
        </style>
    @endpush

    {{-- SCRIPTS --}}
    @push('scripts')
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

        <script>
            let table;

            $(function () {
                table = $('#documentsTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('documents.datatable') }}",
                        data: function (d) {
                            d.documentType = $('#filterType').val();
                        }
                    },

                    autoWidth: false,
                    responsive: true,
                    lengthChange: true,
                    pageLength: 10,

                    columns: [
                        { 
                            data: 'DT_RowIndex', 
                            orderable: false, 
                            className: 'text-center font-semibold text-gray-600'
                        },
                        { 
                            data: 'title', 
                            className: 'font-semibold text-gray-800',
                            render: function(data) {
                                return `<div class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-blue-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="line-clamp-2">${data}</span>
                                </div>`;
                            }
                        },
                        {
                            data: 'documentType',
                            className: 'text-center',
                            render: function (data) {
                                const colors = {
                                    'SOP': 'bg-blue-100 text-blue-700 border-blue-200',
                                    'Panduan': 'bg-green-100 text-green-700 border-green-200',
                                    'Surat': 'bg-purple-100 text-purple-700 border-purple-200'
                                };
                                const color = colors[data] || 'bg-gray-100 text-gray-700 border-gray-200';
                                return `<span class="inline-flex items-center px-3 py-1.5 rounded-lg text-xs font-bold border ${color}">${data}</span>`;
                            }
                        },
                        { 
                            data: 'created_at', 
                            className: 'text-center text-sm text-gray-600',
                            render: function(data) {
                                return `<div class="flex items-center justify-center gap-1.5">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>${data}</span>
                                </div>`;
                            }
                        },
                        { 
                            data: 'updated_at', 
                            className: 'text-center text-sm text-gray-600',
                            render: function(data) {
                                return `<div class="flex items-center justify-center gap-1.5">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                    </svg>
                                    <span>${data}</span>
                                </div>`;
                            }
                        },
                        { 
                            data: 'action', 
                            orderable: false, 
                            searchable: false, 
                            className: 'text-center'
                        }
                    ],

                    language: {
                        search: "🔍 Cari:",
                        lengthMenu: "Tampilkan _MENU_ data",
                        info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ dokumen",
                        infoEmpty: "Menampilkan 0 sampai 0 dari 0 dokumen",
                        infoFiltered: "(difilter dari _MAX_ total dokumen)",
                        processing: "⏳ Memuat data...",
                        emptyTable: "📂 Belum ada dokumen tersedia",
                        zeroRecords: "🔍 Dokumen tidak ditemukan",
                        paginate: {
                            first: "Awal",
                            last: "Akhir",
                            next: "Selanjutnya",
                            previous: "Sebelumnya"
                        }
                    }
                });

                $('#filterType').change(function () {
                    table.ajax.reload();
                });
            });

            function previewPdf(url) {
                $('#pdfFrame').attr('src', url);
                $('#pdfModal').removeClass('hidden').addClass('flex');
                $('body').addClass('overflow-hidden');
            }

            function closePdf() {
                $('#pdfFrame').attr('src', '');
                $('#pdfModal').addClass('hidden').removeClass('flex');
                $('body').removeClass('overflow-hidden');
            }

            // Close modal with ESC key
            $(document).keydown(function(e) {
                if (e.key === "Escape" && !$('#pdfModal').hasClass('hidden')) {
                    closePdf();
                }
            });

            // Close modal when clicking outside
            $('#pdfModal').click(function(e) {
                if (e.target === this) {
                    closePdf();
                }
            });
        </script>
    @endpush

</x-layouts.main>
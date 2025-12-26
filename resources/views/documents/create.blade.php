<x-layouts.main title="Tambah Dokumen">
    {{-- HEADER SECTION --}}
    <div class="bg-gradient-to-r from-blue-900 to-blue-800 py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Dokumen UPTTIK</h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto">
                Upload Dokumen Baru ke Sistem UPT-TIK
            </p>
        </div>
    </div>

  
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">
                        <i class="fa fa-file-upload me-2"></i>
                        Tambah Dokumen
                    </h5>
                </div>

                <div class="card-body p-4">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form id="uploadForm"
                          action="{{ url('/documents') }}"
                          method="POST"
                          enctype="multipart/form-data">
                        @csrf

                        {{-- JUDUL --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Judul Dokumen
                            </label>
                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="Contoh: SOP Penggunaan Sistem"
                                   required>
                        </div>

                        {{-- JENIS --}}
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Jenis Dokumen
                            </label>
                            <select name="documentType" class="form-select" required>
                                <option value="">-- Pilih Jenis Dokumen --</option>
                                <option value="SOP">SOP</option>
                                <option value="Panduan">Panduan</option>
                                <option value="Surat">Surat</option>
                                <option value="Pengumuman">Pengumuman</option>
                                <option value="Formulir">Formulir</option>
                            </select>
                        </div>

                        {{-- FILE --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                File Dokumen
                            </label>
                            <input type="file"
                                   name="url"
                                   class="form-control"
                                   accept=".pdf,.doc,.docx"
                                   required>
                            <small class="text-muted">
                                Format PDF / DOC / DOCX · Maksimal 5MB
                            </small>
                        </div>

                        {{-- PROGRESS --}}
                        <div class="mb-4">
                            <div class="progress d-none" style="height: 20px;">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                     role="progressbar"
                                     style="width: 0%">
                                    0%
                                </div>
                            </div>
                        </div>

                        {{-- BUTTON --}}
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ url('/documents') }}"
                               class="btn btn-light">
                                Batal
                            </a>
                            <button type="submit"
                                    class="btn btn-primary px-4">
                                <i class="fa fa-upload me-1"></i>
                                Upload
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('uploadForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const progress = document.querySelector('.progress');
    const bar = document.querySelector('.progress-bar');

    progress.classList.remove('d-none');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

    xhr.upload.onprogress = function (e) {
        if (e.lengthComputable) {
            const percent = Math.round((e.loaded / e.total) * 100);
            bar.style.width = percent + '%';
            bar.textContent = percent + '%';
        }
    };

    xhr.onload = function () {
        if (xhr.status === 200) {
            bar.classList.remove('progress-bar-animated');
            bar.classList.add('bg-success');
            bar.textContent = 'Upload selesai';
            setTimeout(() => window.location.href = '/documents', 800);
        } else {
            bar.classList.add('bg-danger');
            bar.textContent = 'Upload gagal';
        }
    };

    xhr.send(new FormData(form));
});
</script>
@endpush

</x-layouts.main>

@extends('admin.layouts.sidebar')
@section('title', 'Tambah Pelatihan')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-primary fw-bold">Tambah Pelatihan</h2>

        <div class="card shadow-lg border-0 rounded-4 p-4 bg-light" style="max-width: 600px; margin: auto;">
            <div class="card-body">
                <form action="{{ route('admin.pelatihan.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="judul_pelatihan" class="form-label fw-semibold text-dark">Judul Pelatihan</label>
                        <input type="text" class="form-control shadow-sm border-primary" id="judul_pelatihan" name="judul_pelatihan"
                            placeholder="Masukkan judul pelatihan" required>
                    </div>

                    <div class="mb-3">
                        <label for="tahun" class="form-label fw-semibold text-dark">Tahun</label>
                        <input type="text" class="form-control shadow-sm border-primary" id="tahun" name="tahun"
                            placeholder="Contoh: 2020 - 2024" required>
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label fw-semibold text-dark">Keterangan</label>
                        <textarea class="form-control shadow-sm border-primary" id="keterangan" name="keterangan" rows="4"
                            placeholder="Masukkan keterangan" required></textarea>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.pelatihan.index') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm fw-semibold">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

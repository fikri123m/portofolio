@extends('admin.layouts.sidebar')
@section('title', 'Tambah Pendidikan')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4 text-primary fw-bold">Tambah Pendidikan</h2>

    <div class="card shadow-lg border-0 rounded-4 p-4" style="max-width: 600px; margin: auto;">
        <div class="card-body">
            <form action="{{ route('admin.pendidikan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama_instansi" class="form-label fw-semibold">Nama Instansi</label>
                    <input type="text" class="form-control shadow-sm" id="nama_instansi" name="nama_instansi" 
                           placeholder="Masukkan nama instansi" required>
                </div>

                <div class="mb-3">
                    <label for="jurusan" class="form-label fw-semibold">Jurusan</label>
                    <input type="text" class="form-control shadow-sm" id="jurusan" name="jurusan" 
                           placeholder="Masukkan jurusan" required>
                </div>

                <div class="mb-3">
                    <label for="tahun" class="form-label fw-semibold">Tahun</label>
                    <input type="text" class="form-control shadow-sm" id="tahun" name="tahun" 
                           placeholder="Contoh: 2020 - 2024" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.pendidikan.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary rounded-pill px-4 shadow-sm">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

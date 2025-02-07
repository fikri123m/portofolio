@extends('admin.layouts.sidebar')
@section('title', 'Tambah Projek')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4 text-primary fw-bold">Tambah Projek</h2>

    <div class="card shadow-lg border-0 rounded-4 p-4">
        <div class="card-body">
            <form action="{{ route('admin.projek.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul_projek" class="form-label fw-bold">Judul Projek</label>
                    <input type="text" class="form-control rounded-pill px-3" id="judul_projek" 
                        name="judul_projek" placeholder="Masukkan judul projek" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi_projek" class="form-label fw-bold">Deskripsi Projek</label>
                    <textarea class="form-control rounded-3" id="deskripsi_projek" 
                        name="deskripsi_projek" placeholder="Masukkan Deskripsi Projek" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-bold">Upload Foto</label>
                    <input type="file" class="form-control rounded-pill" id="foto" 
                        name="foto" accept="image/*">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.projek.index') }}" class="btn btn-secondary rounded-pill px-4">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success rounded-pill px-4">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>

            <!-- Validasi Error -->
            @if ($errors->any())
                <div class="alert alert-danger mt-3 rounded-3">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

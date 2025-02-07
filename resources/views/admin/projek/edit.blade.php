@extends('admin.layouts.sidebar')
@section('title', 'Edit Projek')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary">Edit Projek</h2>

        <div class="card shadow-lg p-4">
            <form action="{{ route('admin.projek.update', $projek->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul_projek" class="form-label fw-bold text-dark">Judul Projek</label>
                    <input type="text" class="form-control border-2 border-primary" id="judul_projek" name="judul_projek"
                        value="{{ $projek->judul_projek }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi_projek" class="form-label fw-bold text-dark">Deskripsi Projek</label>
                    <textarea class="form-control border-2 border-primary" id="deskripsi_projek" name="deskripsi_projek" rows="5" required>{{ $projek->deskripsi_projek }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-bold text-dark">Upload Foto</label>
                    <input type="file" class="form-control border-2 border-primary" id="foto" name="foto" accept="image/*">
                    @if($projek->foto)
                        <img src="{{ asset('storage/' . $projek->foto) }}" alt="Foto Projek" class="img-fluid mt-2" style="max-width: 200px;">
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.projek.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('admin.layouts.sidebar')
@section('title', 'Projek')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary">Daftar Projek</h2>

        <!-- Tombol Tambah -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.projek.create') }}" class="btn btn-success">
                <i class="bi bi-plus-lg"></i> Tambah Projek
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered shadow-sm">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Judul Projek</th>
                        <th>Deskripsi Projek</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($projek as $item)
                        <tr>
                            <td>{{ $item->judul_projek }}</td>
                            <td>{{ Str::limit($item->deskripsi_projek, 50) }}</td> <!-- Menambahkan pembatas untuk deskripsi -->
                            <td>
                                @if ($item->foto)
                                    <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Projek" width="100">
                                @else
                                    Tidak ada foto
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.projek.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.projek.destroy', $item->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Jika Tidak Ada Data -->
        @if ($projek->isEmpty())
            <div class="alert alert-warning text-center mt-3">
                <i class="bi bi-exclamation-triangle"></i> Belum ada data projek.
            </div>
        @endif
    </div>
@endsection

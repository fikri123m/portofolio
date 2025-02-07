@extends('admin.layouts.sidebar')
@section('title', 'Pendidikan')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4 text-primary fw-bold">Daftar Pendidikan</h2>

        <!-- Tombol Tambah -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.pendidikan.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
                <i class="bi bi-plus-lg"></i> Tambah Pendidikan
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4 p-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama Instansi</th>
                                <th>Jurusan</th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendidikan as $item)
                                <tr>
                                    <td class="fw-semibold">{{ $item->nama_instansi }}</td>
                                    <td>{{ $item->jurusan }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>
                                        <a href="{{ route('admin.pendidikan.edit', $item->id) }}" 
                                           class="btn btn-warning btn-sm rounded-pill px-3">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.pendidikan.destroy', $item->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3"
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
                @if ($pendidikan->isEmpty())
                    <div class="alert alert-warning text-center mt-3">
                        <i class="bi bi-exclamation-triangle"></i> Belum ada data pendidikan.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

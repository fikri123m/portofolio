@extends('admin.layouts.sidebar')
@section('title', 'Pelatihan')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-primary fw-bold">Daftar Pelatihan</h2>

        <!-- Tombol Tambah -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.pelatihan.create') }}" class="btn btn-success rounded-pill px-4 shadow-sm fw-semibold">
                <i class="bi bi-plus-lg"></i> Tambah Pelatihan
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-bordered shadow-lg rounded-4">
                <thead class="table-primary text-center">
                    <tr>
                        <th>Judul Pelatihan</th>
                        <th>Tahun</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($pelatihan as $item)
                        <tr>
                            <td class="align-middle">{{ $item->judul_pelatihan }}</td>
                            <td class="align-middle">{{ $item->tahun }}</td>
                            <td class="text-start align-middle">
                                <ul class="list-unstyled mb-0">
                                    @foreach (explode("\n", trim($item->keterangan)) as $line)
                                        <li>• {{ $line }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('admin.pelatihan.edit', $item->id) }}" class="btn btn-warning btn-sm rounded-pill px-3 shadow-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.pelatihan.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm rounded-pill px-3 shadow-sm"
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
        @if ($pelatihan->isEmpty())
            <div class="alert alert-warning text-center mt-3 shadow-sm rounded-4">
                <i class="bi bi-exclamation-triangle"></i> Belum ada data pelatihan.
            </div>
        @endif
    </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('admin.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('admin.pendidikan.create');
    }

    public function store(Request $request)
    {
        Pendidikan::create([
            'nama_instansi' => $request->nama_instansi,
            'jurusan' => $request->jurusan,
            'tahun' => $request->tahun
        ]);

        return redirect()->route('admin.pendidikan.index')->with('success', 'Berhasil menambahkan pendidikan!');
    }

    public function edit($id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('admin.pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());

        return redirect()->route('admin.pendidikan.index')->with('success', 'Berhasil memperbarui pendidikan!');
    }

    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return redirect()->route('admin.pendidikan.index')->with('success', 'Berhasil menghapus pendidikan!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihan = Pelatihan::all();
        return view('admin.pelatihan.index', compact('pelatihan'));
    }

    public function create()
    {
        return view('admin.pelatihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_pelatihan' => 'required|string|max:255',
            'tahun' => 'required|string|max:9',
            'keterangan' => 'required|string',
        ]);

        Pelatihan::create([
            'judul_pelatihan' => $request->judul_pelatihan,
            'tahun' => $request->tahun,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.pelatihan.index')->with('success', 'Berhasil menambahkan pelatihan!');
    }

    public function edit($id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        return view('admin.pelatihan.edit', compact('pelatihan'));
    }

    public function update(Request $request, string $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan->update($request->all());

        return redirect()->route('admin.pelatihan.index')->with('success', 'Berhasil memperbarui pelatihan!');
    }

    public function destroy(string $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan->delete();

        return redirect()->route('admin.pelatihan.index')->with('success', 'Berhasil menghapus pelatihan!');
    }

}

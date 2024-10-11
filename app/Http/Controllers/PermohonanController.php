<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    // Menampilkan daftar permohonan
    public function index()
    {
        $permohonan = Permohonan::all();
        return view('permohonan.index', compact('permohonan'));
    }

    // Form untuk membuat permohonan baru
    public function create()
    {
        return view('permohonan.create');
    }

    // Menyimpan permohonan baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            // tambahkan validasi sesuai kebutuhan
        ]);

        Permohonan::create($request->all());

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil dibuat.');
    }

    // Menampilkan detail permohonan
    public function show(Permohonan $permohonan)
    {
        return view('permohonan.show', compact('permohonan'));
    }

    // Form untuk mengedit permohonan
    public function edit(Permohonan $permohonan)
    {
        return view('permohonan.edit', compact('permohonan'));
    }

    // Update permohonan
    public function update(Request $request, Permohonan $permohonan)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $permohonan->update($request->all());

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil diperbarui.');
    }

    // Hapus permohonan
    public function destroy(Permohonan $permohonan)
    {
        $permohonan->delete();

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil dihapus.');
    }
}

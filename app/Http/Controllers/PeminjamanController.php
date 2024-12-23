<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with('buku', 'pengguna')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $bukus = Buku::all();
        $penggunas = Pengguna::all();
        return view('peminjaman.create', compact('bukus', 'penggunas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required|exists:buku,id',
            'id_pengguna' => 'required|exists:pengguna,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after:tanggal_pinjam',
            'status' => 'required|in:dipinjam,dikembalikan',
        ]);

        Peminjaman::create($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function show(Peminjaman $peminjaman)
    {
        return view('peminjaman.show', compact('peminjaman'));
    }

    public function edit(Peminjaman $peminjaman)
    {
        $bukus = Buku::all();
        $penggunas = Pengguna::all();
        return view('peminjaman.edit', compact('peminjaman', 'bukus', 'penggunas'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $request->validate([
            'id_buku' => 'required|exists:buku,id',
            'id_pengguna' => 'required|exists:pengguna,id',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after:tanggal_pinjam',
            'status' => 'required|in:dipinjam,dikembalikan',
        ]);

        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}

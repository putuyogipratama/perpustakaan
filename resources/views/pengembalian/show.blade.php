@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Detail Pengembalian</h1>

            <div class="mb-4">
                <h2 class="text-lg font-semibold">Informasi Peminjaman</h2>
                <p><strong>Buku:</strong> {{ $pengembalian->peminjaman->buku->judul }}</p>
                <p><strong>Peminjam:</strong> {{ $pengembalian->peminjaman->pengguna->nama }}</p>
                <p><strong>Tanggal Pinjam:</strong> {{ $pengembalian->peminjaman->tanggal_pinjam }}</p>
                <p><strong>Tanggal Kembali:</strong> {{ $pengembalian->peminjaman->tanggal_kembali }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-lg font-semibold">Detail Pengembalian</h2>
                <p><strong>Tanggal Pengembalian:</strong> {{ $pengembalian->tanggal_pengembalian }}</p>
                <p><strong>Denda:</strong> Rp{{ number_format($pengembalian->denda, 2, ',', '.') }}</p>
            </div>

            <div class="flex gap-2">
                <a href="{{ route('pengembalian.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
                <a href="{{ route('pengembalian.edit', $pengembalian->id) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</a>
                <form action="{{ route('pengembalian.destroy', $pengembalian->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
@endsection

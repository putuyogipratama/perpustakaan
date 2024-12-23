@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Detail Peminjaman</h1>

            <div class="mb-4">
                <h2 class="text-lg font-semibold">Informasi Peminjaman</h2>
                <table class="w-full border border-gray-300 mt-2">
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border text-left">Field</th>
                        <th class="px-4 py-2 border text-left">Detail</th>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Buku</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->buku->judul }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Pengguna</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->pengguna->nama }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Tanggal Pinjam</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->tanggal_pinjam }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Tanggal Kembali</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->tanggal_kembali }}</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border font-medium">Status</td>
                        <td class="px-4 py-2 border">{{ $peminjaman->status }}</td>
                    </tr>
                </table>
            </div>

            <div class="flex justify-end mt-4">
                <a href="{{ route('peminjaman.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">Kembali</a>
                <a href="{{ route('peminjaman.edit', $peminjaman->id) }}"
                    class="ml-2 bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600">Edit</a>
            </div>
        </div>
    </div>
@endsection

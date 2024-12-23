@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Peminjaman</h1>
                <a href="{{ route('peminjaman.create') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Tambah Peminjaman</a>
            </div>
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mt-4">
                    {{ session('success') }}
                </div>
            @endif
            <table class="w-full border border-gray-300 mt-4">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Buku</th>
                        <th class="px-4 py-2 border">Pengguna</th>
                        <th class="px-4 py-2 border">Tanggal Pinjam</th>
                        <th class="px-4 py-2 border">Tanggal Kembali</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($peminjaman as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 border">{{ $item->buku->judul }}</td>
                            <td class="px-4 py-2 border">{{ $item->pengguna->nama }}</td>
                            <td class="px-4 py-2 border">{{ $item->tanggal_pinjam }}</td>
                            <td class="px-4 py-2 border">{{ $item->tanggal_kembali }}</td>
                            <td class="px-4 py-2 border">{{ $item->status }}</td>
                            <td class="px-4 py-2 border flex gap-2">
                                <a href="{{ route('peminjaman.show', $item->id) }}"
                                    class="bg-blue-500 text-white px-2 py-1 rounded">Detail</a>
                                <a href="{{ route('peminjaman.edit', $item->id) }}"
                                    class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded"
                                        onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 border text-center text-gray-500">Belum ada data peminjaman.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

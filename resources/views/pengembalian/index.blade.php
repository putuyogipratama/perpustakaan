@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header Card -->
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Pengembalian</h1>
                <a href="{{ route('pengembalian.create') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Tambah Pengembalian</a>
            </div>

            <!-- Flash Message -->
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mt-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Table -->
            <table class="w-full border border-gray-300 mt-4">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Peminjaman</th>
                        <th class="px-4 py-2 border">Tanggal Pengembalian</th>
                        <th class="px-4 py-2 border">Denda</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengembalians as $pengembalian)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 border">
                                Buku: {{ $pengembalian->peminjaman->buku->judul }} <br>
                                Peminjam: {{ $pengembalian->peminjaman->pengguna->nama }}
                            </td>
                            <td class="px-4 py-2 border">{{ $pengembalian->tanggal_pengembalian }}</td>
                            <td class="px-4 py-2 border">Rp{{ number_format($pengembalian->denda, 2, ',', '.') }}</td>
                            <td class="px-4 py-2 border flex gap-2">
                                <a href="{{ route('pengembalian.show', $pengembalian->id) }}"
                                    class="bg-blue-500 text-white px-2 py-1 rounded">Detail</a>
                                <a href="{{ route('pengembalian.edit', $pengembalian->id) }}"
                                    class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                <form action="{{ route('pengembalian.destroy', $pengembalian->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded"
                                        onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2 border text-center">Belum ada data pengembalian.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <!-- Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header Card: Judul dan Tombol Tambah -->
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Buku</h1>
                <a href="{{ route('buku.create') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Tambah Buku</a>
            </div>

            <!-- Tampilkan pesan sukses -->
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tabel Daftar Buku -->
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-300 text-left text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 border">No.</th>
                            <th class="px-4 py-2 border">Judul</th>
                            <th class="px-4 py-2 border">Penulis</th>
                            <th class="px-4 py-2 border">Penerbit</th>
                            <th class="px-4 py-2 border">Tahun Terbit</th>
                            <th class="px-4 py-2 border">Stok</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bukus as $buku)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border">{{ $buku->judul }}</td>
                                <td class="px-4 py-2 border">{{ $buku->penulis }}</td>
                                <td class="px-4 py-2 border">{{ $buku->penerbit }}</td>
                                <td class="px-4 py-2 border">{{ $buku->tahun_terbit }}</td>
                                <td class="px-4 py-2 border">{{ $buku->stok }}</td>
                                <td class="px-4 py-2 border flex gap-2">
                                    <!-- Detail Button -->
                                    <a href="{{ route('buku.show', $buku->id) }}"
                                        class="bg-blue-500 text-white px-2 py-1 rounded shadow hover:bg-blue-600">Detail</a>
                                    <!-- Edit Button -->
                                    <a href="{{ route('buku.edit', $buku->id) }}"
                                        class="bg-yellow-500 text-white px-2 py-1 rounded shadow hover:bg-yellow-600">Edit</a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-2 py-1 rounded shadow hover:bg-red-600"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-2 border text-center text-gray-500">Tidak ada data buku.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

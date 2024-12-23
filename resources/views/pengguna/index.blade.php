@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Daftar Pengguna</h1>
                <a href="{{ route('pengguna.create') }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Tambah Pengguna</a>
            </div>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <table class="w-full border border-gray-300 text-left text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">No.</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Jenis Pengguna</th>
                        <th class="px-4 py-2 border">Alamat</th>
                        <th class="px-4 py-2 border">No Telepon</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengguna as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 border">{{ $item->nama }}</td>
                            <td class="px-4 py-2 border">{{ ucfirst($item->jenis_pengguna) }}</td>
                            <td class="px-4 py-2 border">{{ $item->alamat }}</td>
                            <td class="px-4 py-2 border">{{ $item->no_telepon }}</td>
                            <td class="px-4 py-2 border flex gap-2">
                                <a href="{{ route('pengguna.show', $item->id) }}"
                                    class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Detail</a>
                                <a href="{{ route('pengguna.edit', $item->id) }}"
                                    class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                                <form action="{{ route('pengguna.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-2 border text-center text-gray-500">Tidak ada data pengguna.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

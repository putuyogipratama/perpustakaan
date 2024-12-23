@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header -->
            <h1 class="text-2xl font-bold mb-4">Detail Pengguna</h1>

            <!-- Informasi Pengguna -->
            <div class="mb-6">
                <div class="mb-4">
                    <label class="block text-sm font-medium">Nama</label>
                    <p class="text-gray-700">{{ $pengguna->nama }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Jenis Pengguna</label>
                    <p class="text-gray-700">{{ ucfirst($pengguna->jenis_pengguna) }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Alamat</label>
                    <p class="text-gray-700">{{ $pengguna->alamat }}</p>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">No Telepon</label>
                    <p class="text-gray-700">{{ $pengguna->no_telepon }}</p>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex space-x-4">
                <a href="{{ route('pengguna.edit', $pengguna->id) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600">
                    Edit
                </a>
                <form action="{{ route('pengguna.destroy', $pengguna->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus pengguna ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600">
                        Hapus
                    </button>
                </form>
                <a href="{{ route('pengguna.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">
                    Kembali
                </a>
            </div>
        </div>
    </div>
@endsection

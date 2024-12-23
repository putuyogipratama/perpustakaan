@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Tambah Pengguna</h1>
            <form action="{{ route('pengguna.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium">Nama</label>
                    <input type="text" name="nama" id="nama" class="mt-1 block w-full border-gray-300 rounded-md"
                        required>
                </div>
                <div class="mb-4">
                    <label for="jenis_pengguna" class="block text-sm font-medium">Jenis Pengguna</label>
                    <select name="jenis_pengguna" id="jenis_pengguna" class="mt-1 block w-full border-gray-300 rounded-md"
                        required>
                        <option value="siswa">Siswa</option>
                        <option value="dosen">Dosen</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="mt-1 block w-full border-gray-300 rounded-md"
                        required>
                </div>
                <div class="mb-4">
                    <label for="no_telepon" class="block text-sm font-medium">No Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon"
                        class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('pengguna.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600 mr-2">Batal</a>
                    &nbsp;
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

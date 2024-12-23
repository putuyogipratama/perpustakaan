@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header -->
            <h1 class="text-2xl font-bold mb-4">Edit Pengguna</h1>

            <!-- Form Edit Pengguna -->
            <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama -->
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $pengguna->nama) }}"
                        class="w-full border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('nama')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Jenis Pengguna -->
                <div class="mb-4">
                    <label for="jenis_pengguna" class="block text-sm font-medium">Jenis Pengguna</label>
                    <select id="jenis_pengguna" name="jenis_pengguna"
                        class="w-full border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="siswa"
                            {{ old('jenis_pengguna', $pengguna->jenis_pengguna) == 'siswa' ? 'selected' : '' }}>
                            Siswa
                        </option>
                        <option value="dosen"
                            {{ old('jenis_pengguna', $pengguna->jenis_pengguna) == 'dosen' ? 'selected' : '' }}>
                            Dosen
                        </option>
                    </select>
                    @error('jenis_pengguna')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="3"
                        class="w-full border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('alamat', $pengguna->alamat) }}</textarea>
                    @error('alamat')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- No Telepon -->
                <div class="mb-4">
                    <label for="no_telepon" class="block text-sm font-medium">No Telepon</label>
                    <input type="text" id="no_telepon" name="no_telepon"
                        value="{{ old('no_telepon', $pengguna->no_telepon) }}"
                        class="w-full border-gray-300 rounded shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('no_telepon')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end">
                    <a href="{{ route('pengguna.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">
                        Batal
                    </a> &nbsp;
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

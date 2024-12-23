@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-6">
        <!-- Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header Card -->
            <h1 class="text-2xl font-bold mb-4">Tambah Buku</h1>

            <!-- Form Tambah Buku -->
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <!-- Input Judul -->
                <div class="mb-4">
                    <label for="judul" class="block text-gray-700 font-medium mb-2">Judul Buku</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan judul buku" required>
                    @error('judul')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Penulis -->
                <div class="mb-4">
                    <label for="penulis" class="block text-gray-700 font-medium mb-2">Penulis</label>
                    <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama penulis" required>
                    @error('penulis')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Penerbit -->
                <div class="mb-4">
                    <label for="penerbit" class="block text-gray-700 font-medium mb-2">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama penerbit" required>
                    @error('penerbit')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Tahun Terbit -->
                <div class="mb-4">
                    <label for="tahun_terbit" class="block text-gray-700 font-medium mb-2">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan tahun terbit" required>
                    @error('tahun_terbit')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Input Stok -->
                <div class="mb-4">
                    <label for="stok" class="block text-gray-700 font-medium mb-2">Stok</label>
                    <input type="number" name="stok" id="stok" value="{{ old('stok') }}"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan jumlah stok" required>
                    @error('stok')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-end">
                    <a href="{{ route('buku.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600 mr-2">Batal</a>
                    &nbsp;
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header -->
            <h1 class="text-2xl font-bold mb-4">Tambah Pengembalian</h1>

            <!-- Form -->
            <form action="{{ route('pengembalian.store') }}" method="POST">
                @csrf

                <!-- Peminjaman -->
                <div class="mb-4">
                    <label for="id_peminjaman" class="block text-gray-700 font-medium">Peminjaman</label>
                    <select id="id_peminjaman" name="id_peminjaman"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="" disabled selected>Pilih Peminjaman</option>
                        @foreach ($peminjamans as $peminjaman)
                            <option value="{{ $peminjaman->id }}">ID: {{ $peminjaman->id }} - Buku:
                                {{ $peminjaman->buku->judul }} - Pengguna: {{ $peminjaman->pengguna->nama }}</option>
                        @endforeach
                    </select>
                    @error('id_peminjaman')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tanggal Pengembalian -->
                <div class="mb-4">
                    <label for="tanggal_pengembalian" class="block text-gray-700 font-medium">Tanggal Pengembalian</label>
                    <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                        value="{{ old('tanggal_pengembalian') }}">
                    @error('tanggal_pengembalian')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Denda -->
                <div class="mb-4">
                    <label for="denda" class="block text-gray-700 font-medium">Denda (Rp)</label>
                    <input type="number" id="denda" name="denda" step="0.01"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('denda', 0) }}">
                    @error('denda')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

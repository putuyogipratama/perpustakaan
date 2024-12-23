@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header Card -->
            <h1 class="text-2xl font-bold mb-4">Edit Pengembalian</h1>

            <!-- Form -->
            <form action="{{ route('pengembalian.update', $pengembalian->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Peminjaman -->
                <div class="mb-4">
                    <label for="id_peminjaman" class="block text-gray-700 font-bold mb-2">Peminjaman:</label>
                    <select name="id_peminjaman" id="id_peminjaman"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200">
                        @foreach ($peminjamans as $peminjaman)
                            <option value="{{ $peminjaman->id }}"
                                {{ $pengembalian->id_peminjaman == $peminjaman->id ? 'selected' : '' }}>
                                {{ $peminjaman->buku->judul }} - {{ $peminjaman->pengguna->nama }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_peminjaman')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tanggal Pengembalian -->
                <div class="mb-4">
                    <label for="tanggal_pengembalian" class="block text-gray-700 font-bold mb-2">Tanggal
                        Pengembalian:</label>
                    <input type="date" name="tanggal_pengembalian" id="tanggal_pengembalian"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"
                        value="{{ old('tanggal_pengembalian', $pengembalian->tanggal_pengembalian) }}">
                    @error('tanggal_pengembalian')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Denda -->
                <div class="mb-4">
                    <label for="denda" class="block text-gray-700 font-bold mb-2">Denda:</label>
                    <input type="number" step="0.01" name="denda" id="denda"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200"
                        value="{{ old('denda', $pengembalian->denda) }}">
                    @error('denda')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

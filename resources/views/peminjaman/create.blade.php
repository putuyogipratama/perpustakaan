@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Tambah Peminjaman</h1>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('peminjaman.store') }}" method="POST">
                @csrf

                <!-- Buku -->
                <div class="mb-4">
                    <label for="id_buku" class="block text-sm font-medium text-gray-700">Buku</label>
                    <select name="id_buku" id="id_buku" class="w-full border-gray-300 rounded mt-1">
                        <option value="" disabled selected>Pilih Buku</option>
                        @foreach ($bukus as $buku)
                            <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Pengguna -->
                <div class="mb-4">
                    <label for="id_pengguna" class="block text-sm font-medium text-gray-700">Pengguna</label>
                    <select name="id_pengguna" id="id_pengguna" class="w-full border-gray-300 rounded mt-1">
                        <option value="" disabled selected>Pilih Pengguna</option>
                        @foreach ($penggunas as $pengguna)
                            <option value="{{ $pengguna->id }}">{{ $pengguna->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Tanggal Pinjam -->
                <div class="mb-4">
                    <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam"
                        class="w-full border-gray-300 rounded mt-1">
                </div>

                <!-- Tanggal Kembali -->
                <div class="mb-4">
                    <label for="tanggal_kembali" class="block text-sm font-medium text-gray-700">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali"
                        class="w-full border-gray-300 rounded mt-1">
                </div>

                <!-- Status -->
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="w-full border-gray-300 rounded mt-1">
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="dipinjam">Dipinjam</option>
                        <option value="dikembalikan">Dikembalikan</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

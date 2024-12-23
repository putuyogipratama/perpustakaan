@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-2">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">Edit Peminjaman</h1>

            @if ($errors->any())
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="id_buku" class="block text-sm font-medium text-gray-700">Buku</label>
                    <select name="id_buku" id="id_buku" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach ($bukus as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $peminjaman->id_buku ? 'selected' : '' }}>
                                {{ $item->judul }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="id_pengguna" class="block text-sm font-medium text-gray-700">Pengguna</label>
                    <select name="id_pengguna" id="id_pengguna"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        @foreach ($penggunas as $item)
                            <option value="{{ $item->id }}"
                                {{ $item->id == $peminjaman->id_pengguna ? 'selected' : '' }}>
                                {{ $item->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" id="tanggal_pinjam"
                        value="{{ $peminjaman->tanggal_pinjam }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="tanggal_kembali" class="block text-sm font-medium text-gray-700">Tanggal Kembali</label>
                    <input type="date" name="tanggal_kembali" id="tanggal_kembali"
                        value="{{ $peminjaman->tanggal_kembali }}"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                        <option value="dipinjam" {{ $peminjaman->status == 'dipinjam' ? 'selected' : '' }}>Dipinjam
                        </option>
                        <option value="dikembalikan" {{ $peminjaman->status == 'dikembalikan' ? 'selected' : '' }}>
                            Dikembalikan</option>
                    </select>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('peminjaman.index') }}"
                        class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">Batal</a>
                    <button type="submit"
                        class="ml-2 bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

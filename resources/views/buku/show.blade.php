@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-6">
        <!-- Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Header Card -->
            <div class="mb-4">
                <h1 class="text-2xl font-bold">Detail Buku: {{ $buku->judul }}</h1>
            </div>

            <!-- Detail Buku -->
            <div class="mb-4">
                <p><strong>Judul:</strong> {{ $buku->judul }}</p>
                <p><strong>Penulis:</strong> {{ $buku->penulis }}</p>
                <p><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
                <p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>
                <p><strong>Stok:</strong> {{ $buku->stok }}</p>
            </div>

            <!-- Tombol Kembali -->
            <div class="flex justify-end">
                <a href="{{ route('buku.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">Kembali</a>
            </div>
        </div>
    </div>
@endsection

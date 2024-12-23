@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 mt-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-bold text-gray-700">Total Buku</h2>
                <p class="text-2xl font-semibold text-blue-500 mt-2">{{ $totalBooks }}</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-bold text-gray-700">Total Pengguna</h2>
                <p class="text-2xl font-semibold text-green-500 mt-2">{{ $totalUsers }}</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-bold text-gray-700">Total Peminjaman</h2>
                <p class="text-2xl font-semibold text-yellow-500 mt-2">{{ $totalBorrowings }}</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 text-center">
                <h2 class="text-lg font-bold text-gray-700">Total Pengembalian</h2>
                <p class="text-2xl font-semibold text-red-500 mt-2">{{ $totalReturns }}</p>
            </div>
        </div>
    </div>
@endsection

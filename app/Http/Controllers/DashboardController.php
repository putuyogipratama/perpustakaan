<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Pengguna;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Buku::count();
        $totalUsers = Pengguna::count();
        $totalBorrowings = Peminjaman::count();
        $totalReturns = Pengembalian::count();
        return view('dashboard', compact('totalBooks', 'totalUsers', 'totalBorrowings', 'totalReturns'));
    }
}

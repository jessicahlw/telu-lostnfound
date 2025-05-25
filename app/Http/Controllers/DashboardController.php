<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil user yang login
        $user = Auth::user();

        // Ambil semua laporan barang yang dibuat user ini
        // Asumsi: tabel 'barang' ada kolom 'user_id' yang jadi foreign key
        $laporan = Barang::where('user_id', $user->id)->get();

        // Kirim data ke view dashboard
        return view('dashboard', compact('user', 'laporan'));
    }
}

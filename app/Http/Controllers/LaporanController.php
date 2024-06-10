<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $transaksi = Transaksi::all();
        $booking = Booking::all();
        $produk = Produk::all();

        $totalPendapatan = Transaksi::sum('total_harga');
        $topTransactions = Transaksi::orderBy('total_harga', 'desc')->take(10)->get();
        $customers = User::withCount('transaksi')->orderBy('transaksi_count', 'desc')->get();

        return view('admin.dashboard', compact('user', 'transaksi', 'booking', 'produk', 'totalPendapatan', 'topTransactions', 'customers'));
    }
}

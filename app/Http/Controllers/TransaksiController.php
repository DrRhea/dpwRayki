<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Booking;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mendapatkan transaksi terbaru berdasarkan user_id yang sedang login dan diurutkan berdasarkan waktu terbaru
        $transaksi = Transaksi::where('user_id', $user->id)
            ->latest()
            ->with('produk')
            ->first(); // Sesuaikan dengan jumlah data per halaman yang diinginkan

        // dd($transaksi);

        // Mengirim data transaksi ke view
        return view('summary', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create transaction
        $transaksi = Transaksi::create([
            'user_id' => $request->user_id,
            'produks_id' => $request->produks_id,
            'email_penyewa' => $request->email_penyewa,
            'nama_penyewa' => $request->nama_penyewa,
            'alamat_penyewa' => $request->alamat_penyewa,
            'no_hp_penyewa' => $request->no_hp_penyewa,
            'lama_sewa' => (int) $request->lama_sewa,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_harga' => $request->total_harga
        ]);

        // Calculate end date based on current timestamp and rental duration
        $tanggalMulai = Carbon::now();
        $lamaSewa = (int) $request->lama_sewa; // Convert to integer
        $tanggalSelesai = $tanggalMulai->copy()->addDays($lamaSewa);

        // Create booking
        Booking::create([
            'user_id' => $transaksi->user_id,
            'produks_id' => $transaksi->produks_id,
            'tanggal_mulai' => $tanggalMulai,
            'tanggal_selesai' => $tanggalSelesai,
            'status' => 'booked'
        ]);

        // Redirect to index with success message
        return redirect()->route('transaksi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}

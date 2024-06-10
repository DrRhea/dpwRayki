<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        // Mendapatkan transaksi terbaru berdasarkan user_id yang sedang login dan diurutkan berdasarkan waktu terbaru
        $transaksi = Transaksi::where('user_id', $user->id)
            ->with('produk')
            ->orderBy('created_at', 'desc')
            ->get(); // Menggunakan get() untuk mendapatkan data

        // Mendapatkan transaksi terbaru berdasarkan user_id yang sedang login dan diurutkan berdasarkan waktu terbaru
        $booking = Booking::where('user_id', $user->id)
            ->with('produk')
            ->orderBy('created_at', 'desc')
            ->get(); // Menggunakan get() untuk mendapatkan data

        return view('history', compact('transaksi', 'booking'));
    }

    public function pengembalian(Request $request, string $id): RedirectResponse
    {
        
        // Update the status
        $booking = Booking::findOrFail($id);
        $booking->status = 'completed';
        $booking->save();

        // Redirect to history page
        return redirect()->route('history')->with(['success' => 'Data Berhasil Diubah!']);
    }
}

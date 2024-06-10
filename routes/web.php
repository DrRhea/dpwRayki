<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Div;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/produk', [ProdukController::class, 'index'])->name('user.produk');
Route::get('/produk/detail/{id}', [ProdukController::class, 'show']);
Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/store', function () {
    return view('store');
})->name('store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/produk/rental/{id}', [ProdukController::class, 'rental'])->name('rental');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__ . '/auth.php';

// Routes buat customer
Route::middleware(['auth', 'userMiddleware'])->group(
    function () {
        Route::post('/produk/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');

        Route::get('/produk/transaksi/detail', [TransaksiController::class, 'index'])->name('transaksi.index');

        Route::get('/pesanan', [BookingController::class, 'index'])->name('history');

        Route::put('/pengembalian/{id}', [BookingController::class, 'pengembalian'])->name('pengembalian');

        Route::fallback(function () {
            return view('welcome');
        });
    }
);

// Routes buat admin
Route::middleware(['auth', 'adminMiddleware'])->group(
    function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin');
        Route::get('/admin/produk', [ProdukController::class, 'admin_index'])->name('admin.product');
        Route::get('/admin/produk/tambah', [ProdukController::class, 'admin_create'])->name('admin_create');
        Route::post('/admin/produk/store', [ProdukController::class, 'admin_store'])->name('products.store');
        Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'admin_edit'])->name('admin_edit');
        Route::put('/admin/produk/{id}/update', [ProdukController::class, 'admin_update'])->name('products.update');
        Route::delete('/admin/produk/{id}/delete', [ProdukController::class, 'admin_destroy'])->name('admin_delete');

        Route::get('admin/laporan', [LaporanController::class, 'index'])->name('laporan.index');

        Route::fallback(function () {
            return view('admin.dashboard');
        });
    }
);

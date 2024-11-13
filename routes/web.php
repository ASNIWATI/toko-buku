<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController, ProfitController, PembelianController, PenjualanController, LaporanController, LabaKotorController, OwnerController, KasirController};

// Rute default
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProfileController;

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');



// Group dengan middleware auth
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Rute dashboard umum untuk semua pengguna
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute untuk pengguna dengan role 'owner'
    Route::middleware('checkRole:owner')->group(function () {
        Route::get('/owner-dashboard', [OwnerController::class, 'index'])->name('owner.dashboard');
    });

    // Rute untuk pengguna dengan role 'kasir'
    Route::middleware('checkRole:kasir')->group(function () {
        Route::get('/kasir-dashboard', [KasirController::class, 'index'])->name('kasir.dashboard');
    });

    // Rute untuk halaman lainnya
    Route::get('/hitung-laba', [DashboardController::class, 'hitungLaba'])->name('laba');
    Route::get('/laporan-penjualan', [DashboardController::class, 'laporanPenjualan'])->name('penjualan');
    Route::get('/data-pembelian', [DashboardController::class, 'dataPembelian'])->name('pembelian');
    Route::get('/stok-barang', [DashboardController::class, 'stokBarang'])->name('stok');

    // Rute pembelian
    Route::resource('pembelian', PembelianController::class)->except(['show']);

    // Rute penjualan
    Route::resource('penjualan', PenjualanController::class)->except(['show']);
    
    // Rute laporan laba kotor
    Route::get('/laporan/laba-kotor', [LaporanController::class, 'hitungLabaKotor'])->name('laporan.laba-kotor');
    Route::get('/laporan/laba-kotor/test-data', [LabaKotorController::class, 'testData']);
});

// Rute jika akses ditolak
Route::get('/access-denied', function () {
    return view('access-denied');
})->name('access.denied');

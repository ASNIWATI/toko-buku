<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pembelian;

class LaporanController extends Controller
{
    public function hitungLabaKotor()
    {
        // Menghitung total penjualan
        $totalPenjualan = Penjualan::all()->sum('total_harga');

        // Menghitung total pembelian
        $totalPembelian = Pembelian::all()->sum('total_harga');

        // Menghitung laba kotor
        $labaKotor = $totalPembelian - $totalPenjualan;

        // Mengirim data ke view
        return view('laporan.laba-kotor', compact('totalPenjualan', 'totalPembelian', 'labaKotor'));
    }
}

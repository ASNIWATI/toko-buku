<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Fungsi untuk halaman utama dashboard (Home)
    public function index()
    {
        return view('home');  // Mengarahkan ke view dashboard/index.blade.php
    }

    // Fungsi untuk halaman Hitung Laba
    public function hitungLaba()
    {
        return view('laporan.index');  // Mengarahkan ke view dashboard/hitung-laba.blade.php
    }

    // Fungsi untuk halaman Laporan Penjualan
    public function laporanPenjualan()
    {
        return view('penjualan.index');  // Mengarahkan ke view dashboard/laporan-penjualan.blade.php
    }

    // Fungsi untuk halaman Data Pembelian
    public function dataPembelian()
    {
        return view('pembelian');  // Mengarahkan ke view dashboard/data-pembelian.blade.php
    }

}

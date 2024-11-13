<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Pembelian;

class LabaKotorController extends Controller
{
    public function index(Request $request)
    {
        // Ambil input bulan dan tahun dari request
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        // Default nilai total penjualan dan pembelian
        $totalPenjualan = 0;
        $totalPembelian = 0;

        if ($bulan && $tahun) {
            // Jika bulan dan tahun tersedia, hitung laba kotor bulanan
            $totalPenjualan = (new Penjualan())->totalPerBulan($bulan, $tahun);
            $totalPembelian = (new Pembelian())->totalPerBulan($bulan, $tahun);
        } elseif ($tahun) {
            // Jika hanya tahun yang tersedia, hitung laba kotor tahunan
            $totalPenjualan = (new Penjualan())->totalPerTahun($tahun);
            $totalPembelian = (new Pembelian())->totalPerTahun($tahun);
        }

        // Hitung laba kotor
        $labaKotor = $totalPenjualan - $totalPembelian;

        // Tampilkan view dengan data yang dihitung
        return view('laporan.laba-kotor', compact('totalPenjualan', 'totalPembelian', 'labaKotor', 'bulan', 'tahun'));
    }

    public function testData()
{
    $penjualan = Penjualan::all(); // Ambil semua data penjualan
    $pembelian = Pembelian::all(); // Ambil semua data pembelian

    dd($penjualan, $pembelian); // Dump data untuk melihat hasil
}
}

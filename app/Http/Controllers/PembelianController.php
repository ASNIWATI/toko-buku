<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all(); // Mengambil semua data pembelian dari database
        $totalPembelian = $pembelian->sum('total_harga'); // Menghitung total harga dari semua pembelian

        return view('pembelian.index', compact('pembelian', 'totalPembelian')); // Mengirim data ke view dengan nama variabel "pembelian" dan "totalPembelian"
    }

    public function create()
    {
        return view('pembelian.create'); // Menampilkan form tambah pembelian
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'supplier' => 'required|string|max:255',
            'tanggal_pembelian' => 'required|date',
            'barang' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric'
        ]);

        // Simpan data ke database
        Pembelian::create([
            'supplier' => $request->supplier,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total_harga' => $request->jumlah * $request->harga
        ]);

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier' => 'required|string|max:255',
            'tanggal_pembelian' => 'required|date',
            'barang' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $pembelian = Pembelian::findOrFail($id);
        $pembelian->update([
            'supplier' => $request->supplier,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total_harga' => $request->jumlah * $request->harga,
        ]);

        return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil diupdate');
    }

    public function destroy($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();

        return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil dihapus');
    }
}

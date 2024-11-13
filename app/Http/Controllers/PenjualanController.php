<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.index', compact('penjualan'));
    }

    public function create()
    {
        return view('penjualan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required|string|max:255',
            'tanggal_penjualan' => 'required|date',
            'barang' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric'
        ]);

        Penjualan::create([
            'customer' => $request->customer,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total_harga' => $request->jumlah * $request->harga
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer' => 'required|string|max:255',
            'tanggal_penjualan' => 'required|date',
            'barang' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $penjualan = Penjualan::findOrFail($id);
        $penjualan->update([
            'customer' => $request->customer,
            'tanggal_penjualan' => $request->tanggal_penjualan,
            'barang' => $request->barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total_harga' => $request->jumlah * $request->harga,
        ]);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil diupdate');
    }

    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil dihapus');
    }
}

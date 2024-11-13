@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penjualan</h1>
    
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="customer">Customer</label>
            <input type="text" id="customer" name="customer" required>
        </div>
        
        <div class="mb-3">
            <label for="tanggal_penjualan">Tanggal Penjualan</label>
            <input type="date" id="tanggal_penjualan" name="tanggal_penjualan" required>
        </div>
        
        <div class="mb-3">
            <label for="barang">Barang</label>
            <input type="text" id="barang" name="barang" required>
        </div>
        
        <div class="mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="number" id="jumlah" name="jumlah" required>
        </div>
        
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" required>
        </div>
        
        <button type="submit" class="btn-primary">Simpan</button>
    </form>
</div>
@endsection

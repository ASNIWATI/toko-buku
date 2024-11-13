@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penjualan</h1>
    
    <form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="customer">Customer</label>
            <input type="text" id="customer" name="customer" value="{{ $penjualan->customer }}" required>
        </div>
        
        <div class="mb-3">
            <label for="tanggal_penjualan">Tanggal Penjualan</label>
            <input type="date" id="tanggal_penjualan" name="tanggal_penjualan" value="{{ $penjualan->tanggal_penjualan }}" required>
        </div>
        
        <div class="mb-3">
            <label for="barang">Barang</label>
            <input type="text" id="barang" name="barang" value="{{ $penjualan->barang }}" required>
        </div>
        
        <div class="mb-3">
            <label for="jumlah">Jumlah</label>
            <input type="number" id="jumlah" name="jumlah" value="{{ $penjualan->jumlah }}" required>
        </div>
        
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" value="{{ $penjualan->harga }}" required>
        </div>
        
        <button type="submit" class="btn-primary">Update</button>
    </form>
</div>
@endsection

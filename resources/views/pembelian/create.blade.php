@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pembelian</h1>
    
    <form action="{{ route('pembelian.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="supplier">Supplier</label>
            <input type="text" id="supplier" name="supplier" required>
        </div>
        
        <div class="mb-3">
            <label for="tanggal_pembelian">Tanggal Pembelian</label>
            <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" required>
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

@extends('layouts.app')

@section('content')
    <h2>Tambah Pembelian</h2>

    <form action="{{ route('pembelian.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Supplier</label>
            <input type="text" name="supplier" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Barang</label>
            <input type="text" name="barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h2>Edit Pembelian</h2>

    <form action="{{ route('pembelian.update', $pembelian->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Supplier</label>
            <input type="text" name="supplier" class="form-control" value="{{ $pembelian->supplier }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="form-control" value="{{ $pembelian->tanggal_pembelian }}" required>
        </div>
        <div class="form-group">
            <label>Barang</label>
            <input type="text" name="barang" class="form-control" value="{{ $pembelian->barang }}" required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ $pembelian->jumlah }}" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" step="0.01" name="harga" class="form-control" value="{{ $pembelian->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

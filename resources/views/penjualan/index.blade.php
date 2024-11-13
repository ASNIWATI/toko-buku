@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Penjualan</h1>
    
    <a href="{{ route('penjualan.create') }}" class="btn-primary">Tambah Penjualan</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Tanggal Penjualan</th>
                <th>Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $item)
                <tr>
                    <td>{{ $item->customer }}</td>
                    <td>{{ $item->tanggal_penjualan }}</td>
                    <td>{{ $item->barang }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>{{ $item->total_harga }}</td>
                    <td>
                        <a href="{{ route('penjualan.edit', $item->id) }}" class="btn-primary">Edit</a>
                        <form action="{{ route('penjualan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

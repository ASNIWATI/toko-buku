@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <style>
        /* CSS untuk tampilan container, tabel, dan tombol */
        .container {
            margin-top: 30px;
        }
        .card-header {
            background-color: #2c3e50;
            color: #fff;
            font-size: 1.5em;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .btn-primary:hover {
            background-color: #0069d9;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
            color: #fff;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
            color: #fff;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #2c3e50;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            Data Pembelian
        </div>
        
        <a href="{{ route('pembelian.create') }}" class="btn-primary">Tambah Pembelian</a>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Supplier</th>
                    <th>Tanggal Pembelian</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Helper untuk format rupiah
                    function formatRupiah($number) {
                        return 'Rp ' . number_format($number, 0, ',', '.');
                    }
                @endphp
                @foreach ($pembelian as $item)
                    <tr>
                        <td>{{ $item->supplier }}</td>
                        <td>{{ $item->tanggal_pembelian }}</td>
                        <td>{{ $item->barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ formatRupiah($item->harga) }}</td>
                        <td>{{ formatRupiah($item->total_harga) }}</td>
                        <td>
                            <a href="{{ route('pembelian.edit', $item->id) }}" class="btn-warning">Edit</a>
                            <form action="{{ route('pembelian.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" style="text-align: right; font-weight: bold;">Total Pembelian</td>
                    <td>{{ formatRupiah($totalPembelian) }}</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</body>
</html>
@endsection

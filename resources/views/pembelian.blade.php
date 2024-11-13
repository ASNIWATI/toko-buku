@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>
    <style>
        /* CSS untuk tampilan tabel dan tombol */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .btn-primary {
            display: inline-block;
            padding: 8px 12px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        /* Styling tombol edit dan hapus */
        .btn-warning {
            padding: 6px 10px;
            background-color: #ffc107;
            color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            padding: 6px 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* Atur tampilan form hapus */
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pembelian</h2>
        
        <a href="{{ route('pembelian.index') }}" class="btn-primary">Tambah Pembelian</a>

        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <table>
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
                @foreach ($pembelian as $item)
                    <tr>
                        <td>{{ $item->supplier }}</td>
                        <td>{{ $item->tanggal_pembelian }}</td>
                        <td>{{ $item->barang }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp{{ number_format($item->harga, 2, ',', '.') }}</td>
                        <td>Rp{{ number_format($item->total_harga, 2, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('pembelian.edit', $item->id) }}" class="btn-warning">Edit</a>
                            <form action="{{ route('pembelian.destroy', $item->id) }}" method="POST">
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
</body>
</html>
@endsection

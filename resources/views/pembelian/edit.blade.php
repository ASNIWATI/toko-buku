@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembelian</title>
    <style>
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .btn-primary, .btn-danger {
            width: 100%;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #4CAF50;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .btn-danger {
            background-color: #e74c3c;
            margin-top: 10px;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Pembelian</h1>
        
        <form action="{{ route('pembelian.update', $pembelian->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="supplier">Supplier</label>
                <input type="text" id="supplier" name="supplier" value="{{ $pembelian->supplier }}" required>
            </div>
            
            <div class="mb-3">
                <label for="tanggal_pembelian">Tanggal Pembelian</label>
                <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" value="{{ $pembelian->tanggal_pembelian }}" required>
            </div>
            
            <div class="mb-3">
                <label for="barang">Barang</label>
                <input type="text" id="barang" name="barang" value="{{ $pembelian->barang }}" required>
            </div>
            
            <div class="mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" value="{{ $pembelian->jumlah }}" required>
            </div>
            
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" value="{{ $pembelian->harga }}" required>
            </div>
            
            <button type="submit" class="btn-primary">Update</button>
        </form>

        <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Hapus</button>
        </form>
    </div>
</body>
</html>
@endsection

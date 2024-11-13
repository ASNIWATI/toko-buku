@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Toko Buku Selasih</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            color: #34495e;
            font-size: 2em;
            margin-top: 20px;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 1.2em;
            line-height: 1.5;
            text-align: justify;
        }

        .content-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 20px;
        }

        .feature {
            background-color: #ecf0f1;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            text-align: center;
        }

        .feature h3 {
            margin: 0;
            color: #2980b9;
        }

        .feature p {
            margin: 5px 0 0;
            color: #7f8c8d;
        }

        
        

        .btn {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="promo-banner">
    </div>

    <div class="content-container">
        <h1>Selamat Datang di Toko Buku Selasih</h1>
        <p>Gunakan menu di sebelah kiri untuk mengakses fitur-fitur pada sistem ini.</p>

        <hr>

        <h2>Konten Home</h2>
        <p>Ini adalah halaman utama di dalam dashboard. Di sini, pengguna dapat melihat informasi umum dan ringkasan fitur yang tersedia di toko buku Selasih.</p>
        <p>Informasi tambahan bisa ditambahkan di sini, seperti pengumuman, promo buku terbaru, atau update stok barang.</p>

        

</body>
</html>
@endsection

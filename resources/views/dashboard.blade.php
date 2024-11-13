<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title> <!-- Bagian ini dinamis, akan berubah per halaman -->
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2c3e50;
            padding-top: 20px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar h2 {
            color: white;
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 15px;
            text-align: left;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a:hover {
            background-color: #34495e;
            border-radius: 5px;
            padding: 15px;
        }
        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .header {
            background-color: #34495e;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: calc(100% - 250px);
            top: 0;
            left: 250px;
            z-index: 100;
        }
       /* Tombol Logout */
       .logout-button {
            width: 100%;
            text-align: center;
            padding: 15px;
            font-size: 18px;
            color: white;
            background-color: #e74c3c;
            border: none;
            cursor: pointer;
            margin-top: auto; /* Menempatkan tombol di bawah */
        }
        .logout-button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
   <!-- Sidebar -->
<div class="sidebar">
    <h2>Dashboard</h2>
    <ul>
        @if(auth()->user()->hasRole('kasir'))
            <li><a href="{{ url('/home') }}">🏠 Home</a></li>
            <li><a href="{{ route('penjualan.index') }}">📊 Laporan Penjualan</a></li>
        @elseif(auth()->user()->hasRole('owner'))
            <li><a href="{{ url('/home') }}">🏠 Home</a></li>
            <li><a href="{{ route('laporan.laba-kotor') }}">💵 Hitung Laba</a></li>
            <li><a href="{{ route('penjualan.index') }}">📊 Laporan Penjualan</a></li>
            <li><a href="{{ route('pembelian.index') }}">📝 Data Pembelian</a></li>
        @endif
    </ul>
    
    <!-- Form Logout -->
    <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
        @csrf
        <button type="submit" class="logout-button">Logout</button>
    </form>
</div>


    <!-- Header -->
    <div class="header">
        <h1>@yield('title')</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content') <!-- Bagian ini akan diisi oleh konten spesifik tiap halaman -->
    </div>
</body>
</html>
@if(auth()->user()->hasRole('owner'))
    <h1>Welcome, Owner!</h1>
    <p>Konten khusus untuk Owner</p>
@elseif(auth()->user()->hasRole('kasir'))
    <h1>Welcome, Kasir!</h1>
    <p>Konten khusus untuk Kasir</p>
@endif
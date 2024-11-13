<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
            justify-content: space-between;
            transition: width 0.3s; /* Animasi untuk membuka/menutup */
            overflow: hidden;
        }
        .sidebar.closed {
            width: 0;
            padding-top: 20px; /* Menjaga padding agar tetap ada saat ditutup */
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
            transition: margin-left 0.3s;
        }
        .main-content.sidebar-closed {
            margin-left: 0;
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
            transition: left 0.3s;
        }
        .header.sidebar-closed {
            left: 0;
            width: 100%;
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
        /* Tombol toggle */
        .sidebar-toggle {
            position: fixed;
            top: 10px;
            left: 250px;
            background-color: #34495e;
            color: white;
            border: none;
            cursor: pointer;
            padding: 7px;
            z-index: 101;
            transition: left 0.3s;
        }
        .sidebar-toggle.closed {
            left: 0;
        }
    </style>
</head>
<body>
    <button class="sidebar-toggle" id="sidebarToggle" onclick="toggleSidebar()">☰</button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <ul>
            <li><a href="{{ url('/home') }}">🏠 Home</a></li>
            <li><a href="{{ route('pembelian.index') }}">📝 Data Pembelian</a></li>
            <li><a href="{{ route('penjualan.index') }}">📊 Laporan Penjualan</a></li>
            <li><a href="{{ route('laporan.laba-kotor') }}">💵 Hitung Laba</a></li>
        </ul>

        <!-- Form Logout -->
        <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>

    <!-- Header -->
    <div class="header" id="header">
        <h1>@yield('title')</h1>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        @yield('content')
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const header = document.getElementById('header');
            const toggleButton = document.getElementById('sidebarToggle');

            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('sidebar-closed');
            header.classList.toggle('sidebar-closed');
            toggleButton.classList.toggle('closed');
        }
    </script>
</body>
</html>

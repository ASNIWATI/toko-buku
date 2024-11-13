@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mt-4">Laporan Laba Kotor</h1>

    <style>
        /* Gaya untuk form input */
        form {
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-weight: bold;
        }

        form select, form button {
            margin-top: 8px;
        }

        /* Gaya untuk tabel hasil */
        .card {
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            font-size: 18px;
            font-weight: bold;
        }

        .table {
            margin-top: 10px;
        }

        .table th {
            width: 50%;
            font-weight: bold;
            background-color: #f0f0f0;
        }

        .table td {
            font-weight: bold;
            color: #333;
        }

        /* Gaya untuk tombol lihat laporan */
        button[type="submit"] {
            font-size: 16px;
            padding: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Gaya untuk judul */
        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
    </style>

    <!-- Form untuk memilih bulan dan tahun -->
    <form action="{{ route('laporan.laba-kotor') }}" method="GET" class="my-4">
        <div class="row">
            <div class="col-md-4">
                <label for="bulan">Pilih Bulan:</label>
                <select name="bulan" id="bulan" class="form-control">
                    <option value="">-- Semua Bulan --</option>
                    @for ($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}" {{ request('bulan') == $i ? 'selected' : '' }}>
                            {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4">
                <label for="tahun">Pilih Tahun:</label>
                <select name="tahun" id="tahun" class="form-control">
                    <option value="">-- Semua Tahun --</option>
                    @for ($year = date('Y'); $year >= 2000; $year--)
                        <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>
                            {{ $year }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="col-md-4 align-self-end">
                <button type="submit" class="btn btn-primary w-100">Lihat Laporan</button>
            </div>
        </div>
    </form>

    <!-- Tabel hasil perhitungan laba kotor -->
    <div class="card mt-4">
        <div class="card-header text-center bg-primary text-white">
            Hasil Laporan Laba Kotor
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                <th>Total Pembelian</th>
                <td>Rp {{ number_format($totalPembelian, 0, ',', '.') }}</td>
                   
                </tr>
                
                <tr>
                <th>Total Penjualan</th>
                <td>Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Laba Kotor</th>
                    <td>Rp {{ number_format($labaKotor, 0, ',', '.') }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

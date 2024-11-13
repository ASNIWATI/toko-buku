<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $table = 'pembelian';

    protected $fillable = [
        'supplier',
        'tanggal_pembelian',
        'barang',
        'jumlah',
        'harga',
        'total_harga',
    ];

    public function totalPerBulan($bulan, $tahun)
{
    return $this->whereMonth('tanggal', $bulan)
                ->whereYear('tanggal', $tahun)
                ->sum('total_harga');
}

public function totalPerTahun($tahun)
{
    return $this->whereYear('tanggal', $tahun)->sum('total_harga');
}
}

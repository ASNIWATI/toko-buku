<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $fillable = [
        'customer',
        'tanggal_penjualan',
        'barang',
        'jumlah',
        'harga',
        'total_harga',
    ];
}

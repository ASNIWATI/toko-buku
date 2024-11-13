<?php

// App\Models\User.php (atau App\Models\Kasir.php)
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;  // Pastikan trait ini di-import

class User extends Model  // Atau Kasir jika menggunakan model Kasir
{
    use HasFactory, HasRoles;  // Pastikan trait HasRoles ditambahkan di sini

    // Properti dan metode lainnya...
}

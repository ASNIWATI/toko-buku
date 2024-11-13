<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Anda dapat menambahkan data yang ingin ditampilkan di view
        $data = [
            'title' => 'Beranda',
            'description' => 'Selamat datang di halaman beranda aplikasi kami.',
        ];

        return view('home', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mendapatkan data user yang sedang login
        return view('profile.index', compact('user')); // Mengirim data user ke view
    }
}

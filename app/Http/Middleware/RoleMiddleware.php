<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Memeriksa apakah pengguna memiliki role yang sesuai
        if (!$request->user() || !$request->user()->hasRole($role)) {
            // Jika tidak, arahkan ke halaman akses ditolak
            return redirect()->route('access.denied'); // Ganti dengan route sesuai kebutuhan
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna yang sedang login memiliki role 'admin'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request); // Lanjutkan jika role adalah admin
        }

        // Redirect ke halaman lain jika bukan admin
        return redirect('/dashboard')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}


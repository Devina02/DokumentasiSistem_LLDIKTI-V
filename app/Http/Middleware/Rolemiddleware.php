<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Periksa apakah pengguna sudah login
        if (!Auth::check()) {
            // Redirect ke login jika belum login
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Periksa apakah pengguna memiliki role yang sesuai
        if (Auth::user()->role !== $role) {
            // Redirect jika role tidak sesuai
            return redirect()->route('login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Jika validasi lolos, lanjutkan ke request berikutnya
        return $next($request);
    }
}

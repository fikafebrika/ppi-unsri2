<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifikatorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Memeriksa apakah pengguna telah login dan merupakan bagian dari tabel "admins"
        if (auth()->guard('verifikator')->check()) {
            return $next($request);
        }

        // Jika tidak, arahkan pengguna ke halaman login
        return redirect('/verifikator/login');
    }
}

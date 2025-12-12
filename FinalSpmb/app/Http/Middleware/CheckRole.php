<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  ...$roles  (Variadic parameter untuk menerima banyak role)
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // 1. Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // 2. Cek apakah role user ada di dalam daftar yang diizinkan
        // Contoh pemakaian di route: middleware('role:admin,petugas')
        if (in_array($user->role, $roles)) {
            return $next($request);
        }

        // 3. Jika role tidak cocok
        // Jika user adalah siswa yang mencoba masuk halaman admin, lempar 403 atau redirect
        if ($user->role === 'student') { // asumsikan 'student' atau 'siswa' di DB
            return redirect()->route('siswa.index')->with('error', 'Anda tidak memiliki akses ke halaman tersebut.');
        }

        // Default 403 Forbidden
        return abort(403, 'Akses Ditolak. Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        // 2. Proses Autentikasi
        // Auth::attempt akan otomatis mengecek hash password di database
        if (Auth::attempt($credentials)) {

            // 3. Regenerasi Session (Mencegah Session Fixation Attack)
            $request->session()->regenerate();

            // 4. Cek Role dan Redirect
            $user = Auth::user();

            if ($user->role === 'admin') {
                // Arahkan ke Dashboard Panitia/Admin
                // Pastikan route 'admin.dashboard' atau 'settings.index' sudah dibuat
                return redirect()->intended(route('petugas.dashboard'));
            }

            if ($user->role === 'student') {
                // Arahkan ke Dashboard Siswa
                // Pastikan route 'student.dashboard' sudah dibuat
                return redirect()->intended(route('siswa.index'));
            }
            return redirect('/');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput();
    }

    // Fungsi Logout (Opsional, biasanya satu paket)
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}

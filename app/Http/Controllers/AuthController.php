<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input form login
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial user
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Ambil data user yang login
            $user = Auth::user();

            // Periksa role user dan arahkan ke dashboard yang sesuai
            if ($user->role == 'superadmin') {
                return redirect()->route('superadmin.dashboard');
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }
            if ($user->role == 'superadmin') {
                return redirect()->route('superadmin.dokumensuperadmin');
            } elseif ($user->role == 'admin') {
                return redirect()->route('dokumen');
            }
        }

        // Jika login gagal
        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    public function showLoginForm()
    {
        return view('home'); // Sesuaikan dengan nama view yang benar
    }

    public function logout(Request $request)
    {
        // Ambil user yang sedang login (opsional, jika diperlukan)
        $user = Auth::user();

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil.');
    }

}

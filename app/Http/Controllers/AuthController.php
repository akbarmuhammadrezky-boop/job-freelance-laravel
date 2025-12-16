<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // 1. TAMPILKAN FORM LOGIN
    public function showLoginForm()
    {
        return view('login'); // Pastikan Anda punya file resources/views/login.blade.php
    }

    // 2. PROSES LOGIN (PERBAIKAN UTAMA DI SINI)
    // Perhatikan: Harus ada (Request $request) di dalam kurung
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba login
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Jika sukses, arahkan ke dashboard user atau home
            // (Opsional) Cek role untuk redirect beda halaman
            if (Auth::user()->role === 'Employer') {
                return redirect()->route('home')->with('success', 'Selamat datang, Employer!');
            }
            
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // 3. PROSES REGISTER (PENDAFTARAN)
    // Pastikan ini juga ada (Request $request)
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'Freelancer' // Default role
        ]);

        // Setelah daftar, langsung arahkan ke login
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    // 4. PROSES LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
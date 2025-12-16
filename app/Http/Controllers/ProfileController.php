<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // 1. Menampilkan Halaman Profil (yang sudah ada)
    public function index()
    {
        return view('profile'); // Pastikan nama file view profil Anda 'profile.blade.php'
    }

    // 2. Menampilkan Form Edit Profil
    public function edit()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    // 3. Proses Update Data ke Database
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            // 'role' => 'required', // Buka komentar ini jika role boleh diedit
        ]);

        // Simpan perubahan
        // Kita gunakan query manual update agar aman jika $user->update() bermasalah
        User::where('id', $user->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
    }
}
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\User;

// Import Controller
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- 1. HALAMAN PUBLIK ---
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/jobs', [PageController::class, 'jobs'])->name('jobs.index');

// Rute Dinamis Kategori (contoh: /jobs/virtual)
Route::get('/jobs/{category}', [JobController::class, 'indexByCategory'])
    ->where('category', 'entry-level|micro|virtual|writing|testing|designing|marketing|managerial|developer|finance|coaching|other')
    ->name('jobs.category');

// Rute Detail Pekerjaan
Route::get('/job-detail/{id}', [JobController::class, 'show'])->name('jobs.show');

// Halaman Statis Lainnya
Route::get('/candidates', function () { return view('candidates-list'); })->name('candidates.index');
Route::get('/packages', function () { return view('packages'); })->name('packages.index');


// --- 2. AUTHENTICATION (LOGIN, LOGOUT, REGISTER) ---
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Pendaftaran (Register)
// PENTING: Nama rute ini harus 'apply' agar tombol "Lamar Sekarang" bekerja
Route::get('/apply', function () {
    return view('apply'); 
})->name('apply');

// Proses Simpan Akun Baru
Route::post('/apply', [AuthController::class, 'register'])->name('register.submit');


// --- 3. HALAMAN KHUSUS USER LOGIN (PROFIL & DASHBOARD) ---
Route::middleware('auth')->group(function () {
    
    // Rute Profil (Ini yang akan dipanggil dari Navbar)
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    // Dashboard
    Route::get('/dashboard/client', [PageController::class, 'clientDashboard'])->name('dashboard.client');
    Route::get('/dashboard/freelancer', [PageController::class, 'freelancerDashboard'])->name('dashboard.freelancer');

    // Fitur Employer (Post Job)
    Route::get('/post-job', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/post-job', [JobController::class, 'store'])->name('jobs.store');
});


// =========================================================================
// RUTE DARURAT (Maintenance)
// =========================================================================
Route::get('/buat-akun-darurat', function () {
    try {
        if (User::where('email', 'akbarmuhammadrezky@gmail.com')->exists()) return "User sudah ada!";
        User::create(['name' => 'M. Rezky Akbar', 'email' => 'akbarmuhammadrezky@gmail.com', 'password' => Hash::make('12345678'), 'role' => 'Freelancer']);
        return "BERHASIL! User dibuat.";
    } catch (\Exception $e) { return "Gagal: " . $e->getMessage(); }
});

Route::get('/buat-akun-employer', function () {
    try {
        if (User::where('email', 'employer@example.com')->exists()) return "Akun Employer sudah ada!";
        User::create(['name' => 'HRD Perusahaan A', 'email' => 'employer@example.com', 'password' => Hash::make('12345678'), 'role' => 'Employer']);
        return "BERHASIL! Akun Employer dibuat.";
    } catch (\Exception $e) { return "Gagal: " . $e->getMessage(); }
});

Route::get('/perbaiki-database-sekarang', function () {
    try {
        Schema::dropIfExists('jobs');
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); $table->string('title'); $table->string('company'); $table->string('location')->nullable(); $table->string('category'); $table->string('job_type')->nullable(); $table->string('salary')->nullable(); $table->text('description'); $table->unsignedBigInteger('user_id'); $table->timestamps();
        });
        return "BERHASIL! Database jobs diperbaiki.";
    } catch (\Exception $e) { return "Gagal: " . $e->getMessage(); }
});
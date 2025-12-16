@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">
                    
                    <h3 class="mb-4 text-center">Buat Akun Baru</h3>
                    <p class="text-muted text-center mb-4">Mulai melamar pekerjaan dan ditemukan oleh klien.</p>

                    {{-- Form Pendaftaran --}}
                    <form action="{{ route('register.submit') }}" method="POST">
                        @csrf {{-- Token keamanan wajib --}}

                        {{-- Nama Lengkap --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Contoh: Muhammad Rezky Akbar" required>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label">Alamat Email</label>
                            <input type="email" name="email" class="form-control" placeholder="email@contoh.com" required>
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Minimal 8 karakter" required>
                        </div>

                        {{-- Konfirmasi Password --}}
                        {{-- PENTING: name harus 'password_confirmation' agar fitur validasi Laravel bekerja --}}
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password" required>
                        </div>

                        {{-- Kategori Keahlian (Opsional / Tampilan Saja Dulu) --}}
                        <div class="mb-4">
                            <label class="form-label">Kategori Keahlian Utama</label>
                            <select name="expertise" class="form-select">
                                <option value="">-- Pilih Keahlian --</option>
                                <option value="IT">IT & Software</option>
                                <option value="Design">Desain Grafis</option>
                                <option value="Writing">Penulisan</option>
                                <option value="Marketing">Pemasaran</option>
                                <option value="Other">Lainnya</option>
                            </select>
                            <div class="form-text text-muted">Data ini akan disimpan di profil Anda nanti.</div>
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Buat Akun Saya</button>
                        </div>

                    </form>

                    <div class="text-center mt-4">
                        Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Masuk di sini</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
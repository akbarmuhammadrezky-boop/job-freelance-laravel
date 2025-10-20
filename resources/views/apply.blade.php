@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        {{-- Buat kolom agar tidak terlalu lebar di layar besar --}}
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h2 class="h4 mb-0">Daftar sebagai Kandidat (Freelancer)</h2>
                </div>
                <div class="card-body p-4 p-md-5">

                    <p class="text-muted">Buat akun Anda untuk mulai melamar pekerjaan dan ditemukan oleh klien.</p>

                    {{-- 
                      PENTING: 
                      Atribut 'action' akan menentukan ke mana data ini dikirim.
                      Untuk saat ini, kita biarkan '#'
                    --}}
                    <form action="#" method="POST">
                        @csrf {{-- Token keamanan wajib untuk form Laravel --}}

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="contoh@email.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <div class="mb-4">
                            <label for="category" class="form-label">Kategori Keahlian Utama</label>
                            <select class="form-select" id="category" name="category">
                                <option selected disabled value="">Pilih keahlian Anda...</option>
                                <option value="writing">Writing Jobs</option>
                                <option value="designing">Designing Jobs</option>
                                <option value="developer">Developer Jobs</option>
                                <option value="virtual">Virtual Jobs</option>
                                <option value="marketing">Marketing Jobs</option>
                                <option value="testing">Testing Jobs</option>
                                <option value="finance">Finance Jobs</option>
                                <option value="coaching">Coaching Jobs</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <div class="d-grid"> {{-- Tombol full-width --}}
                            <button type="submit" class="btn btn-primary btn-lg">Buat Akun Saya</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
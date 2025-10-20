@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        {{-- Buat kolom agar tidak terlalu lebar di layar besar --}}
        <div class="col-md-8 mx-auto"> 
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h2 class="h4 mb-0">Posting Lowongan Pekerjaan Baru</h2>
                </div>
                <div class="card-body p-4 p-md-5">

                    {{-- 
                      PENTING: 
                      Atribut 'action' akan menentukan ke mana data ini dikirim.
                      Untuk saat ini, kita biarkan '#' karena kita belum membuat logika
                      untuk MENYIMPAN datanya. Kita baru membuat TAMPILAN. 
                    --}}
                    <form action="#" method="POST">
                        @csrf {{-- Token keamanan wajib untuk form Laravel --}}

                        <div class="mb-3">
                            <label for="job_title" class="form-label">Judul Pekerjaan</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Contoh: Web Developer (Laravel)" required>
                        </div>

                        <div class="mb-3">
                            <label for="company_name" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Contoh: PT. Maju Jaya" required>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Contoh: Jakarta, Remote" required>
                        </div>

                        <div class="mb-3">
                            <label for="job_type" class="form-label">Tipe Pekerjaan</label>
                            <select class="form-select" id="job_type" name="job_type">
                                <option value="freelance">Freelance</option>
                                <option value="full_time">Full-time</option>
                                <option value="part_time">Part-time</option>
                                <option value="contract">Kontrak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="salary" class="form-label">Gaji (Opsional)</label>
                            <input type="text" class="form-control" id="salary" name="salary" placeholder="Contoh: Rp 5.000.000 - Rp 8.000.000">
                            <div class="form-text">Bisa dikosongkan jika rahasia.</div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Tuliskan detail pekerjaan, kualifikasi, dan tanggung jawab..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="how_to_apply" class="form-label">Cara Melamar</label>
                            <input type="text" class="form-control" id="how_to_apply" name="how_to_apply" placeholder="Contoh: Kirim CV ke email@perusahaan.com">
                            <div class="form-text">Bisa berupa email atau link website.</div>
                        </div>

                        <div class="text-end"> {{-- Agar tombol di sebelah kanan --}}
                            <button type="submit" class="btn btn-primary btn-lg px-5">Posting Pekerjaan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
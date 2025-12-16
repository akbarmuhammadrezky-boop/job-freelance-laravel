@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto"> 
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h2 class="h4 mb-0">Posting Lowongan Pekerjaan Baru</h2>
                </div>
                <div class="card-body p-4 p-md-5">

                    {{-- 
                       PERBAIKAN 1: 
                       Action diarahkan ke route 'jobs.store' untuk proses penyimpanan.
                    --}}
                    <form action="{{ route('jobs.store') }}" method="POST">
                        @csrf 

                        {{-- Judul Pekerjaan --}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Pekerjaan</label>
                            {{-- PERBAIKAN 2: name="title" (sesuai controller) --}}
                            <input type="text" class="form-control" id="title" name="title" placeholder="Contoh: Web Developer (Laravel)" required>
                        </div>

                        {{-- Nama Perusahaan --}}
                        <div class="mb-3">
                            <label for="company" class="form-label">Nama Perusahaan</label>
                            {{-- PERBAIKAN 3: name="company" (sesuai controller) --}}
                            <input type="text" class="form-control" id="company" name="company" placeholder="Contoh: PT. Maju Jaya" required>
                        </div>

                        {{-- Lokasi --}}
                        <div class="mb-3">
                            <label for="location" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Contoh: Jakarta, Remote" required>
                        </div>

                        {{-- 
                           PERBAIKAN 4 (PENTING): 
                           Input Kategori ditambahkan di sini agar sistem tahu pekerjaan ini masuk ke mana.
                           Value-nya harus huruf kecil (entry-level, micro, virtual, dll) sesuai kode database.
                        --}}
                        <div class="mb-3">
                            <label for="category" class="form-label fw-bold text-primary">Kategori Pekerjaan (Wajib)</label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="entry-level">Entry Level Jobs</option>
                                <option value="micro">Micro Jobs</option>
                                <option value="virtual">Virtual Jobs</option>
                                <option value="writing">Writing Jobs</option>
                                <option value="testing">Testing Jobs</option>
                                <option value="designing">Designing Jobs</option>
                                <option value="marketing">Marketing Jobs</option>
                                <option value="managerial">Managerial Jobs</option>
                                <option value="developer">Developer Jobs</option>
                                <option value="finance">Finance Jobs</option>
                                <option value="coaching">Coaching Jobs</option>
                                <option value="other">Other Jobs</option>
                            </select>
                            <div class="form-text">Pilihan ini menentukan di halaman mana pekerjaan akan muncul.</div>
                        </div>

                        {{-- Tipe Pekerjaan --}}
                        <div class="mb-3">
                            <label for="job_type" class="form-label">Tipe Pekerjaan</label>
                            <select class="form-select" id="job_type" name="job_type">
                                <option value="Freelance">Freelance</option>
                                <option value="Fulltime">Full-time</option>
                                <option value="Part-time">Part-time</option>
                                <option value="Contract">Kontrak</option>
                            </select>
                        </div>

                        {{-- Gaji --}}
                        <div class="mb-3">
                            <label for="salary" class="form-label">Gaji (Opsional)</label>
                            <input type="text" class="form-control" id="salary" name="salary" placeholder="Contoh: Rp 5.000.000 - Rp 8.000.000">
                        </div>

                        {{-- Deskripsi --}}
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Tuliskan detail pekerjaan, kualifikasi, dan tanggung jawab..." required></textarea>
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="text-end"> 
                            <button type="submit" class="btn btn-primary btn-lg px-5">Posting Pekerjaan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
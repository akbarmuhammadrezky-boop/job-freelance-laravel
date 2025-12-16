@extends('layouts.app')

@section('content')
<div class="container py-5">
    
    {{-- Tombol Kembali --}}
    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>
    
    {{-- Header Halaman --}}
    <div class="text-center mb-5">
        {{-- Judul Dinamis: Mengambil nama kategori dari Controller (misal: Entry-level) --}}
        <h1 class="fw-bold">Pekerjaan {{ ucfirst($category ?? 'Entry Level') }}</h1>
        <p class="lead text-muted">Temukan peluang terbaru yang baru saja diposting.</p>
        <p class="col-md-8 mx-auto">
            Daftar pekerjaan di bawah ini diambil langsung dari database berdasarkan kategori yang Anda pilih.
        </p>
    </div>

    {{-- LOGIKA LOOPING DATA DARI DATABASE --}}
    <div class="row g-4 justify-content-center">

        {{-- 1. CEK: Apakah database kosong untuk kategori ini? --}}
        @if($jobs->isEmpty())
            <div class="col-md-8 text-center">
                <div class="alert alert-info py-5 shadow-sm">
                    <i class="fa-solid fa-folder-open fa-3x mb-3 text-info"></i>
                    <h4>Belum ada lowongan di kategori ini.</h4>
                    <p>Jadilah yang pertama memposting pekerjaan di sini!</p>
                    <a href="{{ route('jobs.create') }}" class="btn btn-primary mt-2">
                        <i class="fa-solid fa-plus"></i> Posting Pekerjaan
                    </a>
                </div>
            </div>

        {{-- 2. JIKA ADA DATA: Lakukan Looping (@foreach) --}}
        @else
            @foreach($jobs as $job)
            <div class="col-lg-4 col-md-6">
                {{-- Link menuju halaman Detail (mengirim ID pekerjaan) --}}
                <a href="{{ route('jobs.show', $job->id) }}" class="category-card-link text-decoration-none">
                    
                    <div class="category-card text-center p-4 h-100 d-flex flex-column shadow-sm">
                        {{-- Ikon --}}
                        <div class="card-icon mb-3" style="background-color: #eef2ff; color: #4338ca;"> 
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        
                        {{-- Judul Pekerjaan (Dari Database) --}}
                        <h4 class="mt-2 text-dark fw-bold">{{ $job->title }}</h4>
                        
                        {{-- Nama Perusahaan --}}
                        <span class="badge bg-light text-dark mb-3 border">{{ $job->company }}</span>

                        {{-- Lokasi & Gaji --}}
                        <div class="text-muted small mb-3">
                            <p class="mb-1"><i class="fa-solid fa-location-dot me-1"></i> {{ $job->location }}</p>
                            <p class="mb-0 text-success fw-bold"><i class="fa-solid fa-money-bill me-1"></i> {{ $job->salary ?? 'Nego' }}</p>
                        </div>

                        {{-- Deskripsi Singkat (Dibatasi 60 karakter) --}}
                        <p class="card-desc text-secondary flex-grow-1">
                            {{ Str::limit($job->description, 80) }}
                        </p>

                        {{-- Tombol Detail --}}
                        <div class="mt-3">
                            <button class="btn btn-outline-primary w-100 rounded-pill">Lihat Detail</button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        @endif

    </div>
</div>
@endsection
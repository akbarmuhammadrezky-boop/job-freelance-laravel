@extends('layouts.app')

@section('content')
<div class="container py-5">
    
    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>
    
    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Entry-Level Terbuka di Seluruh Dunia</h1>
        <p class="lead text-muted">Keanggotaan, Pelatihan Gratis, & Penempatan Terjamin!</p>
        <p class="col-md-8 mx-auto">
            Sifat dari pekerjaan entry-level adalah pekerjaan yang tidak memerlukan banyak pengalaman. Posisi ini biasanya digunakan untuk mendapatkan pengalaman di bidang atau industri yang diinginkan.
        </p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Entry Level</h3>

    {{-- Kita gunakan col-lg-4 agar 3 kartu per baris --}}
    <div class="row g-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-game"> <i class="fa-solid fa-gamepad"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Bermain Game</h4>
                    <p class="card-desc">Mainkan game baru, temukan bug, dan berikan ulasan.</p>
                    <div class="btn btn-category btn-game">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-video"> <i class="fa-solid fa-video"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Menonton Video</h4>
                    <p class="card-desc">Tonton video atau iklan untuk keperluan riset pasar.</p>
                    <div class="btn btn-category btn-video">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-email"> <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Membaca Email</h4>
                    <p class="card-desc">Baca email promosi dan berikan tanggapan.</p>
                    <div class="btn btn-category btn-email">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-captcha"> <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Menyelesaikan Captcha</h4>
                    <p class="card-desc">Selesaikan tugas captcha untuk membantu sistem data.</p>
                    <div class="btn btn-category btn-captcha">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-copy"> <i class="fa-solid fa-copy"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Salin Tempel</h4>
                    <p class="card-desc">Pindahkan data dari satu format ke format lain.</p>
                    <div class="btn btn-category btn-copy">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-ad"> <i class="fa-solid fa-ad"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Periklanan</h4>
                    <p class="card-desc">Klik iklan atau posting materi promosi sederhana.</p>
                    <div class="btn btn-category btn-ad">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Manajerial Global</h1>
        <p class="lead text-muted">Keanggotaan, Pelatihan Gratis, & Penempatan Terjamin!</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Manajerial</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg col-md-4 col-6"> {{-- Trik agar 5 per baris di layar besar --}}
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-accounts-manager">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h4 class="mt-3">Manajer Akun</h4>
                    <p class="card-desc">Mengelola hubungan dan akun klien.</p>
                    <div class="btn btn-category btn-accounts-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-office-manager">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <h4 class="mt-3">Manajer Kantor</h4>
                    <p class="card-desc">Mengawasi operasi harian kantor.</p>
                    <div class="btn btn-category btn-office-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-program-manager">
                        <i class="fa-solid fa-bars-progress"></i>
                    </div>
                    <h4 class="mt-3">Manajer Program</h4>
                    <p class="card-desc">Mengelola beberapa proyek terkait.</p>
                    <div class="btn btn-category btn-program-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-sales-manager">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="mt-3">Manajer Penjualan</h4>
                    <p class="card-desc">Memimpin dan membimbing tim penjualan.</p>
                    <div class="btn btn-category btn-sales-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-social-manager">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <h4 class="mt-3">Manajer Media Sosial</h4>
                    <p class="card-desc">Mengelola kehadiran merek di media sosial.</p>
                    <div class="btn btn-category btn-social-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-dev-manager">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="mt-3">Manajer Pengembangan</h4>
                    <p class="card-desc">Memimpin tim pengembang perangkat lunak.</p>
                    <div class="btn btn-category btn-dev-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-reputation-manager">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h4 class="mt-3">Manajer Reputasi Online</h4>
                    <p class="card-desc">Memantau dan mengelola citra merek online.</p>
                    <div class="btn btn-category btn-reputation-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-portfolio-manager">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h4 class="mt-3">Manajer Portofolio</h4>
                    <p class="card-desc">Mengelola aset investasi atau portofolio proyek.</p>
                    <div class="btn btn-category btn-portfolio-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-project-manager">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h4 class="mt-3">Manajer Proyek</h4>
                    <p class="card-desc">Merencanakan dan mengeksekusi proyek.</p>
                    <div class="btn btn-category btn-project-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-risk-manager">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h4 class="mt-3">Manajer Risiko</h4>
                    <p class="card-desc">Mengidentifikasi dan mitigasi risiko bisnis.</p>
                    <div class="btn btn-category btn-risk-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
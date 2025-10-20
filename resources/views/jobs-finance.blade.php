@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Finansial Global</h1>
        <p class="lead text-muted">Keanggotaan, Pelatihan Gratis, & Penempatan Terjamin!</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Finansial</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-crypto">
                        <i class="fa-brands fa-btc"></i>
                    </div>
                    <h4 class="mt-3">Perdagangan Kripto</h4>
                    <p class="card-desc">Memperdagangkan aset kripto di berbagai platform.</p>
                    <div class="btn btn-category btn-crypto">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-advisor">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="mt-3">Penasihat Keuangan</h4>
                    <p class="card-desc">Memberikan nasihat keuangan kepada klien.</p>
                    <div class="btn btn-category btn-advisor">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-f-analyst">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h4 class="mt-3">Analis Keuangan</h4>
                    <p class="card-desc">Menganalisis data keuangan untuk bisnis.</p>
                    <div class="btn btn-category btn-f-analyst">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-banker">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <h4 class="mt-3">Bankir Investasi</h4>
                    <p class="card-desc">Membantu perusahaan mengumpulkan modal.</p>
                    <div class="btn btn-category btn-banker">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-inv-manager">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h4 class="mt-3">Manajer Investasi</h4>
                    <p class="card-desc">Mengelola portofolio investasi atas nama klien.</p>
                    <div class="btn btn-category btn-inv-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-port-manager">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                    <h4 class="mt-3">Manajer Portofolio</h4>
                    <p class="card-desc">Membuat dan mengelola koleksi investasi.</p>
                    <div class="btn btn-category btn-port-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-actuary">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h4 class="mt-3">Aktuaris</h4>
                    <p class="card-desc">Menganalisis risiko keuangan menggunakan statistik.</p>
                    <div class="btn btn-category btn-actuary">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-credit-analyst">
                        <i class="fa-solid fa-credit-card"></i>
                    </div>
                    <h4 class="mt-3">Analis Kredit</h4>
                    <p class="card-desc">Mengevaluasi kelayakan kredit peminjam.</p>
                    <div class="btn btn-category btn-credit-analyst">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-f-risk-manager">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <h4 class="mt-3">Manajer Risiko</h4>
                    <p class="card-desc">Mengidentifikasi dan mitigasi risiko finansial.</p>
                    <div class="btn btn-category btn-f-risk-manager">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-securities">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                    <h4 class="mt-3">Pedagang Sekuritas</h4>
                    <p class="card-desc">Membeli dan menjual sekuritas atas nama investor.</p>
                    <div class="btn btn-category btn-securities">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-stock">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="mt-3">Perdagangan Saham</h4>
                    <p class="card-desc">Membeli dan menjual saham di pasar modal.</p>
                    <div class="btn btn-category btn-stock">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-tax">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h4 class="mt-3">Konsultan Pajak</h4>
                    <p class="card-desc">Memberikan nasihat strategi dan kepatuhan pajak.</p>
                    <div class="btn btn-category btn-tax">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
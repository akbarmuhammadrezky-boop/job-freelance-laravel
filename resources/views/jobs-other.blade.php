@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Jelajahi Pekerjaan Freelance Online WFH Lainnya</h1>
    </div>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-receptionist">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h4 class="mt-3">Resepsionis Virtual</h4>
                    <p class="card-desc">Menangani panggilan masuk dan menjadwalkan janji temu.</p>
                    <div class="btn btn-category btn-receptionist">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-writing">
                        <i class="fa-solid fa-pencil-alt"></i>
                    </div>
                    <h4 class="mt-3">Penulisan Website</h4>
                    <p class="card-desc">Menulis konten untuk halaman-halaman website.</p>
                    <div class="btn btn-category btn-writing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-article">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Menulis</h4>
                    <p class="card-desc">Berbagai macam tugas penulisan artikel dan konten.</p>
                    <div class="btn btn-category btn-article">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-ghostwriting">
                        <i class="fa-solid fa-ghost"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Ghostwriting</h4>
                    <p class="card-desc">Menulis atas nama orang lain tanpa mengambil kredit.</p>
                    <div class="btn btn-category btn-ghostwriting">Lihat Detail</div>
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
                    <div class="card-icon icon-resume">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Resume</h4>
                    <p class="card-desc">Membantu orang membuat CV atau resume profesional.</p>
                    <div class="btn btn-category btn-resume">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-content">
                        <i class="fa-solid fa-file-word"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Konten</h4>
                    <p class="card-desc">Membuat konten web yang informatif dan menarik (SEO).</p>
                    <div class="btn btn-category btn-content">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-yoga">
                        <i class="fa-solid fa-person-praying"></i>
                    </div>
                    <h4 class="mt-3">Instruktur Yoga</h4>
                    <p class="card-desc">Mengajar kelas yoga untuk kebugaran fisik dan mental.</p>
                    <div class="btn btn-category btn-yoga">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-ebook">
                        <i class="fa-solid fa-book-open"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan E-Book</h4>
                    <p class="card-desc">Menulis buku digital tentang berbagai topik.</p>
                    <div class="btn btn-category btn-ebook">Lihat Detail</div>
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
                    <div class="card-icon icon-consultant">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <h4 class="mt-3">Konsultan Pemasaran</h4>
                    <p class="card-desc">Memberikan saran ahli tentang strategi pemasaran.</p>
                    <div class="btn btn-category btn-consultant">Lihat Detail</div>
                </div>
            </a>
        </div>

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

    </div>
</div>
@endsection
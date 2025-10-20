@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Pemasaran (Marketing Jobs)</h1>
        <p class="lead text-muted">Promosikan merek dan produk secara online.</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Pemasaran</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-content-marketing">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Konten</h4>
                    <p class="card-desc">Membuat konten berharga untuk menarik audiens.</p>
                    <div class="btn btn-category btn-content-marketing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-digital-marketing">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Digital</h4>
                    <p class="card-desc">Strategi pemasaran online yang komprehensif.</p>
                    <div class="btn btn-category btn-digital-marketing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-email-marketing">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Email</h4>
                    <p class="card-desc">Mengirim buletin dan promosi melalui email.</p>
                    <div class="btn btn-category btn-email-marketing">Lihat Detail</div>
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
                    <div class="card-icon icon-ppc">
                        <i class="fa-solid fa-hand-pointer"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran PPC</h4>
                    <p class="card-desc">Mengelola iklan berbayar (Pay-Per-Click) di Google/Meta.</p>
                    <div class="btn btn-category btn-ppc">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-seo">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran SEO</h4>
                    <p class="card-desc">Optimasi mesin pencari untuk meningkatkan peringkat.</p>
                    <div class="btn btn-category btn-seo">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-social">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Media Sosial</h4>
                    <p class="card-desc">Mengelola dan membuat konten untuk platform media sosial.</p>
                    <div class="btn btn-category btn-social">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-influencer">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Influencer</h4>
                    <p class="card-desc">Bekerja sama dengan influencer untuk promosi produk.</p>
                    <div class="btn btn-category btn-influencer">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-internet">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Internet</h4>
                    <p class="card-desc">Segala bentuk pemasaran yang dilakukan melalui internet.</p>
                    <div class="btn btn-category btn-internet">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-telemarketing">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Telemarketing</h4>
                    <p class="card-desc">Menghubungi calon pelanggan melalui telepon.</p>
                    <div class="btn btn-category btn-telemarketing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-video-marketing">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <h4 class="mt-3">Pemasaran Video</h4>
                    <p class="card-desc">Membuat dan mempromosikan konten video.</p>
                    <div class="btn btn-category btn-video-marketing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-analyst">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h4 class="mt-3">Analis Web</h4>
                    <p class="card-desc">Menganalisis data lalu lintas website untuk strategi.</p>
                    <div class="btn btn-category btn-analyst">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Pengujian (Testing Jobs)</h1>
        <p class="lead text-muted">Jelajahi Pekerjaan Pengujian Pengguna</p>
        <p class="col-md-8 mx-auto">
            Kami mencari individu yang tertarik pada teknologi dan pengalaman pengguna untuk menguji game, website, aplikasi, perangkat lunak, dan produk.
        </p>
    </div>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-game-testing">
                        <i class="fa-solid fa-gamepad"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Pengujian Game</h4>
                    <p class="card-desc">Mainkan game, cari bug, dan laporkan pengalaman Anda.</p>
                    <div class="btn btn-category btn-game-testing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-app-testing">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Pengujian Aplikasi</h4>
                    <p class="card-desc">Uji aplikasi seluler baru sebelum diluncurkan ke publik.</p>
                    <div class="btn btn-category btn-app-testing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-software-testing">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h4 class="mt-3">Pengujian Perangkat Lunak</h4>
                    <p class="card-desc">Pastikan perangkat lunak desktop berjalan lancar tanpa error.</p>
                    <div class="btn btn-category btn-software-testing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-website-testing">
                        <i class="fa-solid fa-window-maximize"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Pengujian Website</h4>
                    <p class="card-desc">Periksa fungsionalitas, tautan, dan tampilan website.</p>
                    <div class="btn btn-category btn-website-testing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-product-testing">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Pengujian Produk</h4>
                    <p class="card-desc">Berikan ulasan dan masukan untuk produk fisik atau digital baru.</p>
                    <div class="btn btn-category btn-product-testing">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
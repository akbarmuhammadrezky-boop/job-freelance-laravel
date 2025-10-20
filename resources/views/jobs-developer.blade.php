@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Web Developer Global</h1>
        <p class="lead text-muted">Keanggotaan, Pelatihan Gratis, & Penempatan Terjamin!</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Web Development</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-blockchain">
                        <i class="fa-solid fa-link"></i>
                    </div>
                    <h4 class="mt-3">Developer Blockchain</h4>
                    <p class="card-desc">Mengembangkan aplikasi terdesentralisasi (dApps).</p>
                    <div class="btn btn-category btn-blockchain">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-smart-contract">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <h4 class="mt-3">Developer Smart Contract</h4>
                    <p class="card-desc">Merancang dan mengaudit smart contract di blockchain.</p>
                    <div class="btn btn-category btn-smart-contract">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-software-dev">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h4 class="mt-3">Developer Perangkat Lunak</h4>
                    <p class="card-desc">Membangun aplikasi untuk desktop atau perangkat mobile.</p>
                    <div class="btn btn-category btn-software-dev">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-backend-dev">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <h4 class="mt-3">Developer Back End</h4>
                    <p class="card-desc">Mengelola logika sisi server, database, dan API.</p>
                    <div class="btn btn-category btn-backend-dev">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-fullstack-dev">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <h4 class="mt-3">Developer Full Stack</h4>
                    <p class="card-desc">Bekerja pada sisi front-end dan back-end aplikasi.</p>
                    <div class="btn btn-category btn-fullstack-dev">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
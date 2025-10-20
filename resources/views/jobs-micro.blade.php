@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Micro (Micro Jobs)</h1>
        <p class="lead text-muted">Tugas-tugas kecil yang dapat diselesaikan dengan cepat.</p>
        <p class="col-md-8 mx-auto">
            Pekerjaan mikro adalah tugas-tugas kecil dan sederhana yang dapat Anda lakukan secara online dari kenyamanan rumah Anda.
        </p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Micro</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-data-entry"> <i class="fa-solid fa-keyboard"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Entri Data</h4>
                    <p class="card-desc">Memasukkan data dari satu sumber ke sumber lain.</p>
                    <div class="btn btn-category btn-data-entry">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-form-filling"> <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Mengisi Formulir</h4>
                    <p class="card-desc">Mengisi formulir online dengan informasi yang disediakan.</p>
                    <div class="btn btn-category btn-form-filling">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-research"> <i class="fa-solid fa-search"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Riset Internet</h4>
                    <p class="card-desc">Mencari informasi spesifik secara online.</p>
                    <div class="btn btn-category btn-research">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-survey"> <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Survei</h4>
                    <p class="card-desc">Memberikan pendapat Anda melalui survei online.</p>
                    <div class="btn btn-category btn-survey">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-typing"> <i class="fa-solid fa-i-cursor"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Mengetik</h4>
                    <p class="card-desc">Mengetik ulang dokumen dari gambar atau audio.</p>
                    <div class="btn btn-category btn-typing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-scraping"> <i class="fa-solid fa-code-branch"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Web Scraping</h4>
                    <p class="card-desc">Mengumpulkan data dari berbagai website secara otomatis.</p>
                    <div class="btn btn-category btn-scraping">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
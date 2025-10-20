@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Menulis (Writing Jobs)</h1>
        <p class="lead text-muted">Ubah kata-kata Anda menjadi penghasilan.</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Menulis</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-article">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Artikel</h4>
                    <p class="card-desc">Menulis artikel untuk website, majalah, atau publikasi online.</p>
                    <div class="btn btn-category btn-article">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
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

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-copywriting">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Copywriting</h4>
                    <p class="card-desc">Menulis teks persuasif untuk iklan, penjualan, atau pemasaran.</p>
                    <div class="btn btn-category btn-copywriting">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
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

        <div class="col-lg-4 col-md-6">
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

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-blog">
                        <i class="fa-solid fa-blog"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Blog</h4>
                    <p class="card-desc">Menulis dan mengelola postingan untuk blog pribadi atau perusahaan.</p>
                    <div class="btn btn-category btn-blog">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-resume">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Resume</h4>
                    <p class="card-desc">Membantu orang membuat CV atau resume yang profesional.</p>
                    <div class="btn btn-category btn-resume">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-script">
                        <i class="fa-solid fa-clapperboard"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Naskah</h4>
                    <p class="card-desc">Menulis naskah untuk video YouTube, film, atau drama.</p>
                    <div class="btn btn-category btn-script">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-4 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-technical">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Penulisan Teknis</h4>
                    <p class="card-desc">Menulis dokumen kompleks seperti buku panduan atau SOP.</p>
                    <div class="btn btn-category btn-technical">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
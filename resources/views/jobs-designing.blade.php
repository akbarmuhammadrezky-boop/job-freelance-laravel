@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Desain (Designing Jobs)</h1>
        <p class="lead text-muted">Ekspresikan kreativitas Anda melalui desain visual.</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Desain</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-graphic-design">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Desain Grafis</h4>
                    <p class="card-desc">Membuat visual untuk media cetak dan digital.</p>
                    <div class="btn btn-category btn-graphic-design" src="detail-pekerjaan-design-grafis.php">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-photo-editing">
                        <i class="fa-solid fa-camera-retro"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Edit Foto</h4>
                    <p class="card-desc">Memperbaiki dan memanipulasi gambar secara profesional.</p>
                    <div class="btn btn-category btn-photo-editing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-video-editing">
                        <i class="fa-solid fa-film"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Edit Video</h4>
                    <p class="card-desc">Menggabungkan klip video, audio, dan grafis.</p>
                    <div class="btn btn-category btn-video-editing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-web-designing">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Desain Web</h4>
                    <p class="card-desc">Merancang tata letak visual untuk website.</p>
                    <div class="btn btn-category btn-web-designing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-animation">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Animasi</h4>
                    <p class="card-desc">Membuat grafis bergerak untuk video atau web.</p>
                    <div class="btn btn-category btn-animation">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-banner-designing">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Desain Banner</h4>
                    <p class="card-desc">Merancang banner iklan untuk kampanye online.</p>
                    <div class="btn btn-category btn-banner-designing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-logo-designing">
                        <i class="fa-solid fa-swatchbook"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Desain Logo</h4>
                    <p class="card-desc">Membuat identitas visual dan logo untuk merek.</p>
                    <div class="btn btn-category btn-logo-designing">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-multimedia">
                        <i class="fa-solid fa-photo-film"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Desain Multimedia</h4>
                    <p class="card-desc">Menggabungkan berbagai elemen media (teks, audio, video).</p>
                    <div class="btn btn-category btn-multimedia">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-digital-artist">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h4 class="mt-3">Seniman Digital</h4>
                    <p class="card-desc">Membuat karya seni dan ilustrasi secara digital.</p>
                    <div class="btn btn-category btn-digital-artist">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-frontend">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="mt-3">Desainer Front End</h4>
                    <p class="card-desc">Mendesain dan mengkodekan antarmuka pengguna website.</p>
                    <div class="btn btn-category btn-frontend">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-ux-ui">
                        <i class="fa-solid fa-object-group"></i>
                    </div>
                    <h4 class="mt-3">Desainer UX/UI</h4>
                    <p class="card-desc">Merancang pengalaman dan antarmuka pengguna aplikasi.</p>
                    <div class="btn btn-category btn-ux-ui">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
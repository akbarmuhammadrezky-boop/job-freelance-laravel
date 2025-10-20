@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Pelatihan (Coaching Jobs)</h1>
        <p class="lead text-muted">Bantu orang lain mencapai potensi penuh mereka.</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Pelatihan</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-sports-coach">
                        <i class="fa-solid fa-basketball"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Olahraga</h4>
                    <p class="card-desc">Melatih individu atau tim dalam suatu cabang olahraga.</p>
                    <div class="btn btn-category btn-sports-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-nutrition-coach">
                        <i class="fa-solid fa-apple-whole"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Nutrisi</h4>
                    <p class="card-desc">Memberikan panduan tentang kebiasaan makan sehat.</p>
                    <div class="btn btn-category btn-nutrition-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-fitness-coach">
                        <i class="fa-solid fa-dumbbell"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Kebugaran</h4>
                    <p class="card-desc">Merancang program latihan dan kebugaran.</p>
                    <div class="btn btn-category btn-fitness-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-life-coach">
                        <i class="fa-solid fa-person-burst"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Kehidupan</h4>
                    <p class="card-desc">Membantu klien menetapkan dan mencapai tujuan pribadi.</p>
                    <div class="btn btn-category btn-life-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-health-coach">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Kesehatan</h4>
                    <p class="card-desc">Fokus pada kesejahteraan dan kesehatan secara keseluruhan.</p>
                    <div class="btn btn-category btn-health-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-wellness-coach">
                        <i class="fa-solid fa-spa"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Kesejahteraan</h4>
                    <p class="card-desc">Membimbing klien menuju gaya hidup yang seimbang.</p>
                    <div class="btn btn-category btn-wellness-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-sales-coach">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Penjualan</h4>
                    <p class="card-desc">Melatih tim penjualan untuk meningkatkan kinerja.</p>
                    <div class="btn btn-category btn-sales-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-trainer">
                        <i class="fa-solid fa-person-running"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Pribadi</h4>
                    <p class="card-desc">Memberikan sesi latihan kebugaran satu lawan satu.</p>
                    <div class="btn btn-category btn-trainer">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-financial-coach">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Keuangan</h4>
                    <p class="card-desc">Membantu individu mengelola anggaran dan keuangan.</p>
                    <div class="btn btn-category btn-financial-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-relationship-coach">
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Hubungan</h4>
                    <p class="card-desc">Memberikan panduan dalam hubungan pribadi.</p>
                    <div class="btn btn-category btn-relationship-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-leadership-coach">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Kepemimpinan</h4>
                    <p class="card-desc">Mengembangkan keterampilan kepemimpinan eksekutif.</p>
                    <div class="btn btn-category btn-leadership-coach">Lihat Detail</div>
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
                    <div class="card-icon icon-career-coach">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Karier</h4>
                    <p class="card-desc">Membantu klien dalam pengembangan karier mereka.</p>
                    <div class="btn btn-category btn-career-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-executive-coach">
                        <i class="fa-solid fa-building-user"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Eksekutif</h4>
                    <p class="card-desc">Bekerja dengan pemimpin senior untuk kinerja.</p>
                    <div class="btn btn-category btn-executive-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-business-coach">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Bisnis</h4>
                    <p class="card-desc">Membantu pemilik bisnis menumbuhkan perusahaan mereka.</p>
                    <div class="btn btn-category btn-business-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-academic-coach">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h4 class="mt-3">Pelatih Akademik</h4>
                    <p class="card-desc">Membantu siswa dengan keterampilan belajar.</p>
                    <div class="btn btn-category btn-academic-coach">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
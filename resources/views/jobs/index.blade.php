@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Kategori Pekerjaan</h2>

    {{-- Kita gunakan Bootstrap Grid (row) dengan gutter (g-4) untuk spasi --}}
    <div class="row g-4">

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.entry-level') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-entry">
                        <i class="fa-solid fa-keyboard"></i>
                    </div>
                    <h4 class="mt-3">Entry Level Jobs</h4>
                    <p class="card-desc">Bermain Game, Menonton Video, Menonton Iklan, Salin & Tempel ...</p>
                    <div class="card-info">9016 Lowongan</div>
                    <div class="card-info mb-3">Rp 30.000 - Rp 160.000 Per Tugas</div>
                    <div class="btn btn-category btn-entry">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.micro') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-micro">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <h4 class="mt-3">Micro Jobs</h4>
                    <p class="card-desc">Riset Internet, Mengetik, Entri Data, Survei, Mengisi Formulir ...</p>
                    <div class="card-info">4533 Lowongan</div>
                    <div class="card-info mb-3">Rp 30.000 - Rp 400.000 Per Tugas</div>
                    <div class="btn btn-category btn-micro">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.virtual') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-virtual">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h4 class="mt-3">Virtual Jobs</h4>
                    <p class="card-desc">Mengajar, Koreksi Teks, Transkripsi, Terjemahan, Excel ...</p>
                    <div class="card-info">7948 Lowongan</div>
                    <div class="card-info mb-3">Rp 320.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-virtual">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.writing') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-writing">
                        <i class="fa-solid fa-pencil-alt"></i>
                    </div>
                    <h4 class="mt-3">Writing Jobs</h4>
                    <p class="card-desc">Penulisan Konten, Penulisan Artikel, Copywriting, Ghostwriting, Blog ...</p>
                    <div class="card-info">8183 Lowongan</div>
                    <div class="card-info mb-3">Rp 320.000 - Rp 1.600.000 Per Tugas</div>
                    <div class="btn btn-category btn-writing">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.testing') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-testing">
                        <i class="fa-solid fa-check-square"></i>
                    </div>
                    <h4 class="mt-3">Testing Jobs</h4>
                    <p class="card-desc">Pengujian Game, Pengujian Aplikasi, Pengujian Perangkat Lunak, Pengujian Website...</p>
                    <div class="card-info">1040 Lowongan</div>
                    <div class="card-info mb-3">Rp 30.000 - Rp 400.000 Per Minggu</div>
                    <div class="btn btn-category btn-testing">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.designing') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-designing">
                        <i class="fa-solid fa-palette"></i>
                    </div>
                    <h4 class="mt-3">Designing Jobs</h4>
                    <p class="card-desc">Desain Web/Grafis, Multimedia, Animasi, Penyuntingan Video...</p>
                    <div class="card-info">7891 Lowongan</div>
                    <div class="card-info mb-3">Rp 160.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-designing">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.marketing') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-marketing">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h4 class="mt-3">Marketing Jobs</h4>
                    <p class="card-desc">Pemasaran Digital, Telemarketing, Konten, Pemasaran Sosial...</p>
                    <div class="card-info">1286 Lowongan</div>
                    <div class="card-info mb-3">Rp 160.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-marketing">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.managerial') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-managerial">
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h4 class="mt-3">Managerial Jobs</h4>
                    <p class="card-desc">Manajer Kantor, Manajer Akun, Manajer Penjualan, RM Manager...</p>
                    <div class="card-info">4136 Lowongan</div>
                    <div class="card-info mb-3">Rp 320.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-managerial">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.developer') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-developer">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h4 class="mt-3">Developer Jobs</h4>
                    <p class="card-desc">Front-End, Back-End, Pengembang Perangkat Lunak, Full-Stack...</p>
                    <div class="card-info">4102 Lowongan</div>
                    <div class="card-info mb-3">Rp 320.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-developer">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.finance') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-finance">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h4 class="mt-3">Finance Jobs</h4>
                    <p class="card-desc">Analis Keuangan, Pembukuan, Akuntan, Manajer, Penasihat Keuangan...</p>
                    <div class="card-info">1147 Lowongan</div>
                    <div class="card-info mb-3">Rp 320.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-finance">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="{{ route('jobs.coaching') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-coaching">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h4 class="mt-3">Coaching Jobs</h4>
                    <p class="card-desc">Life Coaching, Kebugaran, Pelatih Karier, Pelatih Olahraga...</p>
                    <div class="card-info">5210 Lowongan</div>
                    <div class="card-info mb-3">Rp 320.000 - Rp 3.200.000 Per Minggu</div>
                    <div class="btn btn-category btn-coaching">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
           <a href="{{ route('jobs.other') }}" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class...="card-icon icon-other">
                        <i class="fa-solid fa-grip"></i>
                    </div>
                    <h4 class="mt-3">Other Jobs</h4>
                    <p class="card-desc">Pekerjaan Lain-Lain, Semua Pekerjaan, Menampilkan Kategori Pekerjaan</S> </p>
                    <div class="card-info">3610 Lowongan</div>
                    <div class="card-info mb-3">Rp 30.000 - Rp 400.000 Per Tugas</div>
                    <div class="btn btn-category btn-other">Lihat Pekerjaan</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
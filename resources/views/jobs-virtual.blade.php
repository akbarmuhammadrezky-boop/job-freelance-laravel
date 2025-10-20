@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Kategori
        </a>
    </div>

    <div class="text-center mb-5">
        <h1 class="fw-bold">Pekerjaan Virtual (Virtual Jobs)</h1>
        <p class="lead text-muted">Bekerja dari mana saja secara online.</p>
    </div>

    <h3 class="text-center mb-4">Jelajahi Pekerjaan Virtual</h3>

    <div class="row g-4 justify-content-center">

        <div class="col-lg-3 col-md-6"> {{-- Kita gunakan col-lg-3 agar 4 kartu per baris --}}
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-proofreading">
                        <i class="fa-solid fa-file-pen"></i>
                    </div>
                    <h4 class="mt-3">Koreksi Teks / Editing</h4>
                    <p class="card-desc">Memeriksa tata bahasa, ejaan, dan tanda baca.</p>
                    <div class="btn btn-category btn-proofreading">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-transcription">
                        <i class="fa-solid fa-file-audio"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Transkripsi</h4>
                    <p class="card-desc">Mengubah rekaman audio atau video menjadi teks tertulis.</p>
                    <div class="btn btn-category btn-transcription">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-translator">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <h4 class="mt-3">Penerjemah / Juru Bahasa</h4>
                    <p class="card-desc">Menerjemahkan teks atau ucapan dari satu bahasa ke bahasa lain.</p>
                    <div class="btn btn-category btn-translator">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-tutoring">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Mengajar / Tutor</h4>
                    <p class="card-desc">Memberikan bimbingan belajar atau les secara online.</p>
                    <div class="btn btn-category btn-tutoring">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-va">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="mt-3">Asisten Virtual</h4>
                    <p class="card-desc">Memberikan dukungan administratif jarak jauh.</p>
                    <div class="btn btn-category btn-va">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-admin">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <h4 class="mt-3">Pekerjaan Administratif</h4>
                    <p class="card-desc">Tugas-tugas administrasi kantor yang dilakukan dari jarak jauh.</p>
                    <div class="btn btn-category btn-admin">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-customer-support">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h4 class="mt-3">Dukungan Pelanggan</h4>
                    <p class="card-desc">Menjawab pertanyaan pelanggan melalui chat, email, atau telepon.</p>
                    <div class="btn btn-category btn-customer-support">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-office-assistant">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h4 class="mt-3">Asisten Kantor</h4>
                    <p class="card-desc">Membantu tugas-tugas kantor umum secara virtual.</p>
                    <div class="btn btn-category btn-office-assistant">Lihat Detail</div>
                </div>
            </a>
        </div>

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
                    <div class="card-icon icon-accountant">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h4 class="mt-3">Akuntan Virtual</h4>
                    <p class="card-desc">Layanan akuntansi dan pembukuan jarak jauh.</p>
                    <div class="btn btn-category btn-accountant">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-recruiting">
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                    <h4 class="mt-3">Perekrutan Virtual</h4>
                    <p class="card-desc">Mencari dan menyaring kandidat untuk klien.</p>
                    <div class="btn btn-category btn-recruiting">Lihat Detail</div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-6">
            <a href="#" class="category-card-link">
                <div class="category-card text-center p-4">
                    <div class="card-icon icon-voiceover">
                        <i class="fa-solid fa-microphone-lines"></i>
                    </div>
                    <h4 class="mt-3">Artis Sulih Suara</h4>
                    <p class="card-desc">Merekam suara untuk iklan, video, atau buku audio.</p>
                    <div class="btn btn-category btn-voiceover">Lihat Detail</div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
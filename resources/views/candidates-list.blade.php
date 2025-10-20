@extends('layouts.app')

@section('content')
<div class="container py-4">

    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <h4 class="fw-bold mb-0">102.930 Kandidat Ditemukan</h4>
            <p class="text-muted small">Menampilkan 1 - 10 Kandidat</p>
        </div>
        <div class="col-md-6 text-md-end">
            {{-- Dropdown untuk filter --}}
            <div class="btn-group me-2">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-sort"></i> Most Recent
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Most Recent</a></li>
                    <li><a class="dropdown-item" href="#">Oldest</a></li>
                    <li><a class="dropdown-item" href="#">Verified</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    10 Per Halaman
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">10 Per Halaman</a></li>
                    <li><a class="dropdown-item" href="#">25 Per Halaman</a></li>
                    <li><a class="dropdown-item" href="#">50 Per Halaman</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Daftar Kandidat --}}

    <div class="card shadow-sm mb-3">
        <div class="card-body p-4 d-flex align-items-center">
            {{-- Avatar --}}
            <div class="candidate-avatar placeholder-avatar">
                <i class="fa-solid fa-user fa-2x text-muted"></i>
            </div>

            {{-- Info Kandidat --}}
            <div class="ms-3">
                <h5 class="fw-bold mb-1">Sharry Uduya <i class="fa-solid fa-circle-check text-primary"></i></h5>
                <p class="text-muted mb-0"><i class="fa-solid fa-filter"></i> Education</p>
            </div>

            {{-- Tombol Simpan (di paling kanan) --}}
            <div class="ms-auto">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fa-solid fa-plus"></i> Simpan Kandidat
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-body p-4 d-flex align-items-center">
            {{-- Avatar --}}
            {{-- Ganti src="..." dengan gambar asli nanti --}}
            <img src="https://i.pravatar.cc/80?img=12" alt="Nebo Esther" class="candidate-avatar">

            {{-- Info Kandidat --}}
            <div class="ms-3">
                <h5 class="fw-bold mb-1">Nebo Esther <i class="fa-solid fa-circle-check text-primary"></i></h5>
                <p class="text-muted mb-0"><i class="fa-solid fa-filter"></i> Digital & Creative, Social Services</p>
            </div>

            {{-- Tombol Simpan (di paling kanan) --}}
            <div class="ms-auto">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fa-solid fa-plus"></i> Simpan Kandidat
                </a>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mb-3">
        <div class="card-body p-4 d-flex align-items-center">
            {{-- Avatar --}}
            <div class="candidate-avatar placeholder-avatar">
                <i class="fa-solid fa-user fa-2x text-muted"></i>
            </div>

            {{-- Info Kandidat --}}
            <div class="ms-3">
                <h5 class="fw-bold mb-1">Ikhlass Kaissi <i class="fa-solid fa-circle-check text-primary"></i></h5>
                <p class="text-muted mb-0"><i class="fa-solid fa-filter"></i> Education</p>
            </div>

            {{-- Tombol Simpan (di paling kanan) --}}
            <div class="ms-auto">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fa-solid fa-plus"></i> Simpan Kandidat
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
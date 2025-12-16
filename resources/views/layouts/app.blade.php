<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Freelance Platform</title>
    
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <style>
        /* Styling Kartu Kategori */
        .category-card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .category-card-link {
            text-decoration: none;
            color: inherit;
        }

        /* Styling Ikon */
        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        .card-icon i { font-size: 32px; }

        /* Teks */
        .category-card h4 { font-size: 1.25rem; font-weight: 700; color: #333; }
        .card-desc { font-size: 0.9rem; color: #666; min-height: 50px; }
        .card-info { font-size: 0.9rem; font-weight: 600; color: #555; }

        /* Tombol Kategori */
        .btn-category { border-radius: 20px; padding: 8px 24px; font-weight: 600; color: #fff; border: none; }

        /* SKEMA WARNA (Ringkasan) */
        .icon-entry { background-color: #fdeeee; } .icon-entry i { color: #f06a78; } .btn-entry { background-color: #f06a78; }
        .icon-micro { background-color: #eef2ff; } .icon-micro i { color: #3b30c9; } .btn-micro { background-color: #3b30c9; }
        .icon-virtual { background-color: #fdeeee; } .icon-virtual i { color: #d90429; } .btn-virtual { background-color: #d90429; }
        .icon-writing { background-color: #edfcf1; } .icon-writing i { color: #16a34a; } .btn-writing { background-color: #16a34a; }
        
        /* (Anda bisa menambahkan sisa CSS warna di sini jika diperlukan, 
           kode CSS Anda sebelumnya sudah sangat lengkap) */

        /* Avatar */
        .candidate-avatar { width: 80px; height: 80px; border-radius: 50%; object-fit: cover; border: 2px solid #eee; }
        .placeholder-avatar { width: 80px; height: 80px; border-radius: 50%; background-color: #f8f9fa; border: 2px solid #eee; display: flex; align-items: center; justify-content: center; }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">

{{-- NAVBAR UTAMA --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4 shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}">FreelanceHub</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto align-items-center">

            {{-- Link Jobs --}}
            <li class="nav-item">
                <a href="{{ route('jobs.index') }}" class="nav-link">Jobs</a>
            </li>

            {{-- Dropdown Candidates --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Candidates
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('candidates.index') }}">Candidate Listing</a></li>
                    {{-- Menu Daftar dipindah ke sini juga oke --}}
                    <li><a class="dropdown-item" href="{{ route('apply') }}">Daftar Jadi Freelancer</a></li>
                </ul>
            </li>

            {{-- Dropdown Employers --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    Employers
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('packages.index') }}">Packages</a></li>
                    <li><a class="dropdown-item" href="{{ route('jobs.create') }}">Post a Job</a></li>
                </ul>
            </li>

            {{-- LOGIKA AUTH (LOGIN / PROFILE) --}}
            
            @auth
                {{-- JIKA SUDAH LOGIN --}}
                <li class="nav-item ms-lg-3">
                    <a href="{{ route('profile') }}" class="nav-link text-white fw-bold">
                        <i class="fa-solid fa-user-circle me-1"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-danger" style="text-decoration: none;">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                {{-- JIKA BELUM LOGIN --}}
                <li class="nav-item ms-lg-3">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    {{-- Tombol Daftar di Navbar agar terlihat jelas --}}
                    <a href="{{ route('apply') }}" class="btn btn-primary btn-sm px-3 ms-2 rounded-pill">Daftar</a>
                </li>
            @endguest

        </ul>
    </div>
  </div>
</nav>

{{-- KONTEN UTAMA --}}
<div class="container flex-grow-1">
  @yield('content')
</div>

{{-- FOOTER --}}
<footer class="text-center py-4 mt-auto bg-dark text-white">
  <p class="mb-0">© 2025 FreelanceHub — Mockup UTS</p>
</footer>

{{-- Script Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container mt-5">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header bg-white">
            <h4 class="mb-0">Profil Saya</h4>
        </div>
        <div class="card-body">
            
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    
                    <p class="card-text text-muted mb-1">
                        <i class="fas fa-envelope me-2"></i> {{ Auth::user()->email }}
                    </p>
                    
                    <p class="card-text">
                        <span class="badge bg-primary">{{ Auth::user()->role ?? 'Freelancer' }}</span>
                    </p>
                </div>

                <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary">
                    <i class="fas fa-pencil-alt"></i> Edit Profil
                </a>
            </div>

            <hr>

            <div class="mt-3">
                <h6>Informasi Akun</h6>
                <small class="text-muted">Bergabung sejak: {{ Auth::user()->created_at->format('d M Y') }}</small>
            </div>

        </div>
    </div>
</div>
@endsection
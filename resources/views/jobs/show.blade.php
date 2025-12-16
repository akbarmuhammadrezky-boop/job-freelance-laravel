@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-file-alt me-2"></i> Detail Pekerjaan</h4>
                </div>
                
                <div class="card-body p-4">
                    {{-- TAMPILAN SEPERTI FORM (READ ONLY) --}}
                    
                    {{-- Judul --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Pekerjaan</label>
                        <input type="text" class="form-control bg-light" value="{{ $job->title }}" disabled readonly>
                    </div>

                    {{-- Perusahaan --}}
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Perusahaan</label>
                        <input type="text" class="form-control bg-light" value="{{ $job->company }}" disabled readonly>
                    </div>

                    {{-- Lokasi & Kategori (Dibuat 2 Kolom) --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Lokasi</label>
                            <input type="text" class="form-control bg-light" value="{{ $job->location }}" disabled readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Kategori</label>
                            <input type="text" class="form-control bg-light" value="{{ ucfirst($job->category) }}" disabled readonly>
                        </div>
                    </div>

                    {{-- Tipe & Gaji --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tipe Pekerjaan</label>
                            <input type="text" class="form-control bg-light" value="{{ $job->job_type }}" disabled readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Gaji</label>
                            <input type="text" class="form-control bg-light" value="{{ $job->salary ?? '-' }}" disabled readonly>
                        </div>
                    </div>

                    {{-- Deskripsi --}}
                    <div class="mb-4">
                        <label class="form-label fw-bold">Deskripsi Pekerjaan</label>
                        <textarea class="form-control bg-light" rows="6" disabled readonly>{{ $job->description }}</textarea>
                    </div>

                    <hr>

                    {{-- TOMBOL KEMBALI --}}
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('jobs.category', $job->category) }}" class="btn btn-secondary px-4">
                            <i class="fas fa-arrow-left me-2"></i> Kembali
                        </a>
                        
                        {{-- Tombol Lamar (Opsional) --}}
                        <a href="{{ route('apply') }}" class="btn btn-success px-4">
                            Lamar Sekarang
                        </a>
                    </div>

                </div>
            </div>
            
            <div class="text-center mt-3 text-muted">
                <small>Diposting pada tanggal: {{ $job->created_at->format('d F Y') }}</small>
            </div>

        </div>
    </div>
</div>
@endsection
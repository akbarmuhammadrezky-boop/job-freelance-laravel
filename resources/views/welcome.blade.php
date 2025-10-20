@extends('layouts.app')

@section('content')
<div class="text-center py-5">
  <h1>Selamat datang di FreelanceHub</h1>
  <p>Platform penghubung antara Klien dan Freelancer.</p>
  <a href="{{ route('jobs.index') }}" class="btn btn-primary">Lihat Pekerjaan</a>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h2>{{ $job['title'] }}</h2>
    <p><strong>Perusahaan:</strong> {{ $job['company'] }}</p>
    <p><strong>Budget:</strong> {{ $job['budget'] }}</p>
    <hr>
    <p>{{ $job['desc'] }}</p>
    <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection

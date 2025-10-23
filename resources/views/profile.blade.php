@extends('layouts.app')

@section('title', 'Profil - Footique')

@section('content')
<div class="card mx-auto shadow" style="max-width: 400px;">
    <div class="card-body text-center">
        <h4>Profil Pengguna</h4>
        <p class="mt-3">Nama Pengguna: <strong>{{ $username }}</strong></p>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-3">Kembali ke Dashboard</a>
    </div>
</div>
@endsection
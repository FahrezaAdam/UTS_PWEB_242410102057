@extends('layouts.app')

@section('title', 'Pengelolaan - Footique')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center">Daftar Produk Sepatu</h2>

    <form action="{{ route('pengelolaan') }}" method="GET" class="d-flex justify-content-center mb-4">
        <input 
            type="text" 
            name="search" 
            value="{{ request('search') }}" 
            class="form-control w-50 me-2" 
            placeholder="Cari produk berdasarkan nama..."
        >
        <button type="submit" class="btn btn-success px-4">Cari</button>
    </form>

    <div class="row g-4">
        @forelse($produk as $item)
            <div class="col-md-3 col-sm-6">
                <div class="card product-card shadow-sm border-0 h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-3">{{ $item['nama'] }}</h5>

                        <img src="{{ asset('assets/' . $item['gambar']) }}" 
                             alt="{{ $item['nama'] }}" 
                             class="product-image mb-3">

                        <p class="text-muted mb-1">Harga: Rp{{ number_format($item['harga'], 0, ',', '.') }}</p>
                        <p class="text-muted mb-3">Stok: {{ $item['stok'] }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center mt-4">
                <p class="text-muted">Produk tidak ditemukan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection

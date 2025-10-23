@extends('layouts.app')

@section('title', 'Dashboard - Footique')

@section('content')
<div class="dashboard-home">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://storage.googleapis.com/eraspacelink/pmp/production/banners/images/U7jEtrigwyk1RlHLB8bzxQByBv8S9n1xo7SsJAvG.jpg" 
                     class="d-block w-100 hero-image" 
                     alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="https://storage.googleapis.com/eraspacelink/pmp/production/banners/images/iKRdUwwN78se7LvZ6WryoIdwsubBaZd3P4qEei64.jpg" 
                     class="d-block w-100 hero-image" 
                     alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="https://sombrero.jdsports.id/media/wysiwyg/HomeBanner2/WEEK_42___CREATE_BANNER___NIKE_AIR_MAX_95_Homepage_banner_Desktop_1920x840_.jpg" 
                     class="d-block w-100 hero-image" 
                     alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <section class="py-5 text-center">
        <div class="container">
            <h3 class="fw-bold mb-3">Tentang Footique</h3>
            <p class="text-muted mb-4">Retail sepatu modern yang menghadirkan kenyamanan dan gaya untuk setiap langkah Anda.</p>
            <p class="text-secondary mx-auto col-md-8">
                Footique Jember menyediakan koleksi dari merek ternama seperti Nike, Adidas, dan Puma, dan masih banyak lagi.
                Dengan sistem informasi modern, kami memudahkan pengelolaan data dan branding toko agar lebih efisien.
            </p>
            <a href="{{ route('pengelolaan') }}" class="btn btn-primary px-5 py-3 mt-3 shadow-sm">Lihat Koleksi Sepatu</a>
        </div>
    </section>

</div>
@endsection

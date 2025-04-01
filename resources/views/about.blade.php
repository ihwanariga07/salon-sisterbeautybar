@extends('layouts.app')

@section('title', 'Tentang Kami - Salon SisterBeautyBar')

@section('content')

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('images/about-us.png') }}" class="img-fluid rounded shadow" alt="About Us">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold">Tentang Kami</h2>
            <p class="text-muted">
                Salon SisterBeautyBar adalah salon kecantikan terbaik yang menghadirkan layanan perawatan rambut, wajah, dan tubuh dengan produk berkualitas tinggi.
                Kami telah berpengalaman dalam industri kecantikan selama lebih dari 10 tahun, memberikan pelayanan terbaik kepada pelanggan kami.
            </p>
            <p>
                Kami percaya bahwa setiap orang berhak tampil cantik dan percaya diri. Dengan tim profesional dan suasana yang nyaman, kami siap memberikan pengalaman yang tak terlupakan.
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 text-center">
            <i class="bi bi-scissors text-danger fs-1"></i>
            <h4 class="mt-3">Layanan Profesional</h4>
            <p>Stylist berpengalaman siap memberikan hasil terbaik.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="bi bi-stars text-warning fs-1"></i>
            <h4 class="mt-3">Produk Berkualitas</h4>
            <p>Menggunakan produk premium untuk menjaga kesehatan rambut dan kulit.</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="bi bi-house-heart text-success fs-1"></i>
            <h4 class="mt-3">Suasana Nyaman</h4>
            <p>Ruang yang nyaman dan bersih untuk pengalaman santai.</p>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('title', 'Layanan - Salon SisterBeautyBar')

@section('content')

<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4">Layanan Kami</h2>
    <p class="text-center text-muted">Kami menawarkan berbagai layanan kecantikan profesional dengan produk berkualitas terbaik.</p>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/haircut.jpg') }}" class="card-img-top" alt="Haircut">
                <div class="card-body text-center">
                    <h5 class="card-title">Potong Rambut</h5>
                    <p class="card-text">Stylist profesional siap memberikan potongan rambut terbaik sesuai keinginan Anda.</p>
                    <a href="#" class="btn btn-dark">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/facial.jpg') }}" class="card-img-top" alt="Facial">
                <div class="card-body text-center">
                    <h5 class="card-title">Facial Wajah</h5>
                    <p class="card-text">Perawatan wajah dengan produk premium untuk kulit lebih sehat dan bersinar.</p>
                    <a href="#" class="btn btn-dark">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/makeup.jpg') }}" class="card-img-top" alt="Makeup">
                <div class="card-body text-center">
                    <h5 class="card-title">Makeup Profesional</h5>
                    <p class="card-text">Layanan makeup untuk acara spesial dengan hasil memukau dan tahan lama.</p>
                    <a href="#" class="btn btn-dark">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

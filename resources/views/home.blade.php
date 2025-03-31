@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Salon Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="position-relative text-center text-white">
        <img src="{{ asset('images/header-image.png') }}" alt="Salon Welcome Image" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-shadow">
            Selamat Datang di Salon SisterBeautyBar
        </div>
    </header>

    <section class="container my-5">
        <h3 class="text-center">Artikel Terkait</h3>
        <ul class="list-group w-75 mx-auto">
            <li class="list-group-item">SAY GOODBYE TO HIPERPIGMENTATION</li>
            <li class="list-group-item">5 RESEP ALAMI MASKER WAJAH</li>
            <li class="list-group-item">BULU MATA LENTIK DENGAN LASHTIQUE</li>
            <li class="list-group-item">KOREAN STYLE GLASS SKIN FACE</li>
            <li class="list-group-item">MAKE-UP FOR BROWN SKIN</li>
            <li class="list-group-item">LONG LASTING HIGHLIGHTER</li>
            <li class="list-group-item">PAC SATIN MATTE LIP CREAM</li>
        </ul>
    </section>

    <section class="container text-center my-5">
        <h2>Suasana di Salon Kami</h2>
        <p>Nikmati kenyamanan dan layanan terbaik di salon kami dengan suasana yang elegan dan modern.</p>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/salon-interior.jpg') }}" alt="Salon Interior" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 text-start">
                <h4>Kenapa Memilih Kami?</h4>
                <ul class="list-unstyled">
                    <li>💆‍♀️ Ruangan nyaman dan ber-AC</li>
                    <li>💇‍♂️ Alat modern dan higienis</li>
                    <li>✨ Tim profesional & berpengalaman</li>
                    <li>🕯️ Suasana tenang untuk relaksasi</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="about" class="container py-5 text-center">
        <h2>Tentang Kami</h2>
        <p>Salon kami menyediakan layanan kecantikan berkualitas dengan tenaga profesional.</p>
    </section>

    <section id="services" class="bg-light py-5 text-center">
        <div class="container">
            <h2>Layanan Kami</h2>
            <div class="row mt-4">
                <div class="col-md-4"><div class="card p-3"><h4>Potong Rambut</h4><p>Layanan potong rambut terbaik dengan gaya modern.</p></div></div>
                <div class="col-md-4"><div class="card p-3"><h4>Facial</h4><p>Perawatan wajah untuk kulit sehat dan bersinar.</p></div></div>
                <div class="col-md-4"><div class="card p-3"><h4>Manicure & Pedicure</h4><p>Perawatan kuku profesional untuk tampilan sempurna.</p></div></div>
            </div>
        </div>
    </section>

    <section id="contact" class="container py-5 text-center">
        <h2>Kontak Kami</h2>
        <p>Hubungi kami untuk reservasi atau informasi lebih lanjut.</p>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        Create by Ihwan Ariga
    </footer>
@endsection

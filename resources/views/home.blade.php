<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Salon SisterBeautyBar</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Salon Kecantikan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <h1>Selamat Datang di Salon Kecantikan</h1>
        <p>Tempat terbaik untuk perawatan kecantikan Anda</p>
    </header>

    <section id="about" class="container py-5">
        <h2 class="text-center">Tentang Kami</h2>
        <p class="text-center">Salon kami menyediakan layanan kecantikan berkualitas dengan tenaga profesional.</p>
    </section>

    <section id="services" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Layanan Kami</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4>Potong Rambut</h4>
                        <p>Layanan potong rambut terbaik dengan gaya modern.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4>Facial</h4>
                        <p>Perawatan wajah untuk kulit sehat dan bersinar.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4>Manicure & Pedicure</h4>
                        <p>Perawatan kuku profesional untuk tampilan sempurna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>

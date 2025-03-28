<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <title>Salon SisterBeautyBar</title>
    <style>


        .navbar-nav .nav-link {
            transition: color 0.3s ease-in-out;
        }
        .navbar-nav .nav-link:hover {
            color: #f8b400 !important;
        }
        .header-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .header-container {
            position: relative;
            text-align: center;
        }

        .header-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 1.5rem;
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Salon Logo" height="40">
            </a>
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

    <header class="header-container">
        <img src="{{ asset('images/header-image.png') }}" alt="Salon Welcome Image" class="img-fluid w-100">
        <div class="header-text">Selamat Datang di Salon SisterBeautyBar</div>
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
    <section id="contact" class="container py-5">
        <h2 class="text-center">Kontak Kami</h2>
        <p class="text-center">Hubungi kami untuk reservasi atau informasi lebih lanjut.</p>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        Create by Ihwan Ariga
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>

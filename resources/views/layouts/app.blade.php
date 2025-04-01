<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Salon SisterBeautyBar')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .top-bar {
            background: linear-gradient(to right, #ff6a00, #ee0979);
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        .top-bar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
            display: inline-block;
        }
        .footer {
            background: #f1f1f1;
            padding: 30px 10px;
            text-align: center;
        }
        .footer a {
            color: black;
            text-decoration: none;
            font-weight: 500;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .subscribe-input {
            width: 250px;
            margin: 5px;
        }
        .subscribe-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Salon Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
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

    <main class="container mt-4">
        @yield('content')
    </main>

    <div class="top-bar d-flex flex-wrap justify-content-center gap-5">
        <a href="#"><i class="bi bi-bus-front"></i>Car Park</a>
        <a href="#"><i class="bi bi-download"></i> Download E-Book</a>
        <a href="#"><i class="bi bi-cart"></i> Leasing Inquiry</a>
        <a href="#"><i class="bi bi-grid"></i> Salon Apps</a>
    </div>

    <div class="footer">
        <h5>OUR GROUP</h5>
        <p>
            <a href="#">SISTERBEAUTYBAR.COM</a> |
            <a href="#">SISTERGLOW.COM</a> |
            <a href="#">KLINIKKECANTIKAN.COM</a> |
            <a href="#">KLINIKPRATAMA.COM</a>
        </p>

        <div class="subscribe-container">
            <input type="text" class="form-control subscribe-input" placeholder="Your Fullname">
            <input type="email" class="form-control subscribe-input" placeholder="Your Email Address">
            <button class="btn btn-dark">Subscribe</button>
        </div>
        <p class="mt-3">
            <a href="#">Careers</a> | <a href="#">About Us</a> | <a href="#">Gallery</a> | <a href="#">News</a> |
            <a href="#">salon Map</a> | <a href="#">Leasing</a> | <a href="#">Contact Us</a> | <a href="#">Disclaimer</a>
        </p>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        Create By Ihwan Ariga
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

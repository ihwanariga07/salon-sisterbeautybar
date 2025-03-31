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
        .navbar-nav .nav-link:hover {
            color: #f8b400 !important;
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
        .facilities {
            background: linear-gradient(to right, #f76d2b, #d30b34);
            color: white;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        .facilities div {
            flex: 1;
        }
        .facilities i {
            font-size: 30px;
            margin-bottom: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px 0;
        }






        body {
    font-family: Arial, sans-serif;
}

.share-post {
    text-align: left;
    margin: 20px 0;
}

.share-post h3 {
    margin-bottom: 10px;
}

.social-icons {
    display: flex;
    gap: 10px;
}

.salon-detail {
    background-color: #f9f9f9;
    padding: 20px;
    border: 1px solid #ddd;
    margin-top: 20px;
    text-align: center;
}

.salon-logo {
    max-width: 100px;
    margin-bottom: 10px;
}

.button {
    padding: 10px 15px;
    color: white;
    text-decoration: none;
    margin: 5px;
    display: inline-block;
    border-radius: 5px;
}

.blue {
    background-color: #007bff;
}

.teal {
    background-color: #20c997;
}
    </style>
</head>
<body>
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

    <header class="header-container">
        <img src="{{ asset('images/header-image.png') }}" alt="Salon Welcome Image" class="img-fluid w-100">
        <div class="header-text">Selamat Datang di Salon SisterBeautyBar</div>
    </header>

    <section class="related-articles">
        <h3>Artikel Terkait</h3>
        <ul>
            <li>SAY GOODBYE TO HIPERPIGMENTATION</li>
            <li>5 RESEP ALAMI MASKER WAJAH</li>
            <li>BULU MATA LENTIK DENGAN LASHTIQUE</li>
            <li>KOREAN STYLE GLASS SKIN FACE</li>
            <li>MAKE-UP FOR BROWN SKIN</li>
            <li>LONG LASTING HIGHLIGHTER</li>
            <li>PAC SATIN MATTE LIP CREAM</li>
        </ul>
    </section>

    <section class="salon-showcase">
        <div class="container">
            <h2>Suasana di Salon Kami</h2>
            <p>Nikmati kenyamanan dan layanan terbaik di salon kami dengan suasana yang elegan dan modern.</p>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/salon-interior.jpg') }}" alt="Salon Interior" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h4>Kenapa Memilih Kami?</h4>
                        <ul>
                            <li>💆‍♀️ Ruangan nyaman dan ber-AC</li>
                            <li>💇‍♂️ Alat modern dan higienis</li>
                            <li>✨ Tim profesional & berpengalaman</li>
                            <li>🕯️ Suasana tenang untuk relaksasi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container py-5">
        <h2 class="text-center">Tentang Kami</h2>
        <p class="text-center">Salon kami menyediakan layanan kecantikan berkualitas dengan tenaga profesional.</p>
    </section>

    <section id="services" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Layanan Kami</h2>
            <div class="row mt-4">
                <div class="col-md-4"><div class="card p-3"><h4>Potong Rambut</h4><p>Layanan potong rambut terbaik dengan gaya modern.</p></div></div>
                <div class="col-md-4"><div class="card p-3"><h4>Facial</h4><p>Perawatan wajah untuk kulit sehat dan bersinar.</p></div></div>
                <div class="col-md-4"><div class="card p-3"><h4>Manicure & Pedicure</h4><p>Perawatan kuku profesional untuk tampilan sempurna.</p></div></div>
            </div>
        </div>
    </section>

    <section id="contact" class="container py-5">
        <h2 class="text-center">Kontak Kami</h2>
        <p class="text-center">Hubungi kami untuk reservasi atau informasi lebih lanjut.</p>
    </section>

    <section class="facilities">
        <div>
            <i class="fas fa-wheelchair"></i>
            <p>Explore Facilities</p>
        </div>
        <div>
            <i class="fas fa-bus"></i>
            <p>Shuttle & Car Park</p>
        </div>
        <div>
            <i class="fas fa-download"></i>
            <p>Download E-Magz</p>
        </div>
        <div>
            <i class="fas fa-shopping-cart"></i>
            <p>Leasing Inquiry</p>
        </div>
        <div>
            <i class="fas fa-th"></i>
            <p>Summarecon Apps</p>
        </div>
    </section>

    <div class="share-post">
        <h3>SHARE THIS POST</h3>
        <div class="social-icons">
            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="googleplus-icon.png" alt="Google Plus"></a>
        </div>
    </div>

    <div class="salon-detail">
        <img src="logo.png" alt="" class="salon-logo">
        <h4>SALON SISTERBEAUTYBAR</h4>
        <a href="#" class="button blue">SEE ON MAP</a>
        <a href="#" class="button teal">MORE DETAIL</a>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        Create by Ihwan Ariga
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>


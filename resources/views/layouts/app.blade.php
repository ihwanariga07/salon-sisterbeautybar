<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Salon SisterBeautyBar')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

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

    <header class="position-relative text-center text-white">
        <img src="{{ asset('images/header-image.png') }}" alt="Salon Welcome Image" class="img-fluid w-100">
        <div class="position-absolute top-50 start-50 translate-middle fw-bold fs-4 text-shadow">
            Selamat Datang di Salon SisterBeautyBar
        </div>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>




 <body class="bg-gray-100">

  <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white py-4">
   <div class="container mx-auto flex justify-around">
    <div class="text-center">
     <i class="fas fa-wheelchair text-2xl">
     </i>
     <p>
      EXPLORE FACILITIES
     </p>
    </div>
    <div class="text-center">
     <i class="fas fa-bus text-2xl">
     </i>
     <p>
      SHUTTLE &amp; CAR PARK
     </p>
    </div>
    <div class="text-center">
     <i class="fas fa-download text-2xl">
     </i>
     <p>
      DOWNLOAD E-MAGZ
     </p>
    </div>
    <div class="text-center">
     <i class="fas fa-shopping-cart text-2xl">
     </i>
     <p>
      LEASING INQUIRY
     </p>
    </div>
    <div class="text-center">
     <i class="fas fa-th-large text-2xl">
     </i>
     <p>
      SUMMARECON APPS
     </p>
    </div>
   </div>
  </div>
  <div class="bg-gray-200 py-8">
   <div class="container mx-auto flex flex-wrap justify-between">
    <div class="w-full md:w-1/3 mb-4 md:mb-0">
     <h2 class="font-bold mb-2">
      OUR GROUP
     </h2>
     <ul>
      <li>
       <a class="text-gray-700" href="#">
        MALBEKASI.COM
       </a>
      </li>
      <li>
       <a class="text-gray-700" href="#">
        MALSERPONG.COM
       </a>
      </li>
      <li>
       <a class="text-gray-700" href="#">
        SUMMARECONMALLBANDUNG.COM
       </a>
      </li>
      <li>
       <a class="text-gray-700" href="#">
        SAMASTABALI.COM
       </a>
      </li>
      <li>
       <a class="text-gray-700" href="#">
        SCIENTIASQUAREPARK.COM
       </a>
      </li>
      <li>
       <a class="text-gray-700" href="#">
        VILLAGGIOOUTLETS.COM
       </a>
      </li>
      <li>
       <a class="text-gray-700" href="#">
        JF3.CO.ID
       </a>
      </li>
     </ul>
    </div>
    <div class="w-full md:w-1/3 mb-4 md:mb-0 text-center">
     <h2 class="font-bold mb-2">
      GET DIRECTION
     </h2>
     <p>
      Keep up to date with us!
     </p>
     <div class="flex justify-center mt-2">
      <input class="border p-2 mr-2" placeholder="YOUR FULLNAME" type="text"/>
      <input class="border p-2 mr-2" placeholder="YOUR EMAIL ADDRESS" type="email"/>
      <button class="bg-gray-800 text-white px-4 py-2">
       SUBSCRIBE
      </button>
     </div>
    </div>
    <div class="w-full md:w-1/3 mb-4 md:mb-0 text-center">
     <img alt="Placeholder image" height="50" src="https://storage.googleapis.com/a1aa/image/4I8NsGdY--TAftMI79tJ6lARGXbJOQqLiWqmUNfQhGk.jpg" width="50"/>
    </div>
   </div>
  </div>
  <div class="bg-gray-300 py-4">
   <div class="container mx-auto text-center">
    <p class="font-bold">
     Your Family Mall
    </p>
    <div class="flex justify-center space-x-4 mt-2">
     <a class="text-gray-700" href="#">
      <i class="fab fa-facebook-f">
      </i>
     </a>
     <a class="text-gray-700" href="#">
      <i class="fab fa-twitter">
      </i>
     </a>
     <a class="text-gray-700" href="#">
      <i class="fab fa-youtube">
      </i>
     </a>
     <a class="text-gray-700" href="#">
      <i class="fab fa-instagram">
      </i>
     </a>
    </div>
   </div>
  </div>




    <footer class="bg-dark text-white text-center py-3 mt-5">
        Create By Ihwan Ariga
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

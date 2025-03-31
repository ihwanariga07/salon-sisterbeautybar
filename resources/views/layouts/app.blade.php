<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Salon SisterBeautyBar')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Salon SisterBeautyBar</a>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        Salon SisterBeautyBar
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perpustakaan UNIBA Madura</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
        <div class="container">
            <img src="{{ asset('assets/img/logo_uniba.jpg') }}" alt="Logo Perpustakaan" height="40"class="rounded shadow-sm">
            <a class="navbar-brand fw-bold text-success fs-4" href="{{ url('/') }}">
                Perpustakaan UNIBA Madura
            </a>

            <div class="d-flex gap-3">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-success btn-sm">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success btn-sm">
                        Login
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-success btn-sm">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="fw-bold display-5 mb-3">
                    Perpustakaan Digital <br>
                    <span class="text-success">Modern & Mudah</span>
                </h1>

                <p class="text-muted fs-5 mb-4">
                    Cari, pinjam, dan kelola buku favoritmu secara online.
                    Cocok untuk pelajar dan mahasiswa Gen Z.
                </p>

                <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ route('home') }}" class="btn btn-success btn-lg px-4 rounded-pill">
                        Jelajahi Buku
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg px-4 rounded-pill">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

            <div class="col-lg-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png"
                    class="img-fluid"
                    style="max-width: 380px"
                    alt="Library Illustration">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-muted py-4 bg-white border-top">
        <small>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} · PHP v{{ PHP_VERSION }}
        </small>
    </footer>

</body>
</html>

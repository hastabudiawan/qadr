<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>RS Qadr</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top text-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Logo-RS-Qadr.png" alt="Logo RS Qadr" class="d-inline-block align-text-top logo-qadr">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="dokter.html">Cari Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="janjitemu.html">Buat Janji</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="hubungikami.html">Hubungi Kami</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    @if(Route::has('login'))

                    @auth

                    <x-app-layout>                        
                    </x-app-layout>

                    @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{Route('register')}}">Register</a>
                    </li>

                    @endauth

                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Extra_Vaskin-Meningitis-Haji-Umroh_SLIDER-WEBSITE_Q.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="img/PROMO-PCR_SLIDER_DESKTOP.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item">
                <img src="img/Slider-Desktop-Web-Baru-1.jpeg" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--  -->
    <div class="container-fluid bg-qadr text-light mb-5">
        <div class="row">
            <div class="col-md-6 py-5 text-center">
                <h1 class="mb-3">Cari Dokter</h1>
                <div class="line"></div>
                <p>Pilih Berdasarkan Nama dan Spesialisasi</p>
                <a href="#" class="btn btn-outline-light">Cari Dokter</a>
            </div>
            <div class="col-md-6 py-5 text-center">
                <h1 class="mb-3">Buat Janji Temu</h1>
                <p>Pilih dokter yang Anda tuju dan buat janji</p>
                <a href="#" class="btn btn-outline-light">Buat Janji</a>
            </div>
        </div>
    </div>

    @include('user.tentang')

    @include('user.spesialisasi')

    <!-- Footer -->
    <footer class="footer pt-5 text-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md pb-2">
                    <h1 class="fs-3">Alamat</h1>
                    <p>Komplek Islamic Village, Kelapa Dua, Kab. Tangerang, Banten 15810</p>
                </div>
                <div class="col-md pb-2">
                    <h1 class="fs-3">Kontak</h1>
                    <p>
                        <a href="tel:0215464466" class="text-decoration-none text-light">
                            <i class="fa fa-phone" style="font-size:24px"></i> 021-5464-466
                        </a>
                    </p>
                    <p>
                        <a href="tel:+6285158422664" class="text-decoration-none text-light">
                            <i class="fa fa-whatsapp" style="font-size:24px"></i> 0851-5842-2664
                        </a>
                    </p>
                </div>
                <div class="col-md pb-2">
                    <h1 class="fs-3">Jam Operasional</h1>
                    <p>Senin - Sabtu 07:00 - 21:00 WIB</p>
                    <hr class="dropdown-divider">
                    <p>UGD Setiap Hari 24 Jam</p>
                    <hr class="dropdown-divider">
                </div>
                <div class="col-md pb-2">
                    <h1 class="fs-3">Penghargaan</h1>
                    <img src="img/Logo-KARS-2018-01-1-1024x1024.png" class="img-fluid logo-kars" alt="...">
                </div>
                <div class="text-center">
                    <p>© 2023 Copyright RS Qadr</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
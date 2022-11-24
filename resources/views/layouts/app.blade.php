<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diaregsi | Layanan Pendaftaran Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        {{-- fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="https://is3.cloudhost.id/storage-feb/logo-feb.png" class="img-fluid p-2" alt="logo-diaregsi" width="80px">
                    <img src="https://is3.cloudhost.id/storage-feb/logo-sistem/logo-diaregsy.png" class="img-fluid" alt="logo-diaregsi" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('pendaftaran.cek-nim') }}">Daftar</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pendaftaran
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('spl.list') }}">Studi Ekskursi</a></li>
                        <li><a class="dropdown-item" href="{{ route('magang.list') }}">Magang</a></li>
                        <li><a class="dropdown-item" href="#">Sempro</a></li>
                        <li><a class="dropdown-item" href="#">Kompre</a></li>
                        <li><a class="dropdown-item" href="{{ route('bimbinganSkripsi.list') }}">Bimbingan Skripsi</a></li>
                        <li><a class="dropdown-item" href="{{ route('ujianAkhir.list') }}">Ujian Skripsi</a></li>
                        <li><a class="dropdown-item" href="#">Yudisium</a></li>
                        <li><a class="dropdown-item" href="#">Mengulang</a></li>
                        <li><a class="dropdown-item" href="#">Semester Pendek</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
{{--
        <!-- banner -->
        <div class="container pt-5">
            <div class="row mt-5 banner">
                <div class="col-md-6">
                    <h1 class="text-dark">Diaregsi FEB</h1>
                    <p class="text-black-50">
                        Daftarkan Keperluan akademik kamu disini
                    </p>
                    <a href="#" class="btn btn-danger text-white shadow mt-4">Daftar Sekarang</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/banner.svg') }}" alt="" class="img-fluid" width="400px"/>
                </div>
            </div>
        </div>
        <!-- //banner --> --}}

        @yield('content')

        <!-- Footer -->
        <footer class="text-white text-center text-md-start" style="background-color: #161616; margin-top: 200px;">
            <div class="container-fluid p-4">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-11 p-3">
                        <div class="row d-flex justify-content-between">
                            <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
                                <img src="https://is3.cloudhost.id/storage-feb/assets/images/logo_feb_putih.png" class="d-block" style="height: 100px; width: 100px" alt="" />
                                <hr style="border: 1px solid #b6b7b7" />
                                <h5 class="h5" style="color: #b6b7b7">Fakultas Ekonomi dan Bisnis</h5>
                                <p style="color: #505050">Universitas Sains Al Qur’an Jawa Tengah di Wonosobo</p>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Tentang Fakultas</h5>

                                <p style="color: #505050">Sejarah Feb Unsiq</p>
                            </div>

                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase mb-3">Kontak</h5>

                                <div class="text-right" style="color: #505050">
                                    <p class="text-right">Jl. KH. Hasyim Asy'ari Km. 03, Kalibeber, Kec. Mojotengah, Kab. Wonosobo,</p>
                                    <p class="text-right">Jawa Tengah - 56351</p>
                                    <p class="text-right">Telp. : (0286) ******</p>
                                    <p class="text-right">Fax. : (0286) *******</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-center" style="background-color: #343434">
                    <div class="col-lg-11 d-flex justify-content-between align-items-center">
                        <div class="text-left p-3" style="color: #aeaeae">Copyright All Right Reserved 2022, Faculty of Economics and Business, UNSIQ</div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="" class="icon-footer">
                                <i class="fa fa-facebook-f p-3"></i>
                            </a>
                            <a href="" class="icon-footer">
                                <i class="fa fa-instagram p-3"></i>
                            </a>
                            <a href="" class="icon-footer">
                                <i class="fa fa-twitter p-3" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

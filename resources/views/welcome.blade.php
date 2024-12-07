<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="{{ asset('assets/img/logo.png') }}" alt="eLEARNING Logo" class="img-fluid"
                style="height: 80px; width: auto;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Login Sekarang<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/carousel-1.png') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Adaptif E-Learning
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Belajar Fleksibel, Sukses Optimal
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Belajar fleksibel di waktu dan tempat pilihanmu,
                                    dengan materi yang pas untuk mendukung suksesmu setiap hari</p>
                                <a href="{{ route('login') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login</a>
                                <a href="{{ route('registration') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('assets/frontend/img/carousel-2.png') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Adaptif E-Learning
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Get Educated Testing woiii Online
                                    From Your Home</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Belajar fleksibel di waktu dan tempat pilihanmu,
                                    dengan materi yang pas untuk mendukung suksesmu setiap hari</p>
                                <a href="{{ route('login') }}"
                                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Adaptasi Konten</h5>
                            <p>Siswa secara otomatis akan mengakses pembelajaran yang sesuai dengan kemampuannya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-comments text-primary mb-4"></i>
                            <h5 class="mb-3">Forum Diskusi</h5>
                            <p>
                                Siswa dapat saling berkomunikasi dan berkolaborasi melalui diskusi dalam kerangka
                                komunitas inkuiri
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h5 class="mb-3">Pelacakan Kemajuan </h5>
                            <p>Memantau progres belajar siswa agar dapat mengevaluasi dan mencapai tujuan pembelajaran
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h5 class="mb-3">Ujian Interaktif</h5>
                            <p>
                                Beragam kuis dan ujian yang dapat disesuaikan dengan kemampuan siswa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <lottie-player src="{{ asset('assets/img/animation.json') }}" background="transparent"
                            speed="1" class="w-11/12 h-11/12 ml-20" loop autoplay></lottie-player>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang E-Learning</h6>
                    <h1 class="mb-4">Selamat Datang di E-Learning Adaptif</h1>
                    <p class="mb-4">E-Learning adaptif ini adalah pembelajaran daring dengan kerangka komunitas
                        inkuiri yang mampu menyesuaikan konten pembelajaran secara otomatis. Lingkungan belajar daring
                        ini memiliki kemampuan beradaptasi dalam menyediakan konten pembelajaran sesuai dengan kebutuhan
                        siswa demi meningkatkan proses pengetahuan, pengalaman, pengembangan diri, dan kolaborasi siswa
                        dengan kerangka komunitas inkuiri untuk mencapai kompetensi dan tujuan pembelajaran. E-learning
                        ini akan mengklasifikasikan kemampuan awal siswa (model pembelajar), menyesuaikan struktur
                        konten materi yang akan dipelajari (model konten), memilihkan materi yang tepat sesuai dengan
                        kemampuan siswa (model adaptif), dan menyediakan konten instruksional dalam penyampaian materi
                        (model instruksional) sehingga mencapai keterampilan berpikir kritis.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('home') }}">Adaptif E-Learning</a>, All Right
                        Reserved.
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            Adaptif E-Learning &copy; 2024
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Spinner Start -->
    @include('layouts.spinner')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('components.navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('img/IMG-20250211-WA0006.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Kami</h6>
                    <h1 class="mb-4">Selamat Datang di eLEARNING</h1>
                    <p class="mb-4">Selamat datang di platform <strong>eLEARNING</strong>, tempat terbaik untuk
                        mengembangkan keterampilan, memperluas wawasan, dan belajar tanpa batas. Di era digital saat
                        ini, pembelajaran tidak lagi terbatas oleh ruang dan waktu. Melalui eLEARNING, Anda dapat
                        mengakses berbagai materi edukatif berkualitas tinggi kapan saja dan di mana saja.</p>
                    <p class="mb-4">Platform ini dirancang untuk mendukung proses belajar yang interaktif dan
                        fleksibel, baik untuk pelajar, mahasiswa, profesional, maupun siapa saja yang ingin meningkatkan
                        kompetensi diri. Dengan beragam topik dan instruktur berpengalaman, Anda akan menemukan
                        pengalaman belajar yang menyenangkan dan efektif.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- About Content End -->

    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    @include('layouts.scripts')

    <!-- Template Javascript -->
</body>

</html>

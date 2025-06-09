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
                    <h1 class="display-3 text-white animated slideInDown">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-1.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Siti Aisyah</h5>
                    <p>Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Seminar teknologi di SkillVana sangat membantu saya memahami tren terbaru
                            dalam pengembangan aplikasi web. Pematerinya luar biasa dan materi sangat aplikatif!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-2.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ahmad Santoso</h5>
                    <p>Data Analyst</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Bootcamp Data Science dari SkillVana memberikan saya keterampilan praktis
                            dalam analisis data. Sesi hands-on sangat membantu untuk proyek nyata!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Budi Hartono</h5>
                    <p>UI/UX Designer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Saya belajar banyak tentang desain antarmuka pengguna melalui bootcamp di
                            SkillVana. Instrukturnya inspiratif dan materinya sangat relevan dengan industri.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-4.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Rina Susanti</h5>
                    <p>Cybersecurity Specialist</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Seminar keamanan siber yang saya ikuti sangat informatif. Saya mendapatkan
                            wawasan baru tentang melindungi data dari ancaman siber!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    @include('layouts.scripts')

    <!-- Template Javascript -->
</body>

</html>

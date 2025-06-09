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

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/home1.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Seminar
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Ikuti Seminar Berkualitas
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Dapatkan wawasan baru dari para ahli di berbagai
                                    bidang melalui seminar informatif yang dirancang untuk mengembangkan pengetahuan
                                    Anda.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/home2.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Bootcamp
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Tingkatkan Skill dengan Bootcamp
                                </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Raih keterampilan praktis melalui bootcamp intensif
                                    yang membekali Anda dengan pengalaman belajar mendalam dan aplikatif.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
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
                            <h5 class="mb-3">Expert Speakers</h5>
                            <p>Dapatkan wawasan dari para ahli industri dengan pengalaman bertahun-tahun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Live & Interactive Sessions</h5>
                            <p>Belajar langsung dengan sesi interaktif dan Q&A.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Hands-on Workshops</h5>
                            <p>Praktek langsung dengan studi kasus dan proyek nyata.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Exclusive Learning Materials</h5>
                            <p>Akses materi eksklusif, e-book, dan rekaman seminar.</p>
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
                        <img class="img-fluid position-absolute w-100 h-100" src="img/IMG-20250211-WA0006.jpg"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to SkillVana</h1>
                    <p class="mb-4">SkillVana adalah platform yang menghubungkan calon peserta dengan berbagai seminar
                        dan bootcamp dari penyelenggara terpercaya. Kami bukan penyelenggara acara, melainkan pihak
                        ketiga yang membantu Anda menemukan program pelatihan terbaik sesuai kebutuhan Anda.</p>
                    <p class="mb-4">Melalui SkillVana, Anda dapat menjelajahi berbagai seminar dan bootcamp di
                        berbagai
                        bidang, mulai dari teknologi, bisnis, hingga pengembangan diri. Kami memastikan semua informasi
                        acara tersedia secara jelas dan transparan, sehingga Anda dapat dengan mudah memilih program
                        yang paling sesuai.
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expert Speakers</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Live & Interactive
                                Sessions</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Hands-on Workshops
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Exclusive Learning
                                Materials</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/IMG-20250211-WA0002.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rp 149.000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/IMG-20250211-WA0003.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rp 149.000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/IMG-20250211-WA0004.jpg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">Rp 149.000</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                                Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Siti Aisyah</h5>
                    <p>Software Developer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Seminar teknologi di SkillVana sangat membantu saya memahami tren terbaru
                            dalam pengembangan aplikasi web. Pematerinya luar biasa dan materi sangat aplikatif!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ahmad Santoso</h5>
                    <p>Data Analyst</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Bootcamp Data Science dari SkillVana memberikan saya keterampilan praktis
                            dalam analisis data. Sesi hands-on sangat membantu untuk proyek nyata!</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Budi Hartono</h5>
                    <p>UI/UX Designer</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Saya belajar banyak tentang desain antarmuka pengguna melalui bootcamp di
                            SkillVana. Instrukturnya inspiratif dan materinya sangat relevan dengan industri.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
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

    <!-- Chatbot Button and Widget -->
    <div class="chatbot-button" id="chatbotButton">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/chat.png" alt="Chat Icon">
    </div>

    <div class="chatbot-container" id="chatbotContainer">
        <div class="chatbot-header">
            <div class="chatbot-header-content">
                <img src="https://img.icons8.com/color/48/000000/leaf.png" alt="SkillVana Logo" class="chatbot-logo">
                <div>
                    <h4>SkillVana</h4>
                    <p>Umumnya membalas dalam satu menit</p>
                </div>
            </div>
            <span class="chatbot-close" id="chatbotClose">×</span>
        </div>
        <div class="chatbot-body" id="chatbotBody">
            <div class="chatbot-message bot-message">
                <p>Halo, selamat datang di SkillVana!</p>
                <p>Bagaimana kami bisa membantu Anda?</p>
                <span class="chatbot-timestamp">Baru saja</span>
            </div>
        </div>
        <div class="chatbot-footer">
            <input type="text" id="chatbotInput" placeholder="Ketik Pesan">
            <button id="chatbotSend">Kirim Pesan</button>
        </div>
        <div class="chatbot-branding">
            <p>Didukung oleh SkillVana</p>
        </div>
    </div>

    <style>
        /* Chatbot Button */
        .chatbot-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .chatbot-button img {
            width: 30px;
            height: 30px;
        }

        /* Chatbot Container */
        .chatbot-container {
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 350px;
            max-height: 500px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            display: none;
            flex-direction: column;
            z-index: 1000;
        }

        /* Chatbot Header */
        .chatbot-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .chatbot-header-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .chatbot-logo {
            width: 30px;
            height: 30px;
        }

        .chatbot-header h4 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .chatbot-header p {
            margin: 0;
            font-size: 12px;
            color: #666;
        }

        .chatbot-close {
            cursor: pointer;
            font-size: 20px;
            color: #666;
        }

        /* Chatbot Body */
        .chatbot-body {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background-color: #ece5dd;
        }

        .chatbot-message {
            margin-bottom: 15px;
        }

        .bot-message {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
        }

        .bot-message p {
            margin: 0;
            font-size: 14px;
            color: #333;
        }

        .chatbot-timestamp {
            font-size: 10px;
            color: #999;
            display: block;
            margin-top: 5px;
        }

        /* Chatbot Footer */
        .chatbot-footer {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .chatbot-footer input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
            margin-right: 10px;
        }

        .chatbot-footer button {
            background-color: #25D366;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
        }

        /* Chatbot Branding */
        .chatbot-branding {
            text-align: center;
            padding: 5px;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #ddd;
        }
    </style>

    <script>
        // Toggle Chatbot
        const chatbotButton = document.getElementById('chatbotButton');
        const chatbotContainer = document.getElementById('chatbotContainer');
        const chatbotClose = document.getElementById('chatbotClose');

        chatbotButton.addEventListener('click', () => {
            chatbotContainer.style.display = 'flex';
            chatbotButton.style.display = 'none';
        });

        chatbotClose.addEventListener('click', () => {
            chatbotContainer.style.display = 'none';
            chatbotButton.style.display = 'flex';
        });

        // Send Message to Gemini API
        const chatbotSend = document.getElementById('chatbotSend');
        const chatbotInput = document.getElementById('chatbotInput');
        const chatbotBody = document.getElementById('chatbotBody');

        chatbotSend.addEventListener('click', async () => {
            const message = chatbotInput.value.trim();
            if (!message) return;

            // Display user message
            const userMessage = document.createElement('div');
            userMessage.classList.add('chatbot-message', 'user-message');
            userMessage.innerHTML =
                `<p style="background-color: #dcf8c6; padding: 10px; border-radius: 10px; max-width: 80%; margin-left: auto;">${message}</p><span class="chatbot-timestamp">Baru saja</span>`;
            chatbotBody.appendChild(userMessage);
            chatbotBody.scrollTop = chatbotBody.scrollHeight;

            // Clear input
            chatbotInput.value = '';

            try {
                // Call Gemini API with the provided endpoint and API Key
                const apiKey = 'AIzaSyADb6Fn2zD73uo4SCEk4jvnlmlQYsjJdXg';
                const endpoint =
                    `https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=${apiKey}`;

                // Define SkillVana data and popular courses
                const skillVanaInfo = `
                    SkillVana adalah platform yang menghubungkan calon peserta dengan berbagai seminar dan bootcamp dari penyelenggara terpercaya. Kami bukan penyelenggara acara, melainkan pihak ketiga yang membantu Anda menemukan program pelatihan terbaik sesuai kebutuhan Anda. Melalui SkillVana, Anda dapat menjelajahi berbagai seminar dan bootcamp di berbagai bidang, mulai dari teknologi, bisnis, hingga pengembangan diri.
                `;
                const popularCourses = `
                    Kursus Populer di SkillVana:
                    - Laravel Bootcamp
                    - Belajar Bahasa Jepang
                    - Belajar HTML, CSS, dan JS
                    - Belajar Data Sains
                    - Belajar Big Data
                    - Belajar Python Dasar
                    - Belajar Machine Learning
                    - Belajar Basic Deep Learning
                `;
                const courseDetails = `
                    Penjelasan Kursus di SkillVana:
                    - Laravel Bootcamp: Mengajarkan dasar-dasar Laravel, framework PHP untuk membangun aplikasi web. Anda belajar pengelolaan database, routing, dan autentikasi pengguna. Cocok untuk pemula yang ingin jadi web developer.
                    - Belajar Bahasa Jepang: Kursus untuk pemula yang ingin menguasai bahasa Jepang, fokus pada kosakata dasar, tata bahasa, dan percakapan sehari-hari.
                    - Belajar HTML, CSS, dan JS: Mempelajari dasar-dasar pembuatan website, seperti struktur halaman (HTML), desain (CSS), dan interaktivitas (JavaScript). Cocok untuk pemula di web design.
                    - Belajar Data Sains: Kursus tentang analisis data, meliputi pengolahan data, visualisasi, dan dasar-dasar statistik. Cocok untuk yang ingin jadi data analyst.
                    - Belajar Big Data: Mengenal konsep big data, pengelolaan data besar, dan alat seperti Hadoop. Untuk pemula yang tertarik pada data skala besar.
                    - Belajar Python Dasar: Kursus pemrograman Python untuk pemula, fokus pada sintaks dasar, logika pemrograman, dan proyek sederhana.
                    - Belajar Machine Learning: Mengenal dasar-dasar machine learning, seperti algoritma dasar dan pengolahan data untuk prediksi. Cocok untuk pemula di AI.
                    - Belajar Basic Deep Learning: Kursus tentang deep learning, fokus pada jaringan saraf tiruan dan dasar-dasar AI. Untuk yang ingin eksplorasi AI lebih dalam.
                `;

                // Construct the prompt with SkillVana data in Indonesian, short responses
                const prompt = `
                    Anda adalah asisten untuk SkillVana. Informasi: ${skillVanaInfo}
                    ${popularCourses}
                    ${courseDetails}
                    Jawab pertanyaan seputar SkillVana saja, singkat, berdasarkan info di atas. Jika ada pertanyaan tentang kursus, jelaskan sesuai info courseDetails. Jika tidak relevan, balas 'Maaf, saya lebih fokus ke SkillVana! Yuk, tanyakan tentang seminar atau bootcamp kami!' Pesan: ${message}
                `;

                const response = await fetch(endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        contents: [{
                            parts: [{
                                text: prompt
                            }]
                        }],
                        generationConfig: {
                            temperature: 0.7,
                            maxOutputTokens: 100 // Reduced for shorter responses
                        }
                    })
                });

                const data = await response.json();
                const botReply = data.candidates[0].content.parts[0].text.trim() ||
                    'Saya bantu soal SkillVana, tanya lagi ya!';

                // Display bot reply
                const botMessage = document.createElement('div');
                botMessage.classList.add('chatbot-message', 'bot-message');
                botMessage.innerHTML = `<p>${botReply}</p><span class="chatbot-timestamp">Baru saja</span>`;
                chatbotBody.appendChild(botMessage);
                chatbotBody.scrollTop = chatbotBody.scrollHeight;
            } catch (error) {
                console.error('Error:', error);
                const errorMessage = document.createElement('div');
                errorMessage.classList.add('chatbot-message', 'bot-message');
                errorMessage.innerHTML =
                    `<p>Maaf, error. Coba lagi.</p><span class="chatbot-timestamp">Baru saja</span>`;
                chatbotBody.appendChild(errorMessage);
                chatbotBody.scrollTop = chatbotBody.scrollHeight;
            }
        });

        // Send message on Enter key
        chatbotInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                chatbotSend.click();
            }
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

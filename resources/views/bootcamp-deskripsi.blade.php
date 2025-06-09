@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Gunakan gambar dari database -->
                <img src="{{ asset($bootcamp->image) }}" class="img-fluid rounded mb-4" alt="Course Banner">

                <div class="d-flex align-items-center mb-2">
                    <span class="fw-bold">By {{ $bootcamp->instructor }}</span>
                    <span class="ms-2 text-warning">★★★★★ (25 Reviews)</span>
                </div>

                <!-- Judul bootcamp dari database -->
                <h2 class="fw-bold">{{ $bootcamp->title }}</h2>

                <!-- Tab Navigation -->
                <ul class="nav nav-tabs mb-4" id="bootcampTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                            type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum"
                            type="button" role="tab" aria-controls="curriculum"
                            aria-selected="false">Curriculum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor"
                            type="button" role="tab" aria-controls="instructor"
                            aria-selected="false">Instructor</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="bootcampTabsContent">
                    <!-- Overview Tab -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                        <h3 class="fw-bold">Course Description</h3>
                        <p class="text-dark">{{ $bootcamp->description }}</p>

                        <h3 class="fw-bold">What You'll Learn From This Course</h3>
                        <ul class="list-unstyled">
                            @php
                                // Decode JSON learnings menjadi array
                                $learnings = json_decode($bootcamp->learnings, true);
                            @endphp

                            @if (is_array($learnings))
                                @foreach ($learnings as $learning)
                                    <li style="color: black;">✔ {{ $learning }}</li>
                                @endforeach
                            @else
                                <li style="color: black;">✔ {{ $bootcamp->learnings }}</li>
                            @endif
                        </ul>

                        <h3 class="fw-bold">Certification</h3>
                        <p class="text-dark">{{ $bootcamp->certification_info }}</p>
                    </div>

                    <!-- Curriculum Tab -->
                    <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
                        <h3 class="fw-bold">Curriculum</h3>
                        <p class="text-muted">Berikut kurikulum lengkap untuk bootcamp ini.</p>
                        <!-- Tambahkan konten kurikulum di sini -->
                        <ul>
                            <li class="text-muted">Pengenalan Dasar</li>
                            <li class="text-muted">Materi Lanjutan</li>
                            <li class="text-muted">Kerja Proyek</li>
                        </ul>

                    </div>

                    <!-- Instructor Tab -->
                    <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
                        <h3 class="fw-bold">Instructor</h3>
                        <p class="text-muted">Meet the instructor.</p>
                        <!-- Tambahkan informasi instruktur di sini -->
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('img/icon profile.png') }}" class="rounded-circle me-2" width="60"
                                alt="Instructor">
                            <div>
                                <h5>{{ $bootcamp->instructor }}</h5>
                                <p class="text-muted">Pengembang berpengalaman dengan lebih dari 10 tahun pengalaman di
                                    bidangnya.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <h3 class="fw-bold">Reviews</h3>
                        <p class="text-muted">What students are saying about this bootcamp.</p>
                        <!-- Tambahkan ulasan di sini -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/avatar.png') }}" class="rounded-circle me-2" width="40"
                                        alt="User">
                                    <h5 class="mb-0">John Doe</h5>
                                </div>
                                <p class="text-muted">"This bootcamp is amazing! I learned so much."</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{ asset('images/avatar.png') }}" class="rounded-circle me-2" width="40"
                                        alt="User">
                                    <h5 class="mb-0">Jane Smith</h5>
                                </div>
                                <p class="text-muted">"Highly recommended for beginners and advanced learners."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow rounded-3">
                    <!-- Gambar bootcamp dari database -->
                    <img src="{{ asset($bootcamp->image) }}" class="card-img-top rounded-top"
                        alt="Course Sidebar Image">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📅 Start Date</span>
                                <span>{{ $bootcamp->start_date->format('d M, Y') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>👥 Enrolled</span>
                                <span>{{ $bootcamp->students }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📚 Lectures</span>
                                <span>{{ $bootcamp->lectures }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🎓 Skill Level</span>
                                <span>{{ $bootcamp->skill_level }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🗣 Language</span>
                                <span>{{ $bootcamp->language }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📝 Quizzes</span>
                                <span>{{ $bootcamp->quizzes }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🎖 Certificate</span>
                                <span>{{ $bootcamp->certificate ? 'Yes' : 'No' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>✅ Pass Percentage</span>
                                <span>{{ $bootcamp->pass_percentage }}%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📅 Deadline</span>
                                <span>{{ \Carbon\Carbon::parse($bootcamp->deadline)->format('d M, Y') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>👨‍🏫 Instructor</span>
                                <span>{{ $bootcamp->instructor }}</span>
                            </li>
                        </ul>

                        <div class="text-center mt-4">
                            <div class="price-container">
                                <div class="price-box">
                                    @php
                                        // Format prices to Rupiah
                                        $formattedDiscountedPrice =
                                            'Rp ' . number_format($bootcamp->discounted_price * 1000, 0, ',', '.');
                                        $formattedOriginalPrice =
                                            'Rp ' . number_format($bootcamp->original_price * 1000, 0, ',', '.');
                                    @endphp
                                    Price: <span class="text-primary">{{ $formattedDiscountedPrice }}</span>
                                    <del>{{ $formattedOriginalPrice }}</del>
                                </div>
                                @auth
                                    <input type="hidden" id="first_name" value="{{ auth()->user()->name }}">
                                    <input type="hidden" id="email" value="{{ auth()->user()->email }}">
                                    <button id="pay-button" class="btn btn-custom">Buy Now</button>
                                    <a href="{{ route('bootcamp-detail', $bootcamp->id) }}" id="go-bootcamp-button"
                                        class="btn btn-custom" style="display: none;">Go Bootcamp →</a>
                                @else
                                    <p class="text-muted">You need to <a href="{{ route('register') }}"
                                            class="text-primary">register</a> to purchase this bootcamp.</p>
                                    <button onclick="window.location.href='{{ route('register') }}'"
                                        class="btn btn-custom">Register Now</button>
                                @endauth
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <span class="fw-bold">Share:</span>
                            <a href="#" class="ms-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="ms-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="ms-2"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script Midtrans Snap.js -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('services.midtrans.clientKey') }}"></script>

    <!-- Tambahkan script untuk menangani pembayaran -->
    <script type="text/javascript">
        @auth
        // Fungsi untuk mengecek status pembayaran
        function checkPaymentStatus() {
            fetch('/check-payment-status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        bootcamp_id: {{ $bootcamp->id }},
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        // Jika pembayaran sudah berhasil, tampilkan tombol "Go Bootcamp"
                        document.getElementById('pay-button').style.display = 'none';
                        document.getElementById('go-bootcamp-button').style.display = 'inline-block';
                    } else {
                        // Jika pembayaran belum berhasil, tampilkan tombol "Buy Now"
                        document.getElementById('pay-button').style.display = 'inline-block';
                        document.getElementById('go-bootcamp-button').style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Panggil fungsi checkPaymentStatus saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            checkPaymentStatus();
        });

        // Fungsi untuk menangani pembayaran
        document.getElementById('pay-button').onclick = function() {
            const firstName = document.getElementById('first_name').value;
            const email = document.getElementById('email').value;

            if (!firstName || !email) {
                alert('Please fill in your first name and email.');
                return;
            }

            fetch('/get-snap-token', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        bootcamp_id: {{ $bootcamp->id }},
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.snap_token) {
                        snap.pay(data.snap_token, {
                            onSuccess: function(result) {
                                // Simpan data pembelian ke database
                                fetch('/purchase', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                        },
                                        body: JSON.stringify({
                                            bootcamp_id: {{ $bootcamp->id }},
                                            first_name: firstName,
                                            email: email,
                                            discounted_price: {{ $bootcamp->discounted_price }},
                                            title: '{{ $bootcamp->title }}',
                                            payment_status: 'success', // Update status pembayaran
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        alert('Payment and purchase recorded successfully!');
                                        checkPaymentStatus(); // Periksa ulang status pembayaran
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                    });
                            },
                            onPending: function(result) {
                                alert('Payment is pending!');
                            },
                            onError: function(result) {
                                alert('Payment failed!');
                            }
                        });
                    } else {
                        alert('Error getting Snap token');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        };
        @endauth
    </script>
@endsection

@extends('layouts.app')

@section('title', $seminar->title)

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">{{ $seminar->title }}</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="mb-4">
                    <img src="{{ asset($seminar->image) }}" alt="{{ $seminar->title }}" class="rounded mb-4"
                        style="width: 800px; height: 550px; object-fit: contain;">
                </div>
                <h5>By {{ $seminar->instructor }}
                    <span class="text-warning">{{ number_format($seminar->rating, 1) }} ★ ({{ $seminar->review_count }}
                        Reviews)</span>
                </h5>
                <h2>Course Description</h2>
                <p>{{ $seminar->description }}</p>
                <h3>Apa yang Akan Anda Pelajari dari seminar Ini</h3>
                <ul>
                    <li>Membangun relasi dengan teman-teman.</li>
                    <li>Mendapatkan materi - materi yang tidak di dapatkan yang lain</li>
                </ul>
                <h3>Certification</h3>
                <p>Mendapatkan sertifikat setelah mengikuti seminar ini</p>
            </div>
            <div class="col-md-4">
                <div class="card shadow rounded-3">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📅 Start Date</span>
                                <span>{{ \Carbon\Carbon::parse($seminar->start_date)->format('d M, Y') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>👥 Enrolled</span>
                                <span>{{ $seminar->students }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📚 Lectures</span>
                                <span>{{ $seminar->lectures }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🎓 Skill Level</span>
                                <span>{{ $seminar->skill_level }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🗣 Language</span>
                                <span>{{ $seminar->language }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📝 Quizzes</span>
                                <span>{{ $seminar->quizzes }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>🎖 Certificate</span>
                                <span>{{ $seminar->certificate ? 'Yes' : 'No' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>✅ Pass Percentage</span>
                                <span>{{ $seminar->pass_percentage }}%</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>📅 Deadline</span>
                                <span>{{ \Carbon\Carbon::parse($seminar->deadline)->format('d M, Y') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>👨‍🏫 Instructor</span>
                                <span>{{ $seminar->instructor }}</span>
                            </li>
                        </ul>
                        <!-- Harga -->
                        <div class="text-center mt-3">
                            <h4 class="text-danger">
                                Rp{{ number_format($seminar->discounted_price, 0, ',', '.') }}
                                <del class="text-muted">Rp{{ number_format($seminar->price, 0, ',', '.') }}</del>
                            </h4>
                        </div>
                        <div class="text-center mt-4">
                            <div class="d-flex justify-content-center">
                                <a href="https://www.instagram.com/ferdynata28?igsh=MW55NTFsbHJoczZ0Yg== target=" _blank"
                                    class="btn btn-custom me-3" style="width: 200px; height: 80px;" id="read-more-btn">Baca
                                    Selengkapnya</a>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSciDtd_I0dWTRUf6Fi1qEVk6r_yumj5D17CdF5sRGkgIPbNMA/viewform?usp=sharing"
                                    class="btn btn-custom" style="width: 200px; height: 80px;" target="_blank">Daftar
                                    Sekarang</a>
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
@endsection

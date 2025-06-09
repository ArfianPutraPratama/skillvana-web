@extends('layouts.app')

@section('title', 'Bootcamp')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Bootcamp</h1>

        <div class="d-flex justify-content-center mb-4 flex-wrap">
            @foreach ($categories as $key => $name)
                <div class="p-2">
                    <div class="badge custom-badge {{ $key }}-badge" onclick="showContent('{{ $key }}')">
                        {{ $name }} <br> {{ number_format(mt_rand(100000, 8000000), 0, ',', '.') }} learners</div>
                </div>
            @endforeach
        </div>

        <div id="content" class="mb-4">
            @foreach ($categories as $key => $name)
                <div id="{{ $key }}" class="course-content" style="display: none;">
                    <div class="row mt-3">
                        @if (isset($bootcampsByCategory[$key]) && $bootcampsByCategory[$key]->isNotEmpty())
                            @foreach ($bootcampsByCategory[$key] as $bootcamp)
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="position-relative">
                                            <img src="{{ asset($bootcamp->image) }}" class="card-img-top"
                                                alt="Course Image">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                Rp{{ number_format($bootcamp->discounted_price, 0, ',', '.') }}
                                                <del>Rp{{ number_format($bootcamp->original_price, 0, ',', '.') }}</del>
                                            </h5>
                                            <p class="card-text"><strong>{{ $bootcamp->title }}</strong></p>
                                            <p class="card-text"><i class="fas fa-clock"></i> {{ $bootcamp->duration }} <i
                                                    class="fas fa-user"></i> {{ $bootcamp->students }} Students</p>
                                            <a href="{{ route('bootcamp-deskripsi', $bootcamp->id) }}"
                                                class="btn btn-link">Enroll
                                                Now
                                                →</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No bootcamps available in this category.</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .custom-badge {
            background-color: #f8f9fa;
            color: #333;
            padding: 10px 15px;
            margin: 5px;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid #ddd;
            text-align: center;
            min-width: 120px;
        }

        .custom-badge.active {
            background-color: rgb(33, 177, 205);
            color: white;
            border-color: rgb(33, 177, 205);
            font-weight: bold;
        }

        .chatgpt-badge.active {
            background-color: rgb(33, 177, 205);
            color: white;
            border-color: rgb(33, 177, 205);
        }

        .data-science-badge.active {
            background-color: rgb(33, 177, 205);
            color: white;
            border-color: rgb(33, 177, 205);
        }

        .custom-badge:hover {
            background-color: rgb(33, 177, 205);
        }

        .custom-badge.active:hover {
            background-color: rgb(33, 177, 205);
        }

        .chatgpt-badge.active:hover {
            background-color: rgb(33, 177, 205);
        }

        .data-science-badge.active:hover {
            background-color: rgb(33, 177, 205);
        }
    </style>

    <script>
        function showContent(course) {
            const contents = document.querySelectorAll('.course-content');
            contents.forEach(content => {
                content.style.display = 'none';
            });

            const selectedContent = document.getElementById(course);
            if (selectedContent) {
                selectedContent.style.display = 'block';
            }

            const badges = document.querySelectorAll('.custom-badge');
            badges.forEach(badge => {
                badge.classList.remove('active');
            });

            const selectedBadge = document.querySelector(`.custom-badge[onclick*="${course}"]`);
            if (selectedBadge) {
                selectedBadge.classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const firstBadge = document.querySelector('.custom-badge');
            if (firstBadge) {
                firstBadge.classList.add('active');
                const firstContentId = firstBadge.getAttribute('onclick').match(/'([^']+)'/)[1];
                const firstContent = document.getElementById(firstContentId);
                if (firstContent) {
                    firstContent.style.display = 'block';
                }
            }
        });
    </script>
@endsection

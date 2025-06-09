@extends('layouts.app')

@section('title', 'Web Design')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container py-5">
        <div class="row mb-4 align-items-center">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Search Course..." aria-label="Search Course">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="text-start mt-4"> <!-- Mengubah ke text-start untuk menyelaraskan ke kiri -->
                <button type="button" class="btn btn-warning me-2"
                    style="background-color:rgb(33, 177, 205); border: none; padding: 10px 20px; font-size: 16px; font-weight: bold; color: #000; border-radius: 5px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease;">
                    Seminar
                </button>
            </div>
        </div>

        <div id="content">
            <div class="row" id="bootcamp-content">
                <div ss="col-md-12">
                    <div class="list-group">
                        @foreach ($seminars as $seminar)
                            <a href="{{ url('/seminar/' . $seminar->id) }}"
                                class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 align-items-center">
                                    <img src="{{ asset($seminar->image) }}" alt="{{ $seminar->title }}"
                                        style="width: 180px; height: auto; object-fit: cover; border-radius: 8px; margin-right: 15px;">
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1">{{ $seminar->title }}</h5>
                                        <small>Instructor: {{ $seminar->instructor }}</small>
                                        <p class="mb-1">{{ $seminar->description }}</p>
                                        <div class="d-flex justify-content-between">
                                            <span class="text-warning">{{ $seminar->rating }} ★
                                                ({{ $seminar->review_count }})
                                            </span>
                                            <span class="text-danger">
                                                Rp{{ number_format($seminar->discounted_price, 0, ',', '.') }}
                                                <del>Rp{{ number_format($seminar->price, 0, ',', '.') }}</del>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- Tambahkan lebih banyak episode sesuai kebutuhan -->
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Tombol Show All Data Science Courses -->
            <div class="text-start mt-4">
                <a href="{{ url('/seminar') }}" class="btn btn-outline-primary">Show all Seminar</a>
            </div>
        </div>

        <div class="text-start mt-4"> <!-- Mengubah ke text-start untuk menyelaraskan ke kiri -->
            <button type="button" class="btn btn-warning me-2"
                style="background-color:rgb(33, 177, 205); border: none; padding: 10px 20px; font-size: 16px; font-weight: bold; color: #000; border-radius: 5px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.3s ease;">
                Bootcamp
            </button>
        </div>

        <!-- Desain Kursus -->
        <div class="row mt-3">
            @foreach ($bootcamps as $bootcamp)
                <div class="col-md-3">
                    <div class="card">
                        <div class="position-relative">
                            <img src="{{ asset($bootcamp->image) }}" class="card-img-top" alt="Course Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rp{{ number_format($bootcamp->discounted_price, 0, ',', '.') }}
                                <del>Rp{{ number_format($bootcamp->original_price, 0, ',', '.') }}</del>
                            </h5>
                            <p class="card-text"><strong>{{ $bootcamp->title }}</strong></p>
                            <p class="card-text"><i class="fas fa-clock"></i> {{ $bootcamp->duration }} <i
                                    class="fas fa-user"></i> {{ $bootcamp->students }} Students</p>
                            <a href="{{ route('bootcamp-deskripsi', $bootcamp->id) }}" class="btn btn-link">Enroll Now
                                →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-start mt-4">
            <a href="{{ route('bootcamp.index') }}" class="btn btn-outline-primary">Show all Bootcamp</a>
        </div>
    </div>
    </div>
@endsection

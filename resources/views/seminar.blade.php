@extends('layouts.app')

@section('title', 'Seminar')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Seminar</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Seminar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Seminar</h6>
            <h1 class="mb-5">Daftar Seminar</h1>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="list-group">
                    @forelse ($seminars as $seminar)
                        <a href="{{ route('seminar.detail', $seminar->id) }}"
                            class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 align-items-center">
                                <img src="{{ asset($seminar->image) }}" alt="{{ $seminar->title }}"
                                    style="width: 180px; height: auto; object-fit: cover; border-radius: 8px; margin-right: 15px;">
                                <div class="flex-grow-1">
                                    <h5 class="mb-1">{{ $seminar->title }}</h5>
                                    <small>Instruktur: {{ $seminar->instructor }}</small>
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
                    @empty
                        <p class="text-center">Tidak ada seminar tersedia saat ini.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Bootcamp Detail')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <div class="embed-responsive embed-responsive-16by9 mb-4 video-container">
                @if($bootcamp->modules->isNotEmpty() && $bootcamp->modules->first()->videos->isNotEmpty())
                <iframe id="videoPlayer" class="embed-responsive-item"
                    src="https://www.youtube.com/embed/{{ $bootcamp->modules->first()->videos->first()->youtube_video_id }}"
                    allowfullscreen></iframe>
                @else
                <div class="alert alert-warning">No videos available</div>
                @endif
            </div>
            <div class="grow-section">
                <h2>{{ $bootcamp->title }}</h2>
                <p>By {{ $bootcamp->instructor }} <span class="text-warning">★★★★☆ (25 Reviews)</span></p>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <!-- Tab headers tetap sama -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview-tab">
                            <h3>Course Description</h3>
                            <p>{{ $bootcamp->description }}</p>

                            @if($bootcamp->learnings)
                            <h3>What You'll Learn From This Course</h3>
                            <ul>
                                @foreach(json_decode($bootcamp->learnings) as $learning)
                                <li>{{ $learning }}</li>
                                @endforeach
                            </ul>
                            @endif

                            <h3>Certification</h3>
                            <p>{{ $bootcamp->certification_info }}</p>
                        </div>

                        <!-- Tambahkan konten untuk tab lainnya -->
                    </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Konten Kursus -->
    <div class="col-md-4">
        <h4>Konten kursus</h4>
        <div class="accordion" id="courseContent">
            @foreach($bootcamp->modules as $index => $module)
            <div class="card">
                <div class="card-header" id="heading{{ $module->id }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link d-flex justify-content-between align-items-center" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $module->id }}" aria-expanded="false"
                            onclick="toggleArrow(this)">
                            {{ $module->name }}
                            <span class="fas fa-chevron-down"></span>
                        </button>
                    </h2>
                </div>

                <div id="collapse{{ $module->id }}" class="collapse" aria-labelledby="heading{{ $module->id }}"
                    data-parent="#courseContent">
                    <div class="card-body">
                        <ul>
                            @foreach($module->videos as $video)
                            <li>
                                <a href="#" onclick="changeVideo('{{ $video->youtube_video_id }}')"
                                    class="d-flex justify-content-between align-items-center">
                                    {{ $video->title }}
                                    <span>{{ $video->duration }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>

<script>
    function changeVideo(videoId) {
        const videoPlayer = document.getElementById('videoPlayer');
        videoPlayer.src = `https://www.youtube.com/embed/${videoId}`;
    }

    function toggleArrow(button) {
        const arrow = button.querySelector('.fas');
        arrow.classList.toggle('fa-chevron-down');
        arrow.classList.toggle('fa-chevron-up');
    }
</script>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Navbar Fix */
        .navbar {
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        /* Main Content Padding */
        .main-content {
            padding-top: 0px;
            min-height: 100vh;
        }

        /* Certificate Badge */
        .certificate-badge {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .certificate-badge:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .certificate-claimed {
            background-color: #6c757d;
            cursor: not-allowed;
        }

        .certificate-claimed:hover {
            background-color: #6c757d;
            transform: none;
            box-shadow: none;
        }

        .certificate-progress-saving {
            animation: pulse 1.5s infinite;
        }

        .download-image {
            width: 24px;
            height: 24px;
            margin-left: 5px;
            transition: all 0.3s ease;
        }

        .download-image:hover {
            transform: scale(1.1);
        }

        /* Video Container */
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Guest Warning */
        .guest-warning {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1050;
            max-width: 300px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: none;
        }

        .sync-spinner {
            width: 1rem;
            height: 1rem;
            margin-right: 8px;
            display: inline-block;
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        /* Accordion and Video Links */
        .grow-section {
            transition: all 0.3s ease;
        }

        .accordion .card-header button {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            text-align: left;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            background-color: #f8f9fa;
            border: none;
        }

        .accordion .card-header button:hover {
            background-color: #e9ecef;
        }

        .accordion .card-header button .fas {
            transition: transform 0.3s;
        }

        .accordion .card-header button[aria-expanded="true"] .fas {
            transform: rotate(180deg);
        }

        .video-link {
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #495057;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.2s ease;
            margin: 5px 0;
        }

        .video-link:hover {
            background-color: #e9f7ef;
            transform: translateX(5px);
        }

        .video-link.active {
            background-color: #d4edda;
            border-left: 3px solid #28a745;
        }

        .video-link.text-success {
            color: #28a745;
            font-weight: 500;
        }

        .video-link .fa-play-circle {
            margin-right: 8px;
            color: #6c757d;
        }

        .video-link.text-success .fa-play-circle {
            color: #28a745;
        }

        .progress-badge {
            transition: all 0.3s ease;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .main-content {
                padding-top: 70px;
            }

            .guest-warning {
                bottom: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
            }

            .certificate-badge {
                padding: 3px 8px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    @include('layouts.spinner')
    <!-- Spinner End -->
    <!-- Navbar Start -->
    @include('components.navbar')
    <!-- Navbar End -->
    <!-- Guest Warning -->
    <div id="guestWarning" class="alert alert-danger guest-warning alert-dismissible fade show" role="alert">
        <strong>Perhatian:</strong> Progres Anda hanya tersimpan di browser ini.
        <a href="{{ route('login') }}" class="alert-link">Login</a> untuk menyimpan progres di semua perangkat.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="container mt-5 main-content">
        <div class="row">
            <div class="col-md-8">
                <!-- Bootcamp Content -->
                <div class="embed-responsive embed-responsive-16by9 mb-4 video-container">
                    @if ($bootcamp->modules->isNotEmpty() && $bootcamp->modules->first()->videos->isNotEmpty())
                        <iframe id="videoPlayer" class="embed-responsive-item"
                            src="https://www.youtube.com/embed/{{ $bootcamp->modules->first()->videos->first()->youtube_video_id }}?enablejsapi=1&autoplay=0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    @else
                        <div class="alert alert-warning">No videos available</div>
                    @endif
                </div>
                <div class="grow-section">
                    <h2>{{ $bootcamp->title }}</h2>
                    <p>By {{ $bootcamp->instructor }} <span class="text-warning">★★★★☆ (25 Reviews)</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                data-bs-target="#overview" type="button" role="tab" aria-controls="overview"
                                aria-selected="true">Overview</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab"
                                data-bs-target="#curriculum" type="button" role="tab" aria-controls="curriculum"
                                aria-selected="false">Curriculum</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instructor-tab" data-bs-toggle="tab"
                                data-bs-target="#instructor" type="button" role="tab" aria-controls="instructor"
                                aria-selected="false">Instructor</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                                type="button" role="tab" aria-controls="reviews"
                                aria-selected="false">Reviews</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview-tab">
                            <h3>Course Description</h3>
                            <p>{{ $bootcamp->description }}</p>
                            <h3>What You'll Learn From This Course</h3>
                            <ul>
                                @foreach (explode("\n", $bootcamp->learning_outcomes) as $outcome)
                                    <li>{{ $outcome }}</li>
                                @endforeach
                            </ul>
                            <h3>Certification</h3>
                            <p>Upon completion of all course materials and passing the final assessment, you will
                                receive a certificate of completion.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Course Content Sidebar -->
            <div class="col-md-4">
                <div class="sticky-top" style="top: 20px;">
                    <h4>Course Content
                        @if (auth()->check())
                            @if ($userProgress && $userProgress->progress_percentage >= 100)
                                <span id="progressPercentage"
                                    class="certificate-badge {{ $userProgress->certificate_claimed ? 'certificate-claimed' : '' }}"
                                    title="{{ $userProgress->certificate_claimed ? 'Certificate already claimed' : 'Click to claim certificate' }}"
                                    @if (!$userProgress->certificate_claimed) onclick="claimCertificate()" @endif>
                                    {{ $userProgress->certificate_claimed ? 'Certificate Claimed' : 'Claim Certificate' }}
                                    <img src="{{ asset('img/certificate.png') }}" class="download-image"
                                        alt="Certificate Icon">
                                </span>
                            @else
                                <span id="progressPercentage" class="badge bg-secondary progress-badge">
                                    {{ $userProgress ? round($userProgress->progress_percentage) . '%' : '0%' }}
                                </span>
                            @endif
                        @else
                            <span class="badge bg-secondary"
                                title="Login to track progress and claim certificates">Login to track progress</span>
                        @endif
                        <small id="saveIndicator" class="text-muted ms-2" style="display: none;">
                            <span class="sync-spinner spinner-border spinner-border-sm" role="status"></span>
                            <span class="save-text">Saving...</span>
                        </small>
                    </h4>
                    <div class="accordion" id="courseContent">
                        @foreach ($bootcamp->modules as $index => $module)
                            <div class="card mb-2">
                                <div class="card-header p-0" id="heading{{ $module->id }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $module->id }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $module->id }}">
                                            {{ $module->name }}
                                            <span class="fas fa-chevron-down float-end"></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $module->id }}"
                                    class="collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $module->id }}" data-parent="#courseContent">
                                    <div class="card-body p-2">
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($module->videos as $videoIndex => $video)
                                                <li class="mb-1">
                                                    <a href="javascript:void(0)"
                                                        onclick="changeVideo('{{ $video->youtube_video_id }}', this, {{ $index }}, {{ $videoIndex }})"
                                                        class="video-link {{ $index === 0 && $videoIndex === 0 ? 'active' : '' }} {{ ($userProgress && $userProgress->progress_percentage >= 100) || ($userProgress && in_array($video->youtube_video_id, $userProgress->watched_videos)) ? 'text-success' : '' }}"
                                                        data-video-id="{{ $video->youtube_video_id }}"
                                                        data-module-index="{{ $index }}"
                                                        data-video-index="{{ $videoIndex }}"
                                                        title="Play {{ $video->title }}">
                                                        <i class="fas fa-play-circle"></i>
                                                        {{ $video->title }}
                                                        <span class="float-end">{{ $video->duration }}</span>
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
    </div>
    <!-- Footer Start -->
    @include('components.footer')
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        // Global variables
        const currentCourseId = '{{ $bootcamp->id }}';
        const isLoggedIn = {{ auth()->check() ? 'true' : 'false' }};
        let watchedVideos = {};
        let totalVideos = document.querySelectorAll('[data-video-id]').length;
        let currentVideoId =
            '{{ $bootcamp->modules->isNotEmpty() && $bootcamp->modules->first()->videos->isNotEmpty() ? $bootcamp->modules->first()->videos->first()->youtube_video_id : '' }}';
        let player = null;
        let syncInterval = null;
        let isCertificateReady = {{ $userProgress && $userProgress->progress_percentage >= 100 ? 'true' : 'false' }};
        let isCertificateClaimed = {{ $userProgress && $userProgress->certificate_claimed ? 'true' : 'false' }};
        let isRefreshing = false;
        let isInitialLoad = true;

        // Initialize when DOM is ready
        document.addEventListener('DOMContentLoaded', async () => {
            // Initialize progress
            const initialProgress = {!! json_encode(
                $userProgress
                    ? [
                        'watched_videos' => $userProgress->watched_videos,
                        'progress_percentage' => $userProgress->progress_percentage,
                        'certificate_claimed' => $userProgress->certificate_claimed,
                    ]
                    : null,
            ) !!};

            if (initialProgress) {
                watchedVideos = Array.isArray(initialProgress.watched_videos) ?
                    initialProgress.watched_videos.reduce((acc, id) => ({
                        ...acc,
                        [id]: true
                    }), {}) :
                    typeof initialProgress.watched_videos === 'object' ?
                    initialProgress.watched_videos : {};
                isCertificateClaimed = initialProgress.certificate_claimed || false;
                updateProgressUI();
                markWatchedVideos();
            }

            // Show guest warning
            if (!isLoggedIn) {
                setTimeout(() => {
                    const guestWarning = document.getElementById('guestWarning');
                    if (guestWarning) guestWarning.style.display = 'block';
                }, 5000);
            }

            // Load progress and initialize player
            await loadProgress();
            initYouTubePlayer();

            // Start sync for logged-in users
            if (isLoggedIn) {
                startSyncInterval();
            }

            isInitialLoad = false;
        });

        // Load progress from API
        async function loadProgress() {
            if (!isLoggedIn) {
                loadLocalProgress();
                return;
            }

            try {
                const response = await fetch(`/bootcamp/progress/${currentCourseId}`, {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    cache: 'no-store',
                });

                if (!response.ok) throw new Error('Failed to load progress');

                const data = await response.json();
                if (data.success && data.progress) {
                    watchedVideos = (data.progress.watched_videos || []).reduce(
                        (acc, id) => ({
                            ...acc,
                            [id]: true
                        }), {}
                    );
                    isCertificateReady = data.progress.progress_percentage >= 100;
                    isCertificateClaimed = data.progress.certificate_claimed || false;
                    updateProgressUI();
                    markWatchedVideos();
                }
            } catch (error) {
                console.error('Error loading progress:', error);
                loadLocalProgress();
            }
        }

        // Save progress to server
        async function saveProgressToServer() {
            if (isRefreshing) return false;

            try {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                showSavingIndicator();

                const response = await fetch(`/bootcamp/save-progress/${currentCourseId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        watched_videos: Object.keys(watchedVideos).filter(id => watchedVideos[id]),
                        progress_percentage: calculatePercentage(),
                        certificate_claimed: isCertificateClaimed,
                    }),
                });

                if (response.status === 419) {
                    const newToken = await refreshCsrfToken();
                    if (newToken) return await saveProgressToServer();
                    throw new Error('Failed to refresh CSRF token');
                }

                if (!response.ok) throw new Error('Failed to save progress');

                hideSavingIndicator();
                return true;
            } catch (error) {
                console.error('Error saving progress:', error);
                hideSavingIndicator();
                return false;
            }
        }

        // Refresh CSRF token
        async function refreshCsrfToken() {
            try {
                const response = await fetch('/refresh-csrf', {
                    method: 'GET',
                    credentials: 'same-origin',
                });
                if (response.ok) {
                    const data = await response.json();
                    document.querySelector('meta[name="csrf-token"]').content = data.token;
                    return data.token;
                }
            } catch (error) {
                console.error('Error refreshing CSRF token:', error);
            }
            return null;
        }

        // Calculate progress percentage
        function calculatePercentage() {
            const watchedCount = Object.keys(watchedVideos).length;
            return totalVideos > 0 ? Math.min(100, (watchedCount / totalVideos) * 100) : 0;
        }

        // Update progress UI
        function updateProgressUI() {
            const progressElement = document.getElementById('progressPercentage');
            if (!progressElement) return;

            const percentage = calculatePercentage();
            if (isCertificateReady || percentage >= 100) {
                progressElement.innerHTML = `
                    ${isCertificateClaimed ? 'Certificate Claimed' : 'Claim Certificate'}
                    <img src="{{ asset('img/certificate.png') }}"
                         class="download-image"
                         alt="Certificate Icon">
                `;
                progressElement.className = `certificate-badge ${isCertificateClaimed ? 'certificate-claimed' : ''}`;
                progressElement.title = isCertificateClaimed ?
                    'Certificate already claimed' :
                    'Click to claim certificate';
                progressElement.onclick = isCertificateClaimed ? null : claimCertificate;
            } else {
                progressElement.innerHTML = `${Math.round(percentage)}%`;
                progressElement.className = `badge progress-badge ${percentage > 0 ? 'bg-primary' : 'bg-secondary'}`;
                progressElement.title = 'Complete all videos to get certificate';
                progressElement.onclick = null;
            }
        }

        // Mark watched videos
        function markWatchedVideos() {
            document.querySelectorAll('.video-link').forEach(link => {
                const videoId = link.getAttribute('data-video-id');
                const shouldMark = watchedVideos[videoId] || isCertificateReady;
                link.classList.toggle('text-success', shouldMark);
            });
        }

        // Change video
        function changeVideo(videoId, element, moduleIndex, videoIndex) {
            document.querySelectorAll('.video-link').forEach(link => link.classList.remove('active'));
            element.classList.add('active');

            if (window.innerWidth < 768) {
                document.querySelector('.video-container').scrollIntoView({
                    behavior: 'smooth'
                });
            }

            if (player && player.loadVideoById) {
                player.loadVideoById(videoId);
            } else {
                document.getElementById('videoPlayer').src =
                    `https://www.youtube.com/embed/${videoId}?enablejsapi=1&autoplay=1`;
            }

            currentVideoId = videoId;

            if (!isCertificateReady && !watchedVideos[videoId]) {
                watchedVideos[videoId] = true;
                element.classList.add('text-success');
                updateProgressUI();
                saveAllProgress();
            }
        }

        // Initialize YouTube player
        function initYouTubePlayer() {
            if (typeof YT === 'undefined') {
                console.warn('YouTube API not loaded');
                return;
            }
            player = new YT.Player('videoPlayer', {
                events: {
                    onReady: onPlayerReady,
                    onStateChange: onPlayerStateChange,
                },
            });
        }

        function onPlayerReady(event) {
            if (!currentVideoId && document.querySelector('[data-video-id]')) {
                currentVideoId = document.querySelector('[data-video-id]').getAttribute('data-video-id');
            }
        }

        function onPlayerStateChange(event) {
            if (isCertificateReady || event.data !== YT.PlayerState.ENDED) return;
            if (currentVideoId && !watchedVideos[currentVideoId]) {
                watchedVideos[currentVideoId] = true;
                document.querySelectorAll(`[data-video-id="${currentVideoId}"]`).forEach(el => {
                    el.classList.add('text-success');
                });
                updateProgressUI();
                saveAllProgress();
            }
        }

        // Local storage functions
        function loadLocalProgress() {
            try {
                const localProgress = localStorage.getItem(`courseProgress_${currentCourseId}`);
                watchedVideos = localProgress ? JSON.parse(localProgress) : {};
                updateProgressUI();
                markWatchedVideos();
            } catch (error) {
                console.error('Error loading local progress:', error);
                watchedVideos = {};
            }
        }

        function saveProgressToLocalStorage() {
            try {
                localStorage.setItem(`courseProgress_${currentCourseId}`, JSON.stringify(watchedVideos));
                return true;
            } catch (error) {
                console.error('Error saving to localStorage:', error);
                return false;
            }
        }

        // Save all progress
        async function saveAllProgress() {
            if (isRefreshing) return false;
            return isLoggedIn ? await saveProgressToServer() : saveProgressToLocalStorage();
        }

        // Sync interval
        function startSyncInterval() {
            syncInterval = setInterval(async () => {
                await saveProgressToServer();
            }, 300000); // 5 minutes
        }

        // Heartbeat
        setInterval(() => {
            if (isLoggedIn) sendHeartbeat();
        }, 1800000); // 30 minutes

        // Heartbeat function
        async function sendHeartbeat() {
            try {
                await fetch('/heartbeat', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                });
            } catch (error) {
                console.error('Heartbeat failed:', error);
            }
        }

        // UI indicators
        function showSavingIndicator() {
            const indicator = document.getElementById('saveIndicator');
            if (indicator) indicator.style.display = 'inline-block';
        }

        function hideSavingIndicator() {
            const indicator = document.getElementById('saveIndicator');
            if (indicator) indicator.style.display = 'none';
        }

        function showError(message) {
            if (document.hidden) return;
            const toast = document.createElement('div');
            toast.className = 'position-fixed bottom-0 end-0 p-3';
            toast.style.zIndex = '2000';
            toast.innerHTML = `
                <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header bg-danger text-white">
                        <strong class="me-auto">Error</strong>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        ${message}
                    </div>
                </div>
            `;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.remove();
            }, 5000);
        }

        // Claim certificate
        async function claimCertificate() {
            if (!isLoggedIn) {
                showError('Please login to claim your certificate.');
                return;
            }
            if (isCertificateClaimed) {
                showError('You have already claimed this certificate.');
                return;
            }

            const progressElement = document.getElementById('progressPercentage');
            if (!progressElement) return;

            const originalHTML = progressElement.innerHTML;
            const originalClass = progressElement.className;
            const originalTitle = progressElement.title;
            const originalOnClick = progressElement.onclick;

            progressElement.innerHTML = `
                <span class="sync-spinner spinner-border spinner-border-sm" role="status"></span>
                Generating certificate...
            `;
            progressElement.className = 'certificate-badge certificate-progress-saving';
            progressElement.title = 'Generating certificate...';
            progressElement.onclick = null;

            try {
                const response = await fetch(`/certificate/claim/${currentCourseId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                    },
                });
                const data = await response.json();

                if (!response.ok || !data.success) {
                    throw new Error(data.message || 'Failed to claim certificate');
                }

                isCertificateClaimed = true;
                updateProgressUI();
                await downloadCertificate(data);
            } catch (error) {
                console.error('Certificate claim error:', error);
                progressElement.innerHTML = originalHTML;
                progressElement.className = originalClass;
                progressElement.title = originalTitle;
                progressElement.onclick = originalOnClick;
                showError(error.message);
                if (error.message.includes('already claimed')) {
                    isCertificateClaimed = true;
                    updateProgressUI();
                }
            }
        }

        // Download certificate
        async function downloadCertificate(data) {
            const downloadUrl = data.download_url || data.certificate_url;
            const filename = `Sertifikat_${currentCourseId}_${new Date().toISOString().slice(0,10)}.png`;
            try {
                const response = await fetch(downloadUrl);
                if (!response.ok) throw new Error('Failed to download certificate');
                const blob = await response.blob();
                const blobUrl = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none';
                a.href = blobUrl;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                window.URL.revokeObjectURL(blobUrl);
                document.body.removeChild(a);
            } catch (error) {
                console.error('Download certificate error:', error);
                try {
                    const newWindow = window.open(downloadUrl, '_blank');
                    if (!newWindow || newWindow.closed || typeof newWindow.closed === 'undefined') {
                        throw new Error('Popup blocked');
                    }
                } catch (windowError) {
                    console.error('Window open error:', windowError);
                    window.location.href = downloadUrl;
                }
            }
        }

        // Cleanup
        window.addEventListener('unload', () => {
            if (syncInterval) clearInterval(syncInterval);
        });

        window.addEventListener('beforeunload', () => {
            isRefreshing = true;
            if (syncInterval) clearInterval(syncInterval);
        });
    </script>
</body>

</html>

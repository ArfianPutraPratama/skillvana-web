<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{ asset('img/logo4.png') }}" alt="Logo" style="width: 120px; height: 120px; margin-right: 8px;">
        <h2 class="m-0 text-primary">SkillVana</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/about') }}"
                class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="{{ url('/web-design') }}"
                class="nav-item nav-link {{ request()->is('web-design') ? 'active' : '' }}">Courses</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{ request()->is('team') || request()->is('testimoni') || request()->is('404') ? 'active' : '' }}"
                    data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ url('/testimoni') }}"
                        class="dropdown-item {{ request()->is('testimoni') ? 'active' : '' }}">Testimonial</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}"
                class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </div>
        <a href="{{ route('register') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>

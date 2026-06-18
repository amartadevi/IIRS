<!-- Navbar Stylesheet -->
<link rel="stylesheet" href="{{ asset('components/navbar/navbar.css') }}">

<!-- Top Utility Information Bar -->
<header class="top-header text-white py-2 d-none d-lg-block">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="contact-info d-flex gap-4 align-items-center">
      <span class="fs-7"><i class="bi bi-geo-alt-fill me-2"></i>{{ setting('contact.address', 'Hala Road, Hyderabad') }}</span>
      <span class="fs-7"><i class="bi bi-telephone-fill me-2"></i>{{ setting('contact.phone', '+92 22 2030181') }}</span>
      <span class="fs-7"><i class="bi bi-envelope-fill me-2"></i>{{ setting('contact.email', 'info@israuniversity.edu.pk') }}</span>
    </div>
    <div class="d-flex align-items-center gap-3">
      <!-- Portals Links -->
      <div class="d-flex gap-3 me-3 border-end pe-3 border-secondary">
        <a href="{{ setting('contact.moodle_url', '#') }}" target="_blank" class="utility-link text-white text-decoration-none fs-7"><i class="bi bi-mortarboard-fill me-1 text-accent"></i>Moodle</a>
        <a href="{{ setting('contact.dreamspark_url', '#') }}" target="_blank" class="utility-link text-white text-decoration-none fs-7"><i class="bi bi-laptop-fill me-1 text-accent"></i>Dreamspark</a>
        <a href="{{ setting('contact.alumni_url', '#') }}" target="_blank" class="utility-link text-white text-decoration-none fs-7"><i class="bi bi-people-fill me-1 text-accent"></i>Alumni</a>
      </div>
      <!-- Social Icons -->
      <div class="d-flex gap-2">
        <a href="{{ setting('contact.twitter_url', '#') }}" class="social-icon text-white"><i class="bi bi-twitter-x"></i></a>
        <a href="{{ setting('contact.facebook_url', '#') }}" class="social-icon text-white"><i class="bi bi-facebook"></i></a>
        <a href="{{ setting('contact.youtube_url', '#') }}" class="social-icon text-white"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>
</header>

<!-- Sticky Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark main-header py-3 sticky-top">
  <div class="container">
    <!-- Logo Branding -->
    <a class="navbar-brand py-0 d-flex align-items-center gap-2" href="{{ url('/') }}" title="{{ setting('site.title', 'Isra Institute of Rehabilitation Sciences (IIRS) :: Isra University Islamabad Campus') }}">
      <div class="logo-wrapper d-flex align-items-center gap-2">
        <img src="{{ asset('storage/' . setting('site.logo', 'settings/isra_logo.png')) }}" alt="Isra University Logo" class="d-inline-block align-top logo-img">
        <div class="logo-divider d-none d-md-block" style="width:1px;height:44px;background:rgba(255,255,255,0.25);"></div>
        <img src="{{ asset('storage/settings/iirs_logo.png') }}" alt="IIRS Logo" class="d-none d-md-inline-block align-top iirs-logo-img" style="height:44px;width:auto;object-fit:contain;">
      </div>
      <div class="logo-text">
        <span class="logo-title">Isra Institute of</span>
        <span class="logo-subtitle">Rehabilitation Sciences (IIRS)</span>
      </div>
    </a>

    <!-- Hamburger mobile button toggler -->
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Main Menu Links for Large Screens -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center gap-2">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('news*') ? 'active' : '' }}" href="{{ url('/news') }}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('programs*') ? 'active' : '' }}" href="{{ url('/programs') }}">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('teachers*') ? 'active' : '' }}" href="{{ url('/teachers') }}">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('contact*') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Mobile Offcanvas Menu (Drawer) -->
<div class="offcanvas offcanvas-end text-bg-dark bg-dark-slate" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header py-4">
    <h5 class="offcanvas-title text-uppercase fw-bold text-accent" id="offcanvasNavbarLabel">Isra University</h5>
    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column justify-content-between">
    <div>
      <ul class="navbar-nav gap-2">
        <li class="nav-item">
          <a class="nav-link fs-6 {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 {{ request()->is('news*') ? 'active' : '' }}" href="{{ url('/news') }}">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 {{ request()->is('programs*') ? 'active' : '' }}" href="{{ url('/programs') }}">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 {{ request()->is('teachers*') ? 'active' : '' }}" href="{{ url('/teachers') }}">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 {{ request()->is('about*') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 {{ request()->is('contact*') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
        </li>
      </ul>
      <div class="d-grid mt-4">
        <a href="{{ url('/contact') }}" class="btn btn-accent text-uppercase fw-semibold py-2">Apply Now</a>
      </div>
    </div>

    <!-- Mobile portals section and social links -->
    <div class="border-top border-secondary pt-4 mt-auto">
      <div class="d-flex flex-column gap-3 mb-4">
        <h6 class="text-accent text-uppercase fw-semibold fs-7 mb-0">Student Portals</h6>
        <a href="{{ setting('contact.moodle_url', '#') }}" target="_blank" class="text-white text-decoration-none fs-6"><i class="bi bi-mortarboard-fill me-2 text-accent"></i>Moodle</a>
        <a href="{{ setting('contact.dreamspark_url', '#') }}" target="_blank" class="text-white text-decoration-none fs-6"><i class="bi bi-laptop-fill me-2 text-accent"></i>Dreamspark</a>
        <a href="{{ setting('contact.alumni_url', '#') }}" target="_blank" class="text-white text-decoration-none fs-6"><i class="bi bi-people-fill me-2 text-accent"></i>Alumni</a>
      </div>
      
      <div class="d-flex gap-3 justify-content-center border-top border-secondary-subtle pt-3">
        <a href="{{ setting('contact.twitter_url', '#') }}" class="social-icon-btn"><i class="bi bi-twitter-x"></i></a>
        <a href="{{ setting('contact.facebook_url', '#') }}" class="social-icon-btn"><i class="bi bi-facebook"></i></a>
        <a href="{{ setting('contact.youtube_url', '#') }}" class="social-icon-btn"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- Navbar Javascript -->
<script src="{{ asset('components/navbar/navbar.js') }}"></script>

@extends('layouts.app')

@section('title', 'News & Events | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad')
@section('meta_description', "Latest news, events, and announcements from the Isra Institute of Rehabilitation Sciences (IIRS), Isra University Islamabad.")

@section('styles')
  <style>
    /* Custom style specifically for the news page */
    .news-page-hero {
      background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
      padding: 5rem 0;
      position: relative;
      overflow: hidden;
      border-bottom: 4px solid var(--color-accent);
    }
    .news-page-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.08) 0%, transparent 50%);
      pointer-events: none;
    }
    .news-breadcrumb {
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.5px;
    }
    .news-breadcrumb a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }
    .news-breadcrumb a:hover {
      color: var(--color-accent);
    }
    .news-breadcrumb .active {
      color: var(--color-accent);
    }
    
    .news-grid-card {
      border-radius: var(--radius-md);
      border: 1px solid rgba(10, 31, 68, 0.05);
      background: var(--color-white);
      overflow: hidden;
      transition: var(--transition);
    }
    .news-grid-card:hover {
      transform: translateY(-8px);
      box-shadow: var(--shadow-lg);
      border-color: rgba(245, 166, 35, 0.15);
    }
    .news-image-container {
      position: relative;
      overflow: hidden;
      aspect-ratio: 16/9;
    }
    .news-image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .news-grid-card:hover .news-image-container img {
      transform: scale(1.08);
    }
    .news-date-badge {
      position: absolute;
      top: 1rem;
      left: 1rem;
      background: var(--color-accent);
      color: var(--color-white);
      padding: 0.35rem 0.85rem;
      border-radius: 6px;
      font-family: var(--font-heading);
      font-size: 0.75rem;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(245, 166, 35, 0.25);
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <main class="bg-light">
    <!-- Page Hero Banner -->
    <section class="news-page-hero text-white text-center text-md-start">
      <div class="container position-relative z-1">
        <div class="row align-items-center">
          <div class="col-md-8">
            <!-- Breadcrumbs -->
            <nav class="news-breadcrumb mb-3" aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News</li>
              </ol>
            </nav>
            <h1 class="display-5 fw-bold text-white mb-0" style="font-family: var(--font-heading);">News &amp; Events</h1>
            <p class="text-white-50 mt-2 mb-0" style="font-family: var(--font-body); font-size: 0.95rem;">Stay updated with academic achievements, milestones, and announcements from the Isra Institute of Rehabilitation Sciences (IIRS).</p>
          </div>
        </div>
      </div>
    </section>

    <!-- News List Section -->
    <section class="py-5" id="event" data-aos="fade-up">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-11">
            
            @forelse ($newses as $news)
            <!-- News Card -->
            <div class="news-grid-card shadow-sm mb-4">
              <a href="{{ route('news', $news->id) }}" class="text-decoration-none d-flex flex-column flex-md-row">
                <!-- Image Wrapper (Left) -->
                <div class="news-image-container col-md-5">
                  <img src="{{ asset('storage/' . $news->photo) }}" alt="{{ $news->title }}">
                  <div class="news-date-badge">
                    <i class="fa-regular fa-calendar me-1"></i> {{ date('M d, Y', strtotime($news->date)) }}
                  </div>
                </div>
                <!-- Content (Right) -->
                <div class="col-md-7 p-4 p-lg-5 d-flex flex-column justify-content-center">
                  <div>
                    <span class="badge mb-3" style="background-color: rgba(245, 166, 35, 0.15); color: var(--color-accent); font-family: var(--font-heading); font-size: 0.72rem; letter-spacing: 0.5px; text-transform: uppercase;">
                      <i class="fa-solid fa-award me-1"></i>News &amp; Events
                    </span>
                    <h3 class="fw-bold h5 text-dark mb-3 card-hover-title" style="font-family: var(--font-heading); line-height: 1.45;">
                      {{ $news->title }}
                    </h3>
                    <p class="text-muted fs-7 mb-4" style="font-family: var(--font-body); line-height: 1.7;">
                      {{ $news->excerpt }}
                    </p>
                    <span class="text-accent fw-bold fs-7 d-inline-flex align-items-center gap-1">
                      Read Details <i class="fa-solid fa-arrow-right-long ms-1 transition-transform"></i>
                    </span>
                  </div>
                </div>
              </a>
            </div>
            @empty
            <div class="text-center py-5 bg-white rounded shadow-sm p-4">
              <i class="fa-solid fa-newspaper text-muted mb-3 d-block" style="font-size: 3rem;"></i>
              <h4 class="fw-bold text-primary">No News Found</h4>
              <p class="text-muted">Stay tuned for future updates.</p>
            </div>
            @endforelse

          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@extends('layouts.app')

@section('title', 'News Detail | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad Campus')

@section('styles')
  <style>
    /* Custom style specifically for the news detail page hero */
    .news-detail-hero {
      background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
      padding: 5rem 0;
      position: relative;
      overflow: hidden;
      border-bottom: 4px solid var(--color-accent);
    }
    .news-detail-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.08) 0%, transparent 50%);
      pointer-events: none;
    }
    .news-detail-breadcrumb {
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.5px;
    }
    .news-detail-breadcrumb a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }
    .news-detail-breadcrumb a:hover {
      color: var(--color-accent);
    }
    .news-detail-breadcrumb .active {
      color: var(--color-accent);
    }
  </style>
@endsection

@section('content')
  <main class="bg-light">
    <!-- Page Hero Banner -->
    <section class="news-detail-hero text-white text-center text-md-start">
      <div class="container position-relative z-1">
        <div class="row align-items-center">
          <div class="col-md-10">
            <!-- Breadcrumbs -->
            <nav class="news-detail-breadcrumb mb-3" aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/news') }}">News</a></li>
                <li class="breadcrumb-item active" aria-current="page">News Detail</li>
              </ol>
            </nav>
            <h1 class="display-6 fw-bold text-white mb-0" style="font-family: var(--font-heading); line-height: 1.35;">{{ $news->title }}</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main Detail Section -->
    <section class="py-5" data-aos="fade-up">
      <div class="container py-3">
        <div class="row g-5">
          <!-- Text details column -->
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <div class="pe-lg-3">
              <span class="text-uppercase text-accent fw-bold letter-spacing-1 fs-7 mb-2 d-block" style="font-family: var(--font-heading);">Featured News</span>
              <h2 class="fw-bold text-dark mb-4 h3" style="font-family: var(--font-heading); line-height: 1.4;">{{ $news->title }}</h2>
              <p class="text-muted fs-6 mb-4" style="font-family: var(--font-body); line-height: 1.7;">{{ $news->excerpt }}</p>
              
              <div class="d-flex gap-4 text-muted fs-7 border-top pt-3" style="font-family: var(--font-heading);">
                <span><i class="fa-regular fa-calendar text-accent me-2"></i>{{ $news->date }}</span>
                <span><i class="fa-solid fa-location-dot text-accent me-2"></i>Isra University, Islamabad</span>
              </div>
            </div>
          </div>
          
          <!-- Image column -->
          <div class="col-lg-6">
            <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: var(--radius-md);">
              <img src="{{ asset('storage/' . $news->photo) }}" alt="{{ $news->title }}" class="img-fluid w-100 object-fit-cover" style="max-height: 400px; transition: transform 0.5s ease;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Summary Section -->
    <section class="pb-5" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bg-white p-5 rounded shadow-sm border-start border-4 border-accent" style="border-radius: var(--radius-md);">
              <h3 class="fw-bold mb-4 h5 text-dark" style="font-family: var(--font-heading);">Summary Details</h3>
              <p class="text-muted fs-6 mb-0" style="font-family: var(--font-body); line-height: 1.8;">{!! $news->description !!}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@extends('layouts.app')

@section('title', 'Offered Programs | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad Campus')

@section('styles')
  <link rel="stylesheet" href="{{ asset('components/offered_programs/offered_programs.css') }}">
  <style>
    /* Custom style specifically for the programs page */
    .programs-page-hero {
      background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
      padding: 5rem 0;
      position: relative;
      overflow: hidden;
      border-bottom: 4px solid var(--color-accent);
    }
    .programs-page-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.08) 0%, transparent 50%);
      pointer-events: none;
    }
    .programs-breadcrumb {
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.5px;
    }
    .programs-breadcrumb a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }
    .programs-breadcrumb a:hover {
      color: var(--color-accent);
    }
    .programs-breadcrumb .active {
      color: var(--color-accent);
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <main class="bg-light pb-5">
    <!-- Page Hero Banner -->
    <section class="programs-page-hero text-white text-center text-md-start">
      <div class="container position-relative z-1">
        <div class="row align-items-center">
          <div class="col-md-8">
            <!-- Breadcrumbs -->
            <nav class="programs-breadcrumb mb-3" aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Programs</li>
              </ol>
            </nav>
            <h1 class="display-5 fw-bold text-white mb-0" style="font-family: var(--font-heading);">Offered Programs</h1>
            <p class="text-white-50 mt-2 mb-0" style="font-family: var(--font-body); font-size: 0.95rem;">Building strong clinical foundations to create future-ready physical therapy and rehabilitation science leaders.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Programs list -->
    <section class="py-5" id="courses" data-aos="fade-up">
      <div class="container py-4">
        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-11">
            
            @forelse ($programs as $program)
            <!-- Horizontal Program Card -->
            <div class="program-card-horizontal card border-0 shadow-sm overflow-hidden mb-4">
              <!-- Image Section (Left) -->
              <div class="card-image-wrapper position-relative">
                <img src="{{ asset('storage/' . $program->image) }}"
                     alt="{{ $program->name }}"
                     class="img-fluid w-100 h-100 object-fit-cover">
                <!-- Overlay badge -->
                <div class="position-absolute top-0 start-0 m-3">
                  <span class="badge text-white py-2 px-3" style="background: rgba(10,31,68,0.75); font-family:'Poppins',sans-serif; font-size:0.72rem; border-radius:6px; backdrop-filter:blur(4px);">
                    <i class="bi bi-patch-check-fill me-1 text-warning"></i>HEC Recognized
                  </span>
                </div>
              </div>
              <!-- Content Section (Right) -->
              <div class="card-content-wrapper">
                <div>
                  <!-- Meta row -->
                  <div class="d-flex flex-wrap gap-3 mb-3">
                    <div class="duration-meta">
                      <i class="bi bi-calendar3 me-1"></i> Duration: {{ $program->duration }}
                    </div>
                    <div class="credit-meta">
                      {{ $program->credits }} Credit Hours
                    </div>
                  </div>
                  <!-- Title -->
                  <h3 class="program-title">
                    <a href="{{ route('program', $program->id) }}">{{ $program->name }}</a>
                  </h3>
                  <p class="text-muted fs-7 mb-4" style="font-family:'Inter',sans-serif; line-height:1.7;">
                    {{ $program->mission }}
                  </p>
                  <!-- Button -->
                  <a href="{{ route('program', $program->id) }}" class="btn-more-info">
                    <i class="bi bi-info-circle me-2"></i>More Info
                  </a>
                </div>
              </div>
            </div>
            @empty
            <div class="text-center py-5 bg-white rounded shadow-sm p-4">
              <i class="fa-solid fa-mortarboard text-muted mb-3 d-block" style="font-size: 3rem;"></i>
              <h4 class="fw-bold text-primary">No Programs Listed</h4>
              <p class="text-muted">Academic programs will be listed here soon.</p>
            </div>
            @endforelse

          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
<!-- Offered Programs Stylesheet -->
<link rel="stylesheet" href="{{ asset('components/offered_programs/offered_programs.css') }}">

<!-- ===== Offered Programs Section ===== -->
<section class="py-5 bg-white" id="courses">
  <div class="container py-3">

    <!-- Section Heading -->
    <div class="section-heading-block mb-5" data-aos="fade-up">
      <span class="section-label"><i class="bi bi-mortarboard-fill me-2"></i>Academic Programs</span>
      <h2 class="section-heading-accent mt-1">Offered Programs</h2>
      <p class="text-muted mt-2 fs-7">List of programs offered by the Isra Institute of Rehabilitation Sciences (IIRS)</p>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-9 col-md-11">

        @foreach ($programs as $program)
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
        @endforeach

      </div>
    </div>
  </div>
</section>

<!-- Offered Programs JavaScript -->
<script src="{{ asset('components/offered_programs/offered_programs.js') }}"></script>

@extends('layouts.app')

@section('title')
  {{ $teacher->name }} | Faculty Directory | Isra Institute of Rehabilitation Sciences (IIRS)
@endsection

@section('styles')
  <style>
    .teacher-detail-header {
      background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
      padding: 5rem 0;
      position: relative;
      border-bottom: 4px solid var(--color-accent);
    }
    .teacher-detail-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.08) 0%, transparent 50%);
      pointer-events: none;
    }
    .overlap-container {
      position: relative;
      z-index: 10;
      margin-top: -60px;
    }
    .image-overlap-card {
      background: #ffffff;
      padding: 15px;
      box-shadow: var(--shadow-md);
      border-radius: var(--radius-md);
      border: 1px solid rgba(10, 31, 68, 0.05);
    }
    .resume-banner {
      background-image: linear-gradient(rgba(7, 21, 53, 0.85), rgba(7, 21, 53, 0.85)), url('https://ee.israuniversity.edu.pk/img/books.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 5rem 0 0 0;
      border-bottom: 4px solid var(--color-accent);
    }
    .resume-banner h2 {
      font-family: var(--font-heading);
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--color-white) !important;
    }
    
    /* Tabs Navigation styling */
    #resumeTabs {
      border-bottom: none;
      display: inline-flex;
      gap: 4px;
      flex-wrap: wrap;
      justify-content: center;
    }
    #resumeTabs .nav-item {
      margin-bottom: 0;
    }
    #resumeTabs .nav-link {
      background-color: var(--color-accent);
      background-image: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%);
      color: #ffffff !important;
      border: none;
      border-radius: 6px 6px 0 0;
      font-family: var(--font-heading);
      font-weight: 600;
      font-size: 0.9rem;
      padding: 12px 25px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.28s ease;
      box-shadow: 0 -2px 10px rgba(10, 31, 68, 0.05);
    }
    #resumeTabs .nav-link:hover {
      filter: brightness(1.08);
      transform: translateY(-2px);
    }
    #resumeTabs .nav-link.active {
      background-image: none !important;
      background-color: #ffffff !important;
      color: var(--color-primary) !important;
      transform: translateY(0);
    }
    
    .resume-tab-pane-content {
      font-family: var(--font-body);
      font-size: 0.92rem;
      line-height: 1.7;
      color: var(--color-text-dark);
      text-align: left;
    }
    .resume-tab-pane-content ul {
      padding-left: 20px;
    }
    .resume-tab-pane-content li {
      margin-bottom: 8px;
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <main class="bg-light pb-5">
    
    <!-- Colored Header (Navy Banner) -->
    <section class="teacher-detail-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-start">
            <a href="{{ url('/teachers') }}" class="text-white-50 text-decoration-none small mb-3 d-inline-flex align-items-center gap-1">
              <i class="fa-solid fa-arrow-left"></i> Back to Faculty Directory
            </a>
            <h1 class="display-6 fw-bold text-white mb-2" style="font-family: var(--font-heading); line-height: 1.25;">
              {{ $teacher->name }}
            </h1>
            <span class="badge text-uppercase py-2 px-3 fs-7" style="background: var(--color-accent-light); color: var(--color-accent); font-family: var(--font-heading); font-weight: 600; border: 1px solid rgba(245, 166, 35, 0.3);">
              {{ $teacher->designation }}
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- Overview Overlap Section -->
    <section class="overlap-container mb-5" data-aos="fade-up">
      <div class="container">
        <div class="row g-4 align-items-start">
          
          <!-- Left Overlapping Profile Pic -->
          <div class="col-md-4">
            <div class="image-overlap-card text-center shadow-sm">
              <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid w-100 object-fit-cover rounded" style="max-height: 380px;">
              <div class="mt-3 mb-2">
                <span class="badge bg-secondary-subtle text-secondary text-uppercase fw-semibold fs-7 py-2 px-3" style="font-family: var(--font-heading);">
                  {{ $teacher->qualifications }}
                </span>
              </div>
              
              <hr class="my-3 opacity-10">
              
              <!-- Faculty Details List -->
              <div class="text-start fs-7 d-flex flex-column gap-3 px-2">
                <!-- <div>
                  <strong class="text-muted text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px; font-family: var(--font-heading);">Faculty Code</strong>
                  <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle fs-7">
                    {{ $teacher->code ?: 'EE-' . sprintf('%03d', $teacher->id) }}
                  </span>
                </div> -->
                <div>
                  <strong class="text-muted text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px; font-family: var(--font-heading);">Department</strong>
                  <span class="text-dark fw-medium">{{ $teacher->department ?: 'Isra Institute of Rehabilitation Sciences (IIRS)' }}</span>
                </div>
                @if (!empty($teacher->email))
                <div>
                  <strong class="text-muted text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px; font-family: var(--font-heading);">Email Address</strong>
                  <a href="mailto:{{ $teacher->email }}" class="text-decoration-none text-primary hover-accent break-word fw-medium">
                    <i class="fa-solid fa-envelope text-accent me-1"></i>{{ $teacher->email }}
                  </a>
                </div>
                @endif
                @if (!empty($teacher->contact_number))
                <div>
                  <strong class="text-muted text-uppercase d-block mb-1" style="font-size: 0.72rem; letter-spacing: 0.5px; font-family: var(--font-heading);">Contact Number</strong>
                  <a href="tel:{{ $teacher->contact_number }}" class="text-decoration-none text-primary hover-accent fw-medium">
                    <i class="fa-solid fa-phone text-accent me-1"></i>{{ $teacher->contact_number }}
                  </a>
                </div>
                @endif
              </div>
            </div>
          </div>
          
          <!-- Right Biography Text -->
          <div class="col-md-8 pt-3 pt-md-5">
            <div class="bio-text p-4 p-lg-5 bg-white rounded shadow-sm border-start border-4 border-accent">
              <h3 class="fw-bold mb-3 h5 text-dark" style="font-family: var(--font-heading);">Profile Summary</h3>
              <div style="font-family: var(--font-body); color: var(--color-text-dark); line-height: 1.75; text-align: left;">
                @if (!empty($teacher->description))
                  {!! $teacher->description !!}
                @else
                  <p class="text-muted fst-italic mb-0">No biography details listed for this faculty member.</p>
                @endif
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Resume Section with Books Background -->
    <section class="resume-banner" data-aos="fade-up">
      <div class="container text-center">
        <h2>Resume Details</h2>
        <div class="d-flex justify-content-center">
          <ul class="nav nav-tabs" id="resumeTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="positions-tab" data-bs-toggle="tab" data-bs-target="#positions-pane" type="button" role="tab" aria-controls="positions-pane" aria-selected="true">Current Positions</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-pane" type="button" role="tab" aria-controls="education-pane" aria-selected="false">Education</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience-pane" type="button" role="tab" aria-controls="experience-pane" aria-selected="false">Work Experience</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="publications-tab" data-bs-toggle="tab" data-bs-target="#publications-pane" type="button" role="tab" aria-controls="publications-pane" aria-selected="false">Publications</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards-pane" type="button" role="tab" aria-controls="awards-pane" aria-selected="false">Awards</button>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Resume Content Section -->
    <section class="py-5 bg-white" id="resume-details" data-aos="fade-up" data-aos-delay="100">
      <div class="container py-3">
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="tab-content" id="resumeTabsContent">
              
              <!-- Positions Pane -->
              <div class="tab-pane fade show active" id="positions-pane" role="tabpanel" aria-labelledby="positions-tab">
                <div class="p-4 bg-light rounded border border-light-subtle shadow-sm">
                  <h3 class="fw-bold text-dark h5 mb-3" style="font-family: var(--font-heading);">Current Positions</h3>
                  <div class="resume-tab-pane-content">
                    @php 
                      $pos = \App\Http\Controllers\PageController::cleanTabContent($teacher->current_positions ?? '');
                    @endphp
                    {!! !empty($pos) ? $pos : '<p class="text-muted mb-0">No active positions listed.</p>' !!}
                  </div>
                </div>
              </div>

              <!-- Education Pane -->
              <div class="tab-pane fade" id="education-pane" role="tabpanel" aria-labelledby="education-tab">
                <div class="p-4 bg-light rounded border border-light-subtle shadow-sm">
                  <h3 class="fw-bold text-dark h5 mb-3" style="font-family: var(--font-heading);">Education History</h3>
                  <div class="resume-tab-pane-content">
                    @php 
                      $edu = \App\Http\Controllers\PageController::cleanTabContent($teacher->education ?? '');
                    @endphp
                    {!! !empty($edu) ? $edu : '<p class="text-muted mb-0">No education history details recorded.</p>' !!}
                  </div>
                </div>
              </div>

              <!-- Experience Pane -->
              <div class="tab-pane fade" id="experience-pane" role="tabpanel" aria-labelledby="experience-tab">
                <div class="p-4 bg-light rounded border border-light-subtle shadow-sm">
                  <h3 class="fw-bold text-dark h5 mb-3" style="font-family: var(--font-heading);">Work Experience</h3>
                  <div class="resume-tab-pane-content">
                    @php 
                      $exp = \App\Http\Controllers\PageController::cleanTabContent($teacher->experience ?? '');
                    @endphp
                    {!! !empty($exp) ? $exp : '<p class="text-muted mb-0">No work experience details recorded.</p>' !!}
                  </div>
                </div>
              </div>

              <!-- Publications Pane -->
              <div class="tab-pane fade" id="publications-pane" role="tabpanel" aria-labelledby="publications-tab">
                <div class="p-4 bg-light rounded border border-light-subtle shadow-sm">
                  <h3 class="fw-bold text-dark h5 mb-3" style="font-family: var(--font-heading);">Publications & Research</h3>
                  <div class="resume-tab-pane-content">
                    @php 
                      $pub = \App\Http\Controllers\PageController::cleanTabContent($teacher->publications ?? '');
                    @endphp
                    {!! !empty($pub) ? $pub : '<p class="text-muted mb-0">No publication records listed.</p>' !!}
                  </div>
                </div>
              </div>

              <!-- Awards Pane -->
              <div class="tab-pane fade" id="awards-pane" role="tabpanel" aria-labelledby="awards-tab">
                <div class="p-4 bg-light rounded border border-light-subtle shadow-sm">
                  <h3 class="fw-bold text-dark h5 mb-3" style="font-family: var(--font-heading);">Awards & Honors</h3>
                  <div class="resume-tab-pane-content">
                    @php 
                      $awd = \App\Http\Controllers\PageController::cleanTabContent($teacher->awards ?? '');
                    @endphp
                    {!! !empty($awd) ? $awd : '<p class="text-muted mb-0">No awards or honors details listed.</p>' !!}
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection

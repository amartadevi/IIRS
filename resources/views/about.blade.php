@extends('layouts.app')

@section('title', 'About | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad Campus')

@section('styles')
  <link rel="stylesheet" href="{{ asset('components/about/about.css') }}">
@endsection

@section('content')
  <!-- Page Hero Banner -->
  <section class="about-hero-banner d-flex align-items-center">
    <div class="about-hero-overlay"></div>
    <div class="container position-relative z-1">
      <div class="row">
        <div class="col-lg-8">
          <span class="about-hero-label text-accent text-uppercase fw-semibold fs-7 mb-3 d-block">
            <i class="bi bi-building me-2"></i>Department Overview
          </span>
          <h1 class="about-hero-title fw-bold text-white">Isra Institute of<br><span class="text-accent">{{ setting('about.dept_name', 'Rehabilitation Sciences (IIRS)') }}</span></h1>
          <p class="about-hero-subtitle text-white-50 mt-3">
            Empowering students with the clinical expertise, research skills, and values to lead in rehabilitation healthcare.
          </p>
          <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb about-breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <main>
    <!-- ===== DEPARTMENT OVERVIEW ===== -->
    <section class="about-overview-section py-5 bg-white">
      <div class="container py-3">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right">
            <span class="section-label text-accent text-uppercase fw-semibold fs-7 mb-2 d-block" style="letter-spacing: 1px;">Overview</span>
            <h2 class="section-title-main fw-bold text-dark mb-4" style="font-family: var(--font-heading); font-size: 2.2rem; line-height: 1.3;">
              A Non-Profit Institution <br><span class="text-accent">Dedicated to Excellence</span> in Rehabilitation
            </h2>
            <p class="lead text-muted" style="text-align: justify; font-family: var(--font-body); font-size: 1.05rem;">
              {{ setting('about.overview_p1', 'The Isra Institute of Rehabilitation Sciences (IIRS), established in 2011 under Isra University, is a non-profit institution dedicated to excellence in rehabilitation sciences education, clinical training, and research. The institute is committed to providing high-quality academic programs and advanced clinical exposure to meet the evolving healthcare needs of society.') }}
            </p>
            <p class="text-muted" style="text-align: justify; font-family: var(--font-body); font-size: 0.95rem; line-height: 1.7;">
              {{ setting('about.overview_p2', 'The primary objective of the institute is to produce competent and skilled healthcare professionals capable of restoring movement, reducing pain, improving physical function, and enhancing the quality of life of patients through evidence-based rehabilitation practices. The institute emphasizes non-invasive treatment approaches that minimize the need for surgical procedures and long-term medication use.') }}
            </p>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="p-4 p-lg-5 rounded-3 shadow-sm border border-light bg-light" style="border-left: 5px solid var(--color-accent) !important;">
              <h3 class="fw-bold text-dark h5 mb-3" style="font-family: var(--font-heading);">Academic & Professional Milestones</h3>
              <p class="text-muted mb-4" style="text-align: justify; font-size: 0.95rem; line-height: 1.75;">
                {{ setting('about.overview_p3', 'Since its establishment, IIRS has achieved remarkable academic and professional milestones. The institute has proudly produced 32 PhD scholars, 281 graduates in Master of Rehabilitation Sciences programs, and more than 400 graduates in the Doctor of Physical Therapy (DPT) program. Graduating students are equipped with the skills and aptitude to provide effective care in multidisciplinary health care departments.') }}
              </p>
              <div class="p-3 bg-white rounded shadow-sm border border-light">
                <h4 class="fw-bold text-accent h6 mb-2" style="font-family: var(--font-heading);">Modern Learning & Research</h4>
                <p class="text-muted mb-0" style="font-size: 0.88rem; line-height: 1.6;">
                  {{ setting('about.overview_p4', 'On the academic front, the institute provides a modern learning environment with fully equipped classrooms supported by advanced educational resources. The state-of-the-art laboratories are furnished with essential equipment required for both basic and advanced rehabilitation sciences programs, ensuring comprehensive practical and clinical training.') }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== VISION & MISSION ===== -->
    <section class="about-vm-section py-5">
      <div class="container py-3">
        <div class="row g-4">
          <!-- Vision Card -->
          <div class="col-md-6">
            <div class="vm-card vm-card-vision h-100 p-4 p-lg-5 rounded-3 shadow-sm" data-aos="fade-right">
              <div class="vm-icon mb-4">
                <i class="bi bi-eye-fill"></i>
              </div>
              <span class="vm-label text-uppercase fw-semibold fs-7 mb-2 d-block">Statement</span>
              <h2 class="vm-title">Vision</h2>
              <p class="vm-text mt-3">
                {{ setting('about.vision', 'Isra Institute of Rehabilitation Sciences aims to produce competent rehabilitation practitioners who capable to conducting unique and independent research.') }}
              </p>
            </div>
          </div>
          <!-- Mission Card -->
          <div class="col-md-6">
            <div class="vm-card vm-card-mission h-100 p-4 p-lg-5 rounded-3 shadow-sm" data-aos="fade-left">
              <div class="vm-icon mb-4">
                <i class="bi bi-bullseye"></i>
              </div>
              <span class="vm-label text-uppercase fw-semibold fs-7 mb-2 d-block">Statement</span>
              <h2 class="vm-title">Mission</h2>
              <p class="vm-text mt-3">
                {{ setting('about.mission', 'The institute promotes critical thinking and inquiry to foster an environment of research and learning. Its programs have been designed to meet the growing demand of rehabilitation patients from injuries and disabilities. Its graduates are equipped with skills and aptitude to provides effective care in restoring bodily care, function mobility, relieving pain and contributing towards the better life style for patients.') }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== QUICK STATS ===== -->
    <section class="about-stats-section py-4" data-aos="zoom-in">
      <div class="container">
        <div class="row g-3 justify-content-center">
          <div class="col-6 col-md-3">
            <div class="about-stat-card text-center p-4 rounded-3">
              <div class="stat-icon mb-2"><i class="bi bi-calendar-check-fill"></i></div>
              <div class="stat-number">{{ setting('about.founded_year', '2011') }}</div>
              <div class="stat-label">Institute Founded</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="about-stat-card text-center p-4 rounded-3">
              <div class="stat-icon mb-2"><i class="bi bi-patch-check-fill"></i></div>
              <div class="stat-number">{{ setting('about.first_pec_year', '2011') }}</div>
              <div class="stat-label">First HEC Recognition</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="about-stat-card text-center p-4 rounded-3">
              <div class="stat-icon mb-2"><i class="bi bi-mortarboard-fill"></i></div>
              <div class="stat-number">{{ setting('about.obe_level', 'W Category') }}</div>
              <div class="stat-label">HEC Category</div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="about-stat-card text-center p-4 rounded-3">
              <div class="stat-icon mb-2"><i class="bi bi-award-fill"></i></div>
              <div class="stat-number">{{ setting('about.accreditation_body', 'HEC') }}</div>
              <div class="stat-label">Recognizing Body</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== HOD MESSAGE BANNER ===== -->
    <section class="about-section-banner py-3" id="hod-message-heading" data-aos="fade-up">
      <div class="about-section-banner-overlay"></div>
      <div class="container position-relative z-1 py-2">
        <h2 class="fw-bold text-white mb-0">
          <i class="bi bi-person-badge-fill me-3 text-accent"></i>Message from the Head of Department
        </h2>
      </div>
    </section>

    <!-- ===== HOD MESSAGE BODY ===== -->
    <section class="py-5 bg-white" data-aos="fade-up">
      <div class="container py-3">
        <div class="row g-5 align-items-start">
          <!-- HOD Photo -->
          <div class="col-lg-4">
            <div class="hod-photo-wrapper position-relative">
              <img
                src="{{ asset('storage/' . setting('hod.photo', 'settings/hod_dr_shoukat_hayat.jpeg')) }}"
                alt="{{ setting('hod.name', 'Dr. Shoukat Hayat') }} – {{ setting('hod.title', 'Vice Principal and HOD Rehab Clinic') }}, IIRS, Isra University"
                class="hod-photo w-100 rounded-3 shadow-lg"
              >
              <div class="hod-photo-badge position-absolute bottom-0 start-0 end-0 mx-3 mb-n3 rounded-3 p-3 text-center shadow">
                <div class="fw-bold text-white fs-6">{{ setting('hod.name', 'Dr. Shoukat Hayat') }}</div>
                <div class="text-white-50 fs-7">{{ setting('hod.title', 'Vice Principal and HOD Rehab Clinic') }}</div>
              </div>
            </div>
          </div>

          <!-- HOD Message Text -->
          <div class="col-lg-8">
            <div class="hod-message-body ps-lg-3">
              <div class="hod-quote-mark"><i class="bi bi-quote"></i></div>
              <p class="lead fw-semibold text-dark mb-3">
                {{ setting('hod.message', 'Welcome to the Isra Institute of Rehabilitation Sciences') }}
              </p>
              <p class="text-muted">
                {{ setting('hod.message_body') }}
              </p>
              <div class="hod-signature">
                <div class="fw-bold text-dark">{{ setting('hod.name', 'Dr. Shoukat Hayat') }}</div>
                <div class="text-muted fs-7">{{ setting('hod.title', 'Vice Principal and HOD Rehab Clinic') }}</div>
                <div class="text-muted fs-7">Isra Institute of Rehabilitation Sciences (IIRS)</div>
                <div class="text-muted fs-7">Isra University, Islamabad Campus</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CAREER OPPORTUNITIES ===== -->
    <section class="py-5 about-careers-section" data-aos="fade-up">
      <div class="container py-3">
        <div class="row mb-4">
          <div class="col-lg-8 mx-auto text-center">
            <span class="section-label text-accent text-uppercase fw-semibold fs-7">Career Prospects</span>
            <h2 class="section-title-main mt-2">Where Can Rehabilitation Sciences Take You?</h2>
            <p class="text-muted mt-2">Our graduates are equipped for a wide spectrum of dynamic medical, clinical, and research roles.</p>
          </div>
        </div>
        <div class="row g-3 justify-content-center">
          @php
          $careers = [
            ['icon' => 'bi-heart-pulse-fill',       'title' => 'Physical Therapist / Consultant', 'color' => '#f39c12'],
            ['icon' => 'bi-activity',               'title' => 'Sports Rehab Specialist',         'color' => '#3498db'],
            ['icon' => 'bi-shield-check',           'title' => 'Neurological Rehabilitation',     'color' => '#9b59b6'],
            ['icon' => 'bi-person-arms-up',         'title' => 'Prosthetics & Orthotics Clinic',  'color' => '#e74c3c'],
            ['icon' => 'bi-people-fill',            'title' => 'Pediatric & Geriatric Care',      'color' => '#27ae60'],
            ['icon' => 'bi-hospital-fill',          'title' => 'Hospitals & Rehabilitation Centers','color'=> '#1abc9c'],
            ['icon' => 'bi-book-half',              'title' => 'Academia & Clinical Research',    'color' => '#e67e22'],
            ['icon' => 'bi-diagram-3-fill',          'title' => 'Healthcare Administration',       'color' => '#2c3e50'],
          ];
          @endphp
          @foreach ($careers as $c)
          <div class="col-6 col-md-4 col-lg-3">
            <div class="career-card text-center p-3 rounded-3 h-100">
              <div class="career-icon mb-3" style="color: {{ $c['color'] }};">
                <i class="bi {{ $c['icon'] }} fs-2"></i>
              </div>
              <div class="career-title fw-semibold">{{ $c['title'] }}</div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- ===== ACCREDITATION STATUS BANNER ===== -->
    <section class="about-section-banner py-3" data-aos="fade-up">
      <div class="about-section-banner-overlay"></div>
      <div class="container position-relative z-1 py-2">
        <h2 class="fw-bold text-white mb-0">
          <i class="bi bi-patch-check-fill me-3 text-accent"></i>Accreditation Status
        </h2>
      </div>
    </section>

    <!-- ===== ACCREDITATION BODY ===== -->
    <section class="py-5 bg-white" data-aos="fade-up">
      <div class="container py-3">
        <div class="row g-5 align-items-center">
          <!-- Accreditation Timeline -->
          <div class="col-lg-5">
            <div class="accreditation-timeline">
              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <div class="timeline-year">2011</div>
                  <div class="timeline-event">Isra Institute of Rehabilitation Sciences (IIRS) established</div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <div class="timeline-year">2011</div>
                  <div class="timeline-event">Doctor of Physical Therapy (DPT) program launched</div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <div class="timeline-year">2018</div>
                  <div class="timeline-event">Program accredited/recognized by Higher Education Commission (HEC)</div>
                </div>
              </div>
              <div class="timeline-item timeline-item-latest">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                  <div class="timeline-year">2018</div>
                  <div class="timeline-event">HEC NOC received for launching M.Phil and PhD in Rehabilitation Sciences</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Accreditation Description -->
          <div class="col-lg-7">
            <span class="section-label text-accent text-uppercase fw-semibold fs-7">Higher Education Commission</span>
            <h2 class="section-title-main mt-2 mb-4">HEC Recognized Programs</h2>
            <p class="text-muted" style="text-align: justify;">
              All our programs, including Doctor of Physical Therapy (DPT), M.Phil in Rehabilitation Sciences, and PhD in Rehabilitation Sciences, are fully recognized and approved by the Higher Education Commission (HEC) of Pakistan.
            </p>
            <p class="text-muted" style="text-align: justify;">
              Our institute maintains the highest quality of education, research facilities, and clinical exposure, placing us in the prestigious W Category for higher education standards.
            </p>

            <!-- Accredited Batches -->
            <div class="accreditation-batches mt-4">
              <h6 class="fw-bold text-dark mb-3">Currently Recognized Intake Batches</h6>
              <div class="d-flex flex-wrap gap-2">
                <span class="batch-badge batch-badge-full">
                  <i class="bi bi-patch-check-fill me-1"></i> 2109-DPT &mdash; Recognized
                </span>
                <span class="batch-badge batch-badge-full">
                  <i class="bi bi-patch-check-fill me-1"></i> 2202-DPT &mdash; Recognized
                </span>
                <span class="batch-badge batch-badge-full">
                  <i class="bi bi-patch-check-fill me-1"></i> 2302-DPT &mdash; Recognized
                </span>
                <span class="batch-badge batch-badge-full">
                  <i class="bi bi-patch-check-fill me-1"></i> 2309-DPT &mdash; Recognized
                </span>
                <span class="batch-badge batch-badge-full">
                  <i class="bi bi-patch-check-fill me-1"></i> 2602-DPT &mdash; Recognized
                </span>
              </div>
            </div>

            <!-- Accreditation Body Logos/Links -->
            <div class="accreditation-bodies mt-5 d-flex gap-4 align-items-center flex-wrap">
              <div class="acc-body-item text-center">
                <div class="acc-body-icon mb-1"><i class="bi bi-award-fill text-accent fs-2"></i></div>
                <div class="fw-semibold fs-7 text-dark">HEC</div>
                <div class="text-muted" style="font-size: 0.72rem;">Higher Education Commission</div>
              </div>
              <div class="acc-body-divider"></div>
              <div class="acc-body-item text-center">
                <div class="acc-body-icon mb-1"><i class="bi bi-building-fill-check text-accent fs-2"></i></div>
                <div class="fw-semibold fs-7 text-dark">PPTA</div>
                <div class="text-muted" style="font-size: 0.72rem;">Pakistan Physical Therapy Association</div>
              </div>
              <div class="acc-body-divider"></div>
              <div class="acc-body-item text-center">
                <div class="acc-body-icon mb-1"><i class="bi bi-heart-fill text-accent fs-2"></i></div>
                <div class="fw-semibold fs-7 text-dark">PCP</div>
                <div class="text-muted" style="font-size: 0.72rem;">Pakistan Centre for Philanthropy</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('components/about/about.js') }}"></script>
@endsection
<!-- HoD Message Stylesheet -->
<link class="component-style" rel="stylesheet" href="{{ asset('components/hod_message/hod_message.css') }}">

<!-- ===== HOD Message Banner ===== -->
<section class="probootstrap-section-colored position-relative py-4" id="hod-message-heading">
  <div class="container position-relative z-1 py-1">
    <div class="row align-items-center">
      <div class="col-md-12">
        <h2 class="fw-bold text-white mb-0 fs-4">
          <i class="bi bi-person-badge-fill me-3 text-accent"></i>Message from the Head of Department
        </h2>
      </div>
    </div>
  </div>
</section>

<!-- ===== HOD Message Body ===== -->
<section class="hod-message-section py-5">
  <div class="container py-3">
    <div class="row g-5 align-items-start">

      <!-- Left: HOD Photo Card -->
      <div class="col-lg-4" data-aos="fade-right" data-aos-duration="700">
        <div class="hod-photo-card">
          <img
            src="{{ asset('storage/' . setting('hod.photo', 'settings/hod_dr_shoukat_hayat.jpeg')) }}"
            alt="{{ setting('hod.name', 'Dr. Shoukat Hayat') }} – {{ setting('hod.title', 'Vice Principal and HOD Rehab Clinic') }}, Isra Institute of Rehabilitation Sciences (IIRS), Isra University"
          >
          <div class="hod-name-badge">
            <div class="hod-name">{{ setting('hod.name', 'Dr. Shoukat Hayat') }}</div>
            <div class="hod-title">{{ setting('hod.title', 'Vice Principal and HOD Rehab Clinic') }}</div>
          </div>
        </div>
      </div>

      <!-- Right: Message Content -->
      <div class="col-lg-8" data-aos="fade-left" data-aos-duration="700">
        <div class="hod-message-body">
          <div class="hod-quote-icon">
            <i class="bi bi-quote"></i>
          </div>
          <p class="hod-lead-text">
            {{ setting('hod.message', 'Welcome to the Isra Institute of Rehabilitation Sciences') }}
          </p>
          <p class="hod-body-text">
            {{ setting('hod.message_body') }}
          </p>
          <div class="hod-signature">
            <div class="sig-name">{{ setting('hod.name', 'Dr. Shoukat Hayat') }}</div>
            <div class="sig-role">{{ setting('hod.title', 'Vice Principal and HOD Rehab Clinic') }}, Isra Institute of Rehabilitation Sciences (IIRS)<br>Isra University, Islamabad Campus</div>
          </div>
          <div class="mt-4">
            <a href="{{ url('/about') }}" class="btn btn-accent px-4 py-2">
              <i class="bi bi-arrow-right-circle me-2"></i>Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Scroll Rotating Gears -->
<div class="gearcontainer gears d-none d-lg-block">
  <div class="gear gear1"></div>
  <div class="gear gear2"></div>
</div>

<!-- HoD Message JavaScript -->
<script src="{{ asset('components/hod_message/hod_message.js') }}"></script>

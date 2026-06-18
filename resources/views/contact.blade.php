@extends('layouts.app')

@section('title', 'Contact Us | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad')

@section('styles')
  <link rel="stylesheet" href="{{ asset('components/contact/contact.css') }}">
@endsection

@section('content')
  <!-- ===== PAGE BANNER ===== -->
  <section class="contact-banner d-flex align-items-center">
    <div class="container position-relative z-1">
      <div class="row">
        <div class="col-lg-8">
          <span class="contact-banner-label text-accent text-uppercase fw-semibold fs-7 mb-3 d-block">
            <i class="bi bi-chat-dots-fill me-2"></i>We're Here to Help
          </span>
          <h1 class="contact-banner-title fw-bold text-white">Contact Us</h1>
          <p class="contact-banner-subtitle text-white-50 mt-2">
            Have a question? Reach out to the Isra Institute of Rehabilitation Sciences (IIRS) at Isra University.
          </p>
          <nav aria-label="breadcrumb" class="mt-4">
            <ol class="breadcrumb contact-breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <main>
    <!-- ===== CONTACT INFO STRIP ===== -->
    <section class="contact-info-strip py-0" data-aos="fade-up">
      <div class="container">
        <div class="row g-0 contact-info-bar">
          <div class="col-md-4">
            <div class="contact-info-item d-flex align-items-center gap-3 p-4">
              <div class="contact-info-icon">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <div class="contact-info-label">Campus Location</div>
                <div class="contact-info-value">{{ setting('contact.address', 'Lehtrar Road, Farash Town Phase II, Islamabad') }}</div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-info-item contact-info-item-mid d-flex align-items-center gap-3 p-4">
              <div class="contact-info-icon">
                <i class="bi bi-envelope-fill"></i>
              </div>
              <div>
                <div class="contact-info-label">Email Address</div>
                <div class="contact-info-value">
                  <a href="mailto:{{ setting('contact.email', 'Info.isb@isra.edu.pk') }}" class="text-decoration-none" style="color: inherit;">
                    {{ setting('contact.email', 'Info.isb@isra.edu.pk') }}
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-info-item d-flex align-items-center gap-3 p-4">
              <div class="contact-info-icon">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div>
                <div class="contact-info-label">Phone Number</div>
                <div class="contact-info-value">
                  <a href="tel:{{ setting('contact.phone', '92-51-8439901-10') }}" class="text-decoration-none" style="color: inherit;">
                    {{ setting('contact.phone', '92-51-8439901-10') }}
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== MAIN CONTACT SECTION ===== -->
    <section class="contact-main-section py-5">
      <div class="container py-4">
        <div class="row g-5 align-items-start">
          <!-- Left: image + extra info -->
          <div class="col-lg-4" data-aos="fade-right">
            <div class="contact-sidebar">
              <!-- Decorative Image -->
              <div class="contact-sidebar-image rounded-3 overflow-hidden shadow mb-4">
                <img
                  src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?auto=format&fit=crop&w=800&q=80"
                  alt="Contact Isra Institute of Rehabilitation Sciences (IIRS)"
                  class="w-100"
                  style="object-fit: cover; height: 280px;"
                >
              </div>

              <!-- Quick Info Cards -->
              <div class="d-flex flex-column gap-3">
                <div class="contact-quick-card d-flex gap-3 align-items-start p-3 rounded-3">
                  <div class="cq-icon"><i class="bi bi-clock-fill text-accent"></i></div>
                  <div>
                    <div class="cq-label">Office Hours</div>
                    <div class="cq-value">Monday – Friday<br>8:00 AM – 5:00 PM</div>
                  </div>
                </div>

                <div class="contact-quick-card d-flex gap-3 align-items-start p-3 rounded-3">
                  <div class="cq-icon"><i class="bi bi-person-lines-fill text-accent"></i></div>
                  <div>
                    <div class="cq-label">Department Head</div>
                    <div class="cq-value">{{ setting('hod.name', 'Dr. Shoukat Hayat') }}</div>
                  </div>
                </div>

                <div class="contact-quick-card d-flex gap-3 align-items-start p-3 rounded-3">
                  <div class="cq-icon"><i class="bi bi-building-fill text-accent"></i></div>
                  <div>
                    <div class="cq-label">Department</div>
                    <div class="cq-value">{{ setting('about.dept_name', 'Isra Institute of Rehabilitation Sciences (IIRS)') }}<br>Isra University, Islamabad Campus</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right: Contact Form -->
          <div class="col-lg-8" data-aos="fade-left">
            <div class="contact-form-wrapper p-4 p-lg-5 rounded-3 shadow-sm">
              <h2 class="fw-bold mb-1 text-dark">Get In Touch</h2>
              <p class="text-muted mb-4">Contact us using the form below and we\'ll get back to you as soon as possible.</p>

              <form action="#" method="POST" id="contactForm" class="contact-form row g-3" novalidate>
                @csrf
                <div class="col-md-6">
                  <label for="contact-name" class="form-label fw-semibold fs-7 text-dark">Full Name <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control contact-input"
                    id="contact-name"
                    name="name"
                    placeholder="e.g. Ahmed Ali"
                    required
                  >
                </div>

                <div class="col-md-6">
                  <label for="contact-email" class="form-label fw-semibold fs-7 text-dark">Email Address <span class="text-danger">*</span></label>
                  <input
                    type="email"
                    class="form-control contact-input"
                    id="contact-email"
                    name="email"
                    placeholder="name@example.com"
                    required
                  >
                </div>

                <div class="col-12">
                  <label for="contact-subject" class="form-label fw-semibold fs-7 text-dark">Subject <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control contact-input"
                    id="contact-subject"
                    name="subject"
                    placeholder="e.g. Admission Inquiry"
                    required
                  >
                </div>

                <div class="col-12">
                  <label for="contact-message" class="form-label fw-semibold fs-7 text-dark">Message <span class="text-danger">*</span></label>
                  <textarea
                    class="form-control contact-input"
                    id="contact-message"
                    name="message"
                    rows="6"
                    placeholder="Type your message here..."
                    required
                  ></textarea>
                </div>

                <div class="col-12 mt-2">
                  <button type="submit" class="btn btn-accent px-5 py-2 fw-semibold text-uppercase" id="contact-submit">
                    <i class="bi bi-send-fill me-2"></i>Send Message
                  </button>
                </div>

                <!-- Success / Error alerts -->
                <div class="col-12" id="contact-success" style="display:none;">
                  <div class="alert alert-success rounded-3 py-3 mb-0 mt-2">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Thank you! Your message has been sent. We will get back to you shortly.
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('components/contact/contact.js') }}"></script>
@endsection
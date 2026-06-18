<!-- Footer Stylesheet -->
<link rel="stylesheet" href="{{ asset('components/footer/footer.css') }}">

<!-- Redesigned Footer Section -->
<footer class="probootstrap-footer py-5 text-white">
  <div class="container">
    <div class="row g-4 justify-content-between">
      
      <!-- Column 1: About -->
      <div class="col-md-5">
        <div class="pe-md-4">
          <!-- Dual logos in footer -->
          <div class="d-flex align-items-center gap-3 mb-3">
            <img src="{{ asset('storage/settings/isra_logo.png') }}" alt="Isra University" style="width:56px;height:56px;object-fit:contain;border-radius:50%;">
            <img src="{{ asset('storage/settings/iirs_logo.png') }}" alt="IIRS Logo" style="width:56px;height:56px;object-fit:contain;border-radius:50%;">
          </div>
          <h4 class="footer-heading">About Isra University</h4>
          <p class="mb-0 text-white-50">The university is a non-profit organization, certified by Pakistan Centre for Philanthropy (PCP). The University is highly ranked by HEC. The easily accessible and beautiful campuses provide services that create an academic environment of learning and intellectual growth.</p>
        </div>
      </div>

      <!-- Column 2: Links -->
      <div class="col-md-3">
        <h4 class="footer-heading">Links</h4>
        <ul class="footer-links">
          <li>
            <a href="{{ url('/') }}" target="_self">
              <i class="bi bi-chevron-right"></i>Home
            </a>
          </li>
          <li>
            <a href="{{ url('/news') }}" target="_self">
              <i class="bi bi-chevron-right"></i>News
            </a>
          </li>
          <li>
            <a href="{{ url('/programs') }}" target="_self">
              <i class="bi bi-chevron-right"></i>Programs
            </a>
          </li>
          <li>
            <a href="{{ url('/teachers') }}" target="_self">
              <i class="bi bi-chevron-right"></i>Faculty
            </a>
          </li>
          <li>
            <a href="{{ url('/about') }}" target="_self">
              <i class="bi bi-chevron-right"></i>About
            </a>
          </li>
          <li>
            <a href="{{ url('/contact') }}" target="_self">
              <i class="bi bi-chevron-right"></i>Contact
            </a>
          </li>
        </ul>
      </div>

      <!-- Column 3: Contact -->
      <div class="col-md-3">
        <h4 class="footer-heading">Contact Info</h4>
        <ul class="footer-contact">
          <li>
            <i class="bi bi-geo-alt-fill"></i>
            <span>{{ setting('contact.address', 'Hala Road, Hyderabad') }}</span>
          </li>
          <li>
            <i class="bi bi-envelope-fill"></i>
            <span>{{ setting('contact.email', 'info@israuniversity.edu.pk') }}</span>
          </li>
          <li>
            <i class="bi bi-telephone-fill"></i>
            <span>{{ setting('contact.phone', '+92 22 2030181') }}</span>
          </li>
        </ul>
      </div>

    </div>
  </div>
</footer>

<!-- Copyright and Bottom Panel -->
<div class="probootstrap-copyright py-4">
  <div class="container">
    <div class="row align-items-center justify-content-between g-3">
      <!-- Social Media Icons (Bottom-Left) -->
      <div class="col-md-4 text-center text-md-start">
        <div class="d-flex gap-2 justify-content-center justify-content-md-start">
          <a href="{{ setting('contact.twitter_url', '#') }}" class="social-icon-btn"><i class="bi bi-twitter-x"></i></a>
          <a href="{{ setting('contact.facebook_url', '#') }}" class="social-icon-btn"><i class="bi bi-facebook"></i></a>
          <a href="{{ setting('contact.youtube_url', '#') }}" class="social-icon-btn"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
      <!-- Copyright Info (Bottom-Center/Right) -->
      <div class="col-md-8 text-center text-md-end text-white-50">
        <p class="mb-0 fs-7">
          &copy; {{ date('Y') }}. Designed &amp; Developed by ITServ Department
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Interactive Back To Top Button -->
<a href="#" class="back-to-top" title="Back to top">
  <i class="bi bi-arrow-up-short"></i>
</a>

<!-- Footer JavaScript -->
<script src="{{ asset('components/footer/footer.js') }}"></script>

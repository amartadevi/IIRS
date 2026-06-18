<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', setting('site.title', 'Isra Institute of Rehabilitation Sciences (IIRS) :: Isra University Islamabad Campus'))</title>
  <meta name="description" content="@yield('meta_description', setting('site.description', 'Isra Institute of Rehabilitation Sciences (IIRS), Isra University Islamabad Campus'))">
  <meta name="keywords" content="@yield('meta_keywords', 'Isra University, IIRS, Rehabilitation Sciences, Doctor of Physical Therapy')">
  
  <meta property="og:title" content="@yield('title', setting('site.title', 'Isra Institute of Rehabilitation Sciences (IIRS) :: Isra University Islamabad Campus'))">
  <meta property="og:image" content="{{ asset('storage/' . setting('site.logo', 'settings/site_logo.png')) }}">
  <meta property="og:description" content="@yield('meta_description', setting('site.description', 'Isra Institute of Rehabilitation Sciences (IIRS), Isra University Islamabad Campus'))">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <!-- AOS Animation Library CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  
  <!-- Global Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  <!-- Page Specific Stylesheets -->
  @yield('styles')
</head>
<body>

  <!-- Navbar Component -->
  <x-navbar />

  <!-- Main Content -->
  @yield('content')

  <!-- Footer Component -->
  <x-footer />

  <!-- jQuery (required by main.js) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Animation Library JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <!-- Global JavaScript -->
  <script src="{{ asset('js/main.js') }}"></script>

  <!-- Page Specific Scripts -->
  @yield('scripts')

  <!-- Initialize AOS & safety fallback for sections -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof AOS !== 'undefined') {
        AOS.init({ duration: 700, once: true, offset: 60 });
      } else {
        // If AOS fails to load, make all animated elements visible immediately
        document.querySelectorAll('[data-aos]').forEach(function(el) {
          el.removeAttribute('data-aos');
          el.style.opacity = '1';
          el.style.transform = 'none';
        });
      }
    });
  </script>

</body>
</html>

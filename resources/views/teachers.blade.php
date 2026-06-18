@extends('layouts.app')

@section('title', 'Faculty Directory | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad Campus')

@section('styles')
  <link rel="stylesheet" href="{{ asset('components/teachers/teachers.css') }}">
  <style>
    /* Custom style specifically for the faculty page hero */
    .teachers-page-hero {
      background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
      padding: 5rem 0;
      position: relative;
      overflow: hidden;
      border-bottom: 4px solid var(--color-accent);
    }
    .teachers-page-hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.08) 0%, transparent 50%);
      pointer-events: none;
    }
    .teachers-breadcrumb {
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.5px;
    }
    .teachers-breadcrumb a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }
    .teachers-breadcrumb a:hover {
      color: var(--color-accent);
    }
    .teachers-breadcrumb .active {
      color: var(--color-accent);
    }
    
    .teachers-section {
      background: var(--color-bg-light);
      padding: 4rem 0;
    }
  </style>
@endsection

@section('content')
  <!-- Page Hero Banner -->
  <section class="teachers-page-hero text-white text-center text-md-start">
    <div class="container position-relative z-1">
      <div class="row align-items-center">
        <div class="col-md-8">
          <!-- Breadcrumbs -->
          <nav class="teachers-breadcrumb mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
              <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa-solid fa-house me-1"></i>Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Faculty Directory</li>
            </ol>
          </nav>
          <h1 class="display-5 fw-bold text-white mb-0" style="font-family: var(--font-heading);">Faculty Directory</h1>
          <p class="text-white-50 mt-2 mb-0" style="font-family: var(--font-body); font-size: 0.95rem;">Meet the expert professors, clinical instructors, and researchers driving education and research in Rehabilitation Sciences.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Faculty Listing -->
  <main class="teachers-section">
    <div class="container" data-aos="fade-up">

      <!-- Search & Filter Controls -->
      <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
          <div class="search-filter-card p-4 rounded shadow-sm bg-white border border-light-subtle">
            <div class="row g-3 align-items-center">
              <!-- Search Bar -->
              <div class="col-md-5">
                <div class="input-group">
                  <span class="input-group-text bg-light border-end-0"><i class="fa-solid fa-magnifying-glass text-muted"></i></span>
                  <input type="text" id="facultySearch" class="form-control bg-light border-start-0 fs-7 py-2" placeholder="Search by name, code, designation...">
                </div>
              </div>
              <!-- Filter Options -->
              <div class="col-md-7">
                <div class="d-flex flex-wrap gap-2 justify-content-md-end justify-content-start align-items-center">
                  <span class="fs-8 text-uppercase text-muted fw-bold d-none d-sm-inline"><i class="fa-solid fa-filter me-1 text-accent"></i>Filter By:</span>
                  <button type="button" class="btn btn-sm btn-outline-accent active filter-btn" data-filter="all">All</button>
                  <button type="button" class="btn btn-sm btn-outline-accent filter-btn" data-filter="management">Management</button>
                  <button type="button" class="btn btn-sm btn-outline-accent filter-btn" data-filter="faculty">Teaching Faculty</button>
                  <button type="button" class="btn btn-sm btn-outline-accent filter-btn" data-filter="lab">Lab Staff</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Faculty Grid -->
      <div class="row g-4" id="facultyGrid">
        @foreach ($teachers as $teacher)
        @php
          $facultyCode = $teacher->code ?: 'IIRS-' . sprintf('%03d', $teacher->id);
          $department = $teacher->department ?: 'Isra Institute of Rehabilitation Sciences (IIRS)';
        @endphp
        <div class="col-12 col-md-6 col-lg-4 faculty-item-col" 
             data-designation="{{ $teacher->designation }}" 
             data-name="{{ strtolower($teacher->name) }}" 
             data-code="{{ strtolower($facultyCode) }}">
          
          <div class="faculty-card card-hover-lift shadow-sm d-flex flex-column h-100">
            <!-- Decorative Accent bar -->
            <div class="faculty-card-header-bar"></div>
            
            <div class="faculty-card-body p-4">
              <div class="d-flex align-items-center gap-3 mb-3">
                <!-- Circular Avatar with Gold Border -->
                <div class="faculty-avatar-wrapper shadow-sm">
                  <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="faculty-avatar-img">
                </div>
                <div>
                  <!-- Faculty Code Badge -->
                  <!-- <div class="mb-1">
                    <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle fs-8">Code: {{ $facultyCode }}</span>
                  </div> -->
                  <!-- Designation Badge -->
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle fs-8 text-uppercase fw-semibold">{{ $teacher->designation }}</span>
                </div>
              </div>
              
              <!-- Name & Qualifications -->
              <h3 class="faculty-name-title mb-1">
                <a href="{{ route('teacher', $teacher->id) }}" class="text-decoration-none text-primary-dark hover-accent">
                  {{ $teacher->name }}
                </a>
              </h3>
              <div class="faculty-qual-sub text-muted fs-8 mb-3">
                {{ $teacher->qualifications }}
              </div>
              
              <hr class="my-3 opacity-10">
              
              <!-- Detailed Info List -->
              <div class="faculty-details-list d-flex flex-column gap-2 mb-1">
                <!-- Department -->
                <div class="d-flex align-items-start gap-2 fs-7 text-dark">
                  <i class="fa-solid fa-graduation-cap text-accent mt-1" style="width: 16px;"></i>
                  <div>
                    <strong class="text-muted d-block fs-8 text-uppercase">Department</strong>
                    {{ $department }}
                  </div>
                </div>
                
                <!-- Email (if available) -->
                @if (!empty($teacher->email))
                <div class="d-flex align-items-start gap-2 fs-7">
                  <i class="fa-solid fa-envelope text-accent mt-1" style="width: 16px;"></i>
                  <div>
                    <strong class="text-muted d-block fs-8 text-uppercase">Email</strong>
                    <a href="mailto:{{ $teacher->email }}" class="text-decoration-none text-dark hover-accent break-word">
                      {{ $teacher->email }}
                    </a>
                  </div>
                </div>
                @endif
                
                <!-- Contact Number (if available) -->
                @if (!empty($teacher->contact_number))
                <div class="d-flex align-items-start gap-2 fs-7">
                  <i class="fa-solid fa-phone text-accent mt-1" style="width: 16px;"></i>
                  <div>
                    <strong class="text-muted d-block fs-8 text-uppercase">Contact</strong>
                    <a href="tel:{{ $teacher->contact_number }}" class="text-decoration-none text-dark hover-accent">
                      {{ $teacher->contact_number }}
                    </a>
                  </div>
                </div>
                @endif
              </div>
            </div>
            
            <!-- Footer view button -->
            <div class="faculty-card-footer px-4 py-3 bg-light border-top d-flex justify-content-between align-items-center mt-auto">
              <a href="{{ route('teacher', $teacher->id) }}" class="text-decoration-none fw-semibold text-primary hover-accent fs-7 d-flex align-items-center gap-1">
                View Full Profile <i class="fa-solid fa-chevron-right fs-8"></i>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </main>
@endsection

@section('scripts')
  <!-- Client-side Live Search and Category Filtering Script -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
      const searchInput = document.getElementById('facultySearch');
      const filterButtons = document.querySelectorAll('.filter-btn');
      const facultyCards = document.querySelectorAll('.faculty-item-col');
      const gridContainer = document.getElementById('facultyGrid');
      
      // Create a 'No Results' indicator dynamically
      const noResults = document.createElement('div');
      noResults.className = 'col-12 text-center py-5 d-none';
      noResults.innerHTML = `
          <div class="py-4">
              <i class="fa-solid fa-user-slash text-muted mb-3 d-block" style="font-size: 3rem;"></i>
              <h4 class="fw-bold text-primary">No Faculty Members Found</h4>
              <p class="text-muted">Try adjusting your search terms or filters.</p>
          </div>
      `;
      gridContainer.appendChild(noResults);

      function filterFaculty() {
          const searchTerm = searchInput.value.toLowerCase().trim();
          const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
          let visibleCount = 0;

          facultyCards.forEach(col => {
              const name = col.getAttribute('data-name');
              const code = col.getAttribute('data-code');
              const desig = col.getAttribute('data-designation').toLowerCase();
              
              // Map designation to logical categories
              let category = 'faculty'; // Default category: Teaching Faculty
              if (desig === 'chairperson' || desig.includes('principal') || desig.includes('hod')) {
                  category = 'management';
              } else if (desig === 'lab engineer' || desig === 'lab assistant') {
                  category = 'lab';
              }

              const matchesSearch = name.includes(searchTerm) || code.includes(searchTerm) || desig.includes(searchTerm);
              const matchesFilter = activeFilter === 'all' || activeFilter === category;

              if (matchesSearch && matchesFilter) {
                  col.classList.remove('d-none');
                  visibleCount++;
              } else {
                  col.classList.add('d-none');
              }
          });

          if (visibleCount === 0) {
              noResults.classList.remove('d-none');
          } else {
              noResults.classList.add('d-none');
          }
      }

      searchInput.addEventListener('input', filterFaculty);

      filterButtons.forEach(btn => {
          btn.addEventListener('click', function () {
              filterButtons.forEach(b => b.classList.remove('active'));
              this.classList.add('active');
              filterFaculty();
          });
      });
  });
  </script>
@endsection
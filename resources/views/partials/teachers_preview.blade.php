<!-- Teachers Stylesheet -->
<link rel="stylesheet" href="{{ asset('components/teachers/teachers.css') }}">

<!-- Qualified Teachers Section -->
<section class="py-5 bg-white" id="teacher" data-aos="fade-up">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h2 class="section-heading-accent text-uppercase">Our Distinguished Faculty</h2>
        <p class="lead text-muted fs-6 mt-3">Learn from highly qualified educators and experts who are leading the way in rehabilitation sciences education.</p>
      </div>
    </div>
    
    <div class="row g-4 justify-content-center">
      @foreach ($previewFaculty as $teacher)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="probootstrap-teacher card text-center border-0 shadow-sm p-4 h-100">
          <div class="teacher-image mx-auto mb-3">
            <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->name }}" class="img-fluid object-fit-cover w-100 h-100">
          </div>
          <div class="text">
            <h3 class="fw-bold h6 text-dark mb-1">{{ $teacher->name }}</h3>
            <span class="d-block fs-8 text-muted mb-2">{{ $teacher->qualifications }}</span>
            <span class="badge bg-secondary-subtle text-secondary text-uppercase fw-semibold mb-3 fs-8">{{ $teacher->designation }}</span>
            <div class="mt-2">
              <a href="{{ route('teacher', $teacher->id) }}" class="btn btn-accent btn-sm px-3">View Profile</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <p class="mb-0"><a href="{{ url('/teachers') }}" class="btn btn-accent px-4 py-2">View All Faculty</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Teachers JavaScript -->
<script src="{{ asset('components/teachers/teachers.js') }}"></script>

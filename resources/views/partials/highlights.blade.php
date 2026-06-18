<!-- Highlights Stylesheet -->
<link rel="stylesheet" href="{{ asset('components/highlights/highlights.css') }}">

<!-- Highlights Section -->
<section class="highlights-section py-5" id="highlights" data-aos="fade-up">
  <!-- Highlights Background with Slider-like Transition -->
  <div class="highlights-bg-container">
    <div class="highlights-bg" style="background-image: url('{{ asset('components/highlights/highlights.png') }}')"></div>
    <div class="highlights-overlay"></div>
  </div>

  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h2 class="section-heading-accent text-uppercase">Department Highlights</h2>
        <p class="lead text-muted fs-6 mt-3">Stay updated with the latest news, upcoming events, and official notifications from the Isra Institute of Rehabilitation Sciences (IIRS).</p>
      </div>
    </div>

    <!-- Bootstrap 5 Tabs Navigation -->
    <div class="d-flex justify-content-center mb-5">
      <ul class="nav nav-pills custom-pills" id="highlightsTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active px-4 py-2 fw-semibold text-uppercase" id="news-tab" data-bs-toggle="tab" data-bs-target="#featured-news" type="button" role="tab" aria-controls="featured-news" aria-selected="true">Featured News</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link px-4 py-2 fw-semibold text-uppercase" id="events-tab" data-bs-toggle="tab" data-bs-target="#upcoming-events" type="button" role="tab" aria-controls="upcoming-events" aria-selected="false">Upcoming Events</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link px-4 py-2 fw-semibold text-uppercase" id="notice-tab" data-bs-toggle="tab" data-bs-target="#noticeboard" type="button" role="tab" aria-controls="noticeboard" aria-selected="false">Noticeboard</button>
        </li>
      </ul>
    </div>

    <!-- Tabs Content -->
    <div class="tab-content" id="highlightsTabsContent">
      
      <!-- Featured News Tab -->
      <div class="tab-pane fade show active" id="featured-news" role="tabpanel" aria-labelledby="news-tab">
        <div class="row g-4 justify-content-center">
          @forelse ($newses as $news)
          <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm overflow-hidden h-100 highlight-news-card">
              <a href="{{ route('news', $news->id) }}" class="text-decoration-none">
                <div class="ratio ratio-16x9">
                  <img src="{{ asset('storage/' . $news->photo) }}" class="card-img-top object-fit-cover" alt="{{ $news->title }}">
                </div>
                <div class="card-body p-4">
                  <span class="fs-7 text-accent fw-semibold mb-2 d-block">
                    <i class="bi bi-calendar3 me-1"></i> {{ $news->date }}
                  </span>
                  <h3 class="fw-bold h5 text-dark mb-2 card-hover-title">{{ $news->title }}</h3>
                  <p class="text-muted fs-7 mb-0">{{ $news->excerpt }}</p>
                </div>
              </a>
            </div>
          </div>
          @empty
          <div class="col-md-8 text-center py-5">
            <div class="text-muted">
              <i class="bi bi-newspaper fs-1 text-secondary mb-3 d-block"></i>
              <p class="mb-0">No featured news at this time. Please check back later!</p>
            </div>
          </div>
          @endforelse
        </div>
      </div>

      <!-- Upcoming Events Tab -->
      <div class="tab-pane fade" id="upcoming-events" role="tabpanel" aria-labelledby="events-tab">
        <div class="row g-4 justify-content-center">
          @forelse ($events as $event)
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm p-4 h-100 notice-card">
              <div class="d-flex gap-3">
                <div class="notice-icon text-accent fs-3">
                  <i class="bi bi-calendar-event-fill"></i>
                </div>
                <div>
                  <span class="fs-7 text-muted d-block mb-1"><i class="bi bi-clock me-1"></i> {{ $event->date }}</span>
                  <h4 class="fw-bold h6 text-dark mb-2">{{ $event->title }}</h4>
                  <p class="text-muted fs-7 mb-0">{{ $event->description }}</p>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div class="col-md-8 text-center py-5">
            <div class="text-muted">
              <i class="bi bi-calendar-x fs-1 text-secondary mb-3 d-block"></i>
              <p class="mb-0">No upcoming events at this time. Please check back later!</p>
            </div>
          </div>
          @endforelse
        </div>
      </div>

      <!-- Noticeboard Tab -->
      <div class="tab-pane fade" id="noticeboard" role="tabpanel" aria-labelledby="notice-tab">
        <div class="row g-4 justify-content-center">
          
          @forelse ($notices as $notice)
          <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm p-4 h-100 notice-card">
              <a href="{{ $notice->link }}" target="_blank" class="text-decoration-none d-flex gap-3">
                <div class="notice-icon text-accent fs-3">
                  <i class="bi bi-file-earmark-text-fill"></i>
                </div>
                <div>
                  <span class="fs-7 text-muted d-block mb-1"><i class="bi bi-clock me-1"></i> {{ $notice->date }}</span>
                  <h4 class="fw-bold h6 text-dark card-hover-title mb-2">{{ $notice->title }}</h4>
                  <p class="text-muted fs-7 mb-0">{{ $notice->content }}</p>
                </div>
              </a>
            </div>
          </div>
          @empty
          <div class="col-md-8 text-center py-5">
            <div class="text-muted">
              <i class="bi bi-info-circle fs-1 text-secondary mb-3 d-block"></i>
              <p class="mb-0">No notices at this time. Please check back later!</p>
            </div>
          </div>
          @endforelse

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Highlights JavaScript -->
<script src="{{ asset('components/highlights/highlights.js') }}"></script>

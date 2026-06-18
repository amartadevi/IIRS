@extends('layouts.app')

@section('title', 'Program Details | Isra Institute of Rehabilitation Sciences (IIRS) | Isra University Islamabad Campus')

@section('styles')
  <style>
    .program-detail-header {
      background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
      padding: 5rem 0;
      position: relative;
      border-bottom: 4px solid var(--color-accent);
    }
    .program-detail-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: radial-gradient(circle at 80% 20%, rgba(245, 166, 35, 0.08) 0%, transparent 50%);
      pointer-events: none;
    }
    .program-detail-breadcrumb {
      font-family: var(--font-heading);
      font-size: 0.85rem;
      font-weight: 500;
      letter-spacing: 0.5px;
    }
    .program-detail-breadcrumb a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      transition: color 0.3s;
    }
    .program-detail-breadcrumb a:hover {
      color: var(--color-accent);
    }
    .program-detail-breadcrumb .active {
      color: var(--color-accent);
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
    .curriculum-banner {
      background-image: linear-gradient(rgba(7, 21, 53, 0.85), rgba(7, 21, 53, 0.85)), url('https://ee.israuniversity.edu.pk/img/books.jpg');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 5rem 0 0 0;
      border-bottom: 4px solid var(--color-accent);
    }
    .curriculum-banner h2 {
      font-family: var(--font-heading);
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: var(--color-white) !important;
    }
    
    /* Tabs Navigation styling matching Image 2 */
    #curriculumTabs {
      border-bottom: none;
      display: inline-flex;
      gap: 4px;
    }
    #curriculumTabs .nav-item {
      margin-bottom: 0;
    }
    #curriculumTabs .nav-link {
      background-color: var(--color-accent);
      background-image: linear-gradient(135deg, var(--color-accent) 0%, var(--color-accent-hover) 100%);
      color: #ffffff !important;
      border: none;
      border-radius: 6px 6px 0 0;
      font-family: var(--font-heading);
      font-weight: 600;
      font-size: 0.9rem;
      padding: 12px 35px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: all 0.28s ease;
      box-shadow: 0 -2px 10px rgba(10, 31, 68, 0.05);
    }
    #curriculumTabs .nav-link:hover {
      filter: brightness(1.08);
      transform: translateY(-2px);
    }
    #curriculumTabs .nav-link.active {
      background-image: none !important;
      background-color: #ffffff !important;
      color: var(--color-primary) !important;
      transform: translateY(0);
    }
    
    /* Table styling */
    .curriculum-table th {
      background-color: rgba(10, 31, 68, 0.04) !important;
      color: var(--color-primary) !important;
      font-family: var(--font-heading);
      font-weight: 700 !important;
      font-size: 0.88rem;
      border-bottom: 2px solid rgba(10, 31, 68, 0.08) !important;
      text-transform: uppercase !important;
      letter-spacing: 0.5px !important;
      text-align: left;
    }
    .curriculum-table td {
      padding: 12px 16px !important;
      font-family: var(--font-body);
      font-size: 0.88rem;
      color: var(--color-text-dark);
      text-align: left;
    }
  </style>
@endsection

@section('content')
  <!-- Page Content -->
  <main class="bg-light pb-5">
    <!-- Page Hero Banner -->
    <section class="program-detail-header text-white text-center text-md-start">
      <div class="container position-relative z-1">
        <div class="row align-items-center">
          <div class="col-md-10">
            <!-- Breadcrumbs -->
            <nav class="program-detail-breadcrumb mb-3" aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center justify-content-md-start mb-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa-solid fa-house me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/programs') }}">Programs</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $program->name }}</li>
              </ol>
            </nav>
            <h1 class="display-6 fw-bold text-white mb-0" style="font-family: var(--font-heading); line-height: 1.3;">{{ strtoupper($program->name) }}</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Program Overview Overlap Section -->
    <section class="overlap-container mb-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <!-- Left Overlapping Card -->
          <div class="col-md-4">
            <div class="image-overlap-card">
              <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->name }}" class="img-fluid w-100 object-fit-cover">
            </div>
          </div>
          <!-- Right Description Text -->
          <div class="col-md-8 pt-3 pt-md-5">
            <p class="fs-5 text-muted leading-relaxed" style="font-family: 'Open Sans', sans-serif;">
              {{ $program->mission }}
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Curriculum / Specialization Section -->
    @if ($program->id == 1)
    <!-- Curriculum Section with Books Background for DPT -->
    <section class="curriculum-banner">
      <div class="container text-center">
        <h2>DPT Curriculum</h2>
        <div class="d-flex justify-content-center">
          <ul class="nav nav-tabs" id="curriculumTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="year1-tab" data-bs-toggle="tab" data-bs-target="#year1" type="button" role="tab" aria-controls="year1" aria-selected="true">1st Year</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="year2-tab" data-bs-toggle="tab" data-bs-target="#year2" type="button" role="tab" aria-controls="year2" aria-selected="false">2nd Year</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="year3-tab" data-bs-toggle="tab" data-bs-target="#year3" type="button" role="tab" aria-controls="year3" aria-selected="false">3rd Year</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="year4-tab" data-bs-toggle="tab" data-bs-target="#year4" type="button" role="tab" aria-controls="year4" aria-selected="false">4th Year</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="year5-tab" data-bs-toggle="tab" data-bs-target="#year5" type="button" role="tab" aria-controls="year5" aria-selected="false">5th Year</button>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Curriculum Tables Content Section -->
    <section class="py-5 bg-white" id="curriculum">
      <div class="container py-3">
        <div class="row">
          <div class="col-md-12">
            <div class="tab-content" id="curriculumTabsContent">
              
              <!-- First Year Tab -->
              <div class="tab-pane fade show active" id="year1" role="tabpanel" aria-labelledby="year1-tab">
                <!-- Semester 1 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 1 - Semester 1</h3>
                <div class="table-responsive mb-5">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Anatomy-I</td><td>3(2-1)</td></tr>
                      <tr><td>Physiology-I</td><td>3(2-1)</td></tr>
                      <tr><td>Kinesiology-I</td><td>3(2-1)</td></tr>
                      <tr><td>Functional English</td><td>3(3-0)</td></tr>
                      <tr><td>Natural Sciences</td><td>3(2-1)</td></tr>
                      <tr><td>Arts and Humanities</td><td>2(2-0)</td></tr>
                      <tr><td>Understanding Holy Quran-I</td><td>1(1-0)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>18</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <!-- Semester 2 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 1 - Semester 2</h3>
                <div class="table-responsive mb-4">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Anatomy-II</td><td>3(2-1)</td></tr>
                      <tr><td>Physiology-II</td><td>3(2-1)</td></tr>
                      <tr><td>Kinesiology-II</td><td>3(2-1)</td></tr>
                      <tr><td>Quantitative Reasoning –I</td><td>3(3-0)</td></tr>
                      <tr><td>Expository Writing</td><td>3(3-0)</td></tr>
                      <tr><td>Pakistan Studies</td><td>2(2-0)</td></tr>
                      <tr><td>Understanding Holy Quran-II</td><td>1(1-0)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>18</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
              <!-- Second Year Tab -->
              <div class="tab-pane fade" id="year2" role="tabpanel" aria-labelledby="year2-tab">
                <!-- Semester 3 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 2 - Semester 3</h3>
                <div class="table-responsive mb-5">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Anatomy –III</td><td>3(2-1)</td></tr>
                      <tr><td>Physiology-III</td><td>3(2-1)</td></tr>
                      <tr><td>Medical Physics</td><td>3(2-1)</td></tr>
                      <tr><td>Application of ICT</td><td>3(2-1)</td></tr>
                      <tr><td>Principals Of Biochemistry</td><td>3(3-0)</td></tr>
                      <tr><td>Quantitative Reasoning-II</td><td>3(3-0)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>18</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <!-- Semester 4 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 2 - Semester 4</h3>
                <div class="table-responsive mb-4">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Anatomy -IV (Neuro Anatomy)</td><td>3(2-1)</td></tr>
                      <tr><td>Biomechanics & Ergonomics</td><td>3(2-1)</td></tr>
                      <tr><td>Human Psychology</td><td>2(2-0)</td></tr>
                      <tr><td>Ideology And Constitution of Pakistan</td><td>2(2-0)</td></tr>
                      <tr><td>Civics And Community Engagement</td><td>2(2-0)</td></tr>
                      <tr><td>Entrepreneurship in Health Care</td><td>2(2-0)</td></tr>
                      <tr><td>Islamic Studies</td><td>2(2-0)</td></tr>
                      <tr><td>Social Sciences</td><td>2(2-0)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>18</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
              <!-- Third Year Tab -->
              <div class="tab-pane fade" id="year3" role="tabpanel" aria-labelledby="year3-tab">
                <!-- Semester 5 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 3 - Semester 5</h3>
                <div class="table-responsive mb-5">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Exercise Physiology</td><td>3(2-1)</td></tr>
                      <tr><td>Physical Agents & Electrotherapy-I</td><td>3(2-1)</td></tr>
                      <tr><td>Community Medicine & Rehabilitation</td><td>3(2-1)</td></tr>
                      <tr><td>Supervised Clinical Practice-I</td><td>3(0-3)</td></tr>
                      <tr><td>Pharmacology & Therapeutics-I</td><td>2(2-0)</td></tr>
                      <tr><td>Pathology & Microbiology-I</td><td>2(2-0)</td></tr>
                      <tr><td>Artificial Intelligence in Health Care</td><td>2(2-0)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>18</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <!-- Semester 6 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 3 - Semester 6</h3>
                <div class="table-responsive mb-4">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Pharmacology & Therapeutics-II</td><td>2(2-0)</td></tr>
                      <tr><td>Molecular Biology & Genetics</td><td>2(2-0)</td></tr>
                      <tr><td>Physical Agents & Electrotherapy-II</td><td>3(2-1)</td></tr>
                      <tr><td>Therapeutic Exercises & Techniques</td><td>3(2-1)</td></tr>
                      <tr><td>Sustainable Development Goals Health & Wellbeing</td><td>3(2-1)</td></tr>
                      <tr><td>Pathology & Microbiology-II</td><td>3(2-1)</td></tr>
                      <tr><td>Supervised Clinical Practice-II</td><td>3(0-3)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>19</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Fourth Year Tab -->
              <div class="tab-pane fade" id="year4" role="tabpanel" aria-labelledby="year4-tab">
                <!-- Semester 7 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 4 - Semester 7</h3>
                <div class="table-responsive mb-5">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Medicine-I</td><td>3(3-0)</td></tr>
                      <tr><td>Surgery-I</td><td>3(3-0)</td></tr>
                      <tr><td>Musculoskeletal Physical Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Radiology & Diagnostic Imaging</td><td>3(2-1)</td></tr>
                      <tr><td>Scientific Inquiry & Research Methods</td><td>3(2-1)</td></tr>
                      <tr><td>Supervised Clinical Practice-III</td><td>4(0-4)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>19</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <!-- Semester 8 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 4 - Semester 8</h3>
                <div class="table-responsive mb-4">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Professional Practice in Health Care</td><td>2(2-0)</td></tr>
                      <tr><td>Medicine-II</td><td>3(3-0)</td></tr>
                      <tr><td>Surgery-II</td><td>3(3-0)</td></tr>
                      <tr><td>Neurological Physical Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Sports Physical Therapy</td><td>2(1-1)</td></tr>
                      <tr><td>Biostatistics</td><td>3(2-1)</td></tr>
                      <tr><td>Supervised Clinical Practice-IV</td><td>4(0-4)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>20</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Fifth Year Tab -->
              <div class="tab-pane fade" id="year5" role="tabpanel" aria-labelledby="year5-tab">
                <!-- Semester 9 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 5 - Semester 9</h3>
                <div class="table-responsive mb-5">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Integumentary Physical Therapy</td><td>2(2-0)</td></tr>
                      <tr><td>Prosthetics & Orthotics</td><td>2(2-0)</td></tr>
                      <tr><td>Clinical Decision Making & Differential Diagnosis</td><td>3(3-0)</td></tr>
                      <tr><td>Emergency Procedures in Physical Therapy</td><td>2(1-1)</td></tr>
                      <tr><td>Cardiopulmonary Physical Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Evidence Based Practice</td><td>3(2-1)</td></tr>
                      <tr><td>Supervised Clinical Practice-V</td><td>4(0-4)</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>19</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                
                <!-- Semester 10 -->
                <h3 class="fw-bold mt-4 mb-3 text-dark h5" style="font-family: 'Raleway', sans-serif;">YEAR 5 - Semester 10</h3>
                <div class="table-responsive mb-4">
                  <table class="table table-bordered curriculum-table mb-0 bg-white">
                    <thead>
                      <tr>
                        <th>Course Title</th>
                        <th>Credit Hours</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Manual Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Women’s Health Physical Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Paediatric And Neonatal Physical Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Geriatric Physical Therapy</td><td>3(2-1)</td></tr>
                      <tr><td>Supervised Clinical Practice-VI</td><td>4(0-4)</td></tr>
                      <tr><td>Capstone / Research Project</td><td>3</td></tr>
                      <tr class="table-secondary fw-semibold">
                        <td>Total Credits</td>
                        <td>19</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    @elseif ($program->id == 2)
    <!-- M.Phil Rehabilitation Sciences Specializations -->
    <section class="py-5 bg-white">
      <div class="container py-4 text-center">
        <h2 class="fw-bold mb-4 text-dark" style="font-family: 'Raleway', sans-serif;">Specializations & Program Details</h2>
        <p class="lead text-muted mb-5">The 2-Year M.Phil in Rehabilitation Sciences offers three distinct areas of clinical specialization:</p>
        
        <div class="row g-4 justify-content-center">
          <div class="col-md-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
              <i class="fa-solid fa-brain text-accent fs-1 mb-3"></i>
              <h4 class="fw-bold mb-2">Neurological Physical Therapy</h4>
              <p class="text-muted small">Advanced concepts and research in diagnosing and treating neuromuscular disorders, stroke rehabilitation, and movement sciences.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
              <i class="fa-solid fa-wheelchair text-accent fs-1 mb-3"></i>
              <h4 class="fw-bold mb-2">Prosthetics & Orthotics</h4>
              <p class="text-muted small">Focusing on modern designs, clinical evaluations, and structural biomechanics of supportive devices and artificial limbs.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
              <i class="fa-solid fa-bone text-accent fs-1 mb-3"></i>
              <h4 class="fw-bold mb-2">Orthopedic Physical Therapy</h4>
              <p class="text-muted small">Specialized training in musculoskeletal disorder rehabilitation, spine treatment, manual therapy, and clinical orthopedics.</p>
            </div>
          </div>
        </div>
        
        <div class="mt-5 p-4 bg-light rounded text-muted text-start border">
          <h4 class="fw-bold text-dark h6 mb-3">Program Structure</h4>
          <ul class="mb-0 ps-3 d-flex flex-column gap-2" style="font-size: 0.9rem;">
            <li><strong>Duration:</strong> 2 Years (4 Semesters)</li>
            <li><strong>Total Credit Hours:</strong> 30 Credit Hours (24 Course Work + 6 Thesis Research)</li>
            <li><strong>HEC Recognition:</strong> Fully recognized and approved with active NOC prior to launch.</li>
          </ul>
        </div>
      </div>
    </section>
    @else
    <!-- PhD Rehabilitation Sciences Program Details -->
    <section class="py-5 bg-white">
      <div class="container py-4 text-center">
        <h2 class="fw-bold mb-4 text-dark" style="font-family: 'Raleway', sans-serif;">Doctoral Program Details</h2>
        <p class="lead text-muted mb-5">The 3-Year PhD in Rehabilitation Sciences represents our highest tier of research and academic excellence.</p>
        
        <div class="p-5 bg-light rounded shadow-sm max-width-800 mx-auto text-start">
          <h4 class="fw-bold mb-3"><i class="fa-solid fa-flask text-accent me-2"></i>Research Focused Curriculum</h4>
          <p class="text-muted" style="line-height: 1.75;">
            Our doctoral candidates participate in cutting-edge clinical trials, biomechanics studies, and evidence-based physiotherapy research. Scholars collaborate with global experts and utilize our modern laboratory facilities, including the Bio Machines and Biomechanics Lab, to conduct independent original research.
          </p>
          
          <h4 class="fw-bold mt-4 mb-3"><i class="fa-solid fa-graduation-cap text-accent me-2"></i>Graduation Requirements</h4>
          <ul class="mb-0 ps-3 d-flex flex-column gap-2 text-muted" style="font-size: 0.9rem;">
            <li>Successful completion of 18 Credit Hours of advanced doctoral coursework.</li>
            <li>Passing the comprehensive examination for candidacy.</li>
            <li>Conducting, compiling, and defending a peer-reviewed original research dissertation.</li>
            <li>Minimum duration of 3 Years.</li>
          </ul>
        </div>
      </div>
    </section>
    @endif
  </main>
@endsection

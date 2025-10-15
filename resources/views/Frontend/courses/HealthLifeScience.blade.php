@extends('Frontend.layouts.master')

@section('title', 'Health & Life Sciences - BSAT')

@section('content')


    <!-- Modal Search Start -->
    <div
      class="modal fade"
      id="searchModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Search by keyword
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body d-flex align-items-center bg-primary">
            <div class="input-group w-75 mx-auto d-flex">
              <input
                type="search"
                class="form-control p-3"
                placeholder="keywords"
                aria-describedby="search-icon-1"
              />
              <span
                id="search-icon-1"
                class="btn bg-light border nput-group-text p-3"
                ><i class="fa fa-search"></i
              ></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Search End -->

    <!-- Header Start -->
    <!-- <div class="container-fluid bg-breadcrumb_service">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div> -->
    <!-- Header End -->

    <!-- Article Content Start -->
    <article class="container article my-5">
      <a
        href="javascript:void(0);"
        onclick="window.history.back()"
        class="btn btn-transparent d-flex align-items-center"
      >
        <strong><i class="bi bi-arrow-left me-2"></i> Back</strong>
      </a>

      <h2 class="title mb-4">Health & Life Sciences – BSAT</h2>

        <hr class="my-5" />

      <!-- Introduction -->
      <h3 class="text-primary fs-4">Introduction</h3>
      <p class="test-color-dark fs-5">
        Make a Difference in the World of Healthcare and Scientific Discovery.
        <br />
        Health & Life Sciences programs are designed for students who are
        passionate about helping others, advancing medical knowledge, and
        improving quality of life. These degrees prepare future healthcare
        professionals, researchers, and scientists to work at the forefront of
        medicine, biotechnology, and public health. BSAT partners with top
        universities offering world-class laboratories, clinical placements, and
        global research opportunities in the life sciences field.
      </p>

      <div
          class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4 rounded-3"
        >
        <img
          src="{{ asset('assets/img/img_pic/6.5 Science & Environment/Whisk_6bdae63b47.jpg') }}"
          alt="Pre and Post Arrival Support"
          class="img-fluid"
        />
      </div>

      <hr class="my-5" />

      <!-- Popular Programs -->
      <h3 class="text-primary fs-4">Popular Programs</h3>
      <ul class="test-color-dark fs-5">
        <li>Nursing</li>
        <li>Public Health</li>
        <li>Biomedical Science</li>
        <li>Pharmacy</li>
        <li>Biotechnology</li>
        <li>Nutrition & Dietetics</li>
        <li>Physiotherapy</li>
        <li>Medical Laboratory Technology</li>
        <li>Health Informatics</li>
        <li>Pre-Med Pathways</li>
      </ul>

      <hr class="my-5" />

      <!-- Career Pathways -->
      <h3 class="text-primary fs-4">Career Pathways</h3>
      <p class="test-color-dark fs-5">Graduates in Health & Life Sciences can work in:</p>
      <ul class="test-color-dark fs-5">
        <li>Hospitals & Clinics</li>
        <li>Pharmaceutical Companies</li>
        <li>Research & Diagnostic Laboratories</li>
        <li>Government Health Departments</li>
        <li>International Health Organizations</li>
        <li>Public Health Policy & Advocacy</li>
        <li>Biotech & Biomedical Research Firms</li>
      </ul>
      <p class="test-color-dark fs-5">These programs offer high employability and global impact.</p>

      <hr class="my-5" />

      <!-- Entry Requirements -->
      <h3>Entry Requirements</h3>
     <hr class="my-5" />
      <h5 class="text-primary fs-4" >For Bachelor’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>
          High school diploma with strong grades in Biology, Chemistry, and/or
          Math
        </li>
        <li>Minimum GPA: 2.5 to 3.0 out of 4.0</li>
        <li>
          English Proficiency:
          <ul>
            <li>IELTS: 6.0 overall (no band below 5.5)</li>
            <li>TOEFL iBT: 70+</li>
            <li>PTE Academic: 50+</li>
            <li>Duolingo: 100+</li>
          </ul>
        </li>
      </ul>

      <h5 class="text-primary fs-4">For Master’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>Bachelor’s degree in a relevant life sciences or health field</li>
        <li>GPA: 3.0 out of 4.0 (or equivalent)</li>
        <li>
          English Proficiency:
          <ul>
            <li>IELTS: 6.5 overall (no band below 6.0)</li>
            <li>TOEFL iBT: 80+</li>
            <li>PTE Academic: 58+</li>
            <li>Duolingo: 110+</li>
          </ul>
        </li>
        <li>
          Additional Documents:
          <ul>
            <li>Statement of Purpose (SOP)</li>
            <li>2–3 Recommendation Letters</li>
            <li>Updated Resume</li>
            <li>Official Transcripts</li>
          </ul>
        </li>
      </ul>
    </article>
    <!-- Article Content End -->

    <!-- FAQs Start -->
    <div class="container-fluid faq-section bg-light py-5">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
            <div class="text-center mb-5">
              <h4 class="text-primary">Some Important FAQ's</h4>
              <h1 class="display-5 mb-0">Common Frequently Asked Questions</h1>
            </div>

            <div class="accordion" id="accordionExample">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Q: Do Health & Life Sciences programs include clinical
                    training?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Many programs include lab sessions, clinical
                    placements, or internships for hands-on experience.
                  </div>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Q: Can I become a doctor through these programs?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Pre-med pathways prepare students for medical school, but
                    becoming a doctor requires additional qualifications and
                    licensing.
                  </div>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    Q: What is the job outlook in healthcare fields?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Excellent. There is a global demand for healthcare
                    professionals, particularly in nursing, public health, and
                    biotech.
                  </div>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-expanded="false"
                    aria-controls="collapseFour"
                  >
                    Q: Are there research opportunities during studies?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Many universities provide undergraduate and
                    graduate-level research opportunities in labs or in
                    partnership with hospitals.
                  </div>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFive"
                    aria-expanded="false"
                    aria-controls="collapseFive"
                  >
                    Q: Is English proficiency required for healthcare programs?
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Strong communication skills are essential, and
                    applicants must meet English language test score
                    requirements.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FAQs End -->

    <!-- Journey today Start -->
    <div class="container-fluid team py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">
            You may be eligible for up to 50% Scholarship at a renowned
            University Abroad
          </h4>
          <p class="mb-0">
            Check your eligibility and receive end to end assisstance for FREE!
          </p>
          <a href="{{ route('apply_with_us') }}" class="learn-more btn btn-primary px-5 py-3 mt-5 h6">
            Get a Free Profile Assessment <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <!-- End of container -->
    </div>
    <!--  Journey today End -->



@endsection
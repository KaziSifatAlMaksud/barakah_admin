@extends('Frontend.layouts.master')

@section('title', 'Education & Teaching - BSAT')

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

      <h2 class="title mb-4">Education & Teaching – BSAT</h2>

      <hr class="my-5">

      <!-- Introduction -->
      <h3 class="text-primary fs-4">Introduction</h3>
      <p class="test-color-dark fs-5">
        Inspire Minds and Lead the Future of Learning
        <br />
        Education & Teaching programs are designed for those passionate about
        shaping young minds, empowering learners, and contributing to
        educational development. These programs offer pedagogical theory,
        classroom experience, and specialized knowledge in early childhood,
        secondary education, special education, and TESOL. BSAT connects
        aspiring educators with top institutions that provide teaching
        practicums, international certifications, and strong pathways into
        teaching careers worldwide.
      </p>

      <div
        class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4 rounded-3"
      >
        <img
          src="{{ asset('assets/img/img_pic/6.8 Education & Teaching/Whisk_83afa10faa.jpg') }}"
          alt="Pre and Post Arrival Support"
          class="img-fluid"
        />
      </div>

      <hr class="my-5" />

      <!-- Popular Programs -->
      <h3 class="text-primary fs-4">Popular Programs</h3>
      <ul class="test-color-dark fs-5">
        <li>Early Childhood Education</li>
        <li>Primary & Secondary Teaching</li>
        <li>TESOL / ESL (Teaching English to Speakers of Other Languages)</li>
        <li>Special Education</li>
        <li>Educational Leadership</li>
        <li>Curriculum & Instruction</li>
        <li>Adult & Vocational Education</li>
        <li>Inclusive Education</li>
        <li>Counseling & Guidance in Schools</li>
      </ul>

      <hr class="my-5" />

      <!-- Career Pathways -->
      <h3 class="text-primary fs-4">Career Pathways</h3>
      <p class="test-color-dark fs-5">Graduates of Education & Teaching programs may work in:</p>
      <ul class="test-color-dark fs-5">
        <li>Public or Private Schools (Local or International)</li>
        <li>Early Childhood Centers</li>
        <li>Language Institutes</li>
        <li>Special Needs Institutions</li>
        <li>Government & Policy Making</li>
        <li>Curriculum Development Organizations</li>
        <li>Educational NGOs</li>
        <li>Academic Research & Teacher Training</li>
      </ul>

      <hr class="my-5" />

      <!-- Entry Requirements -->
      <h3>Entry Requirements</h3>
      <hr class="my-5">

      <h5 class="text-primary fs-4">For Bachelor’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>High school certificate</li>
        <li>GPA: 2.5 to 3.0 out of 4.0</li>
        <li>
          English Proficiency:
          <ul>
            <li>IELTS: 6.0 (no band below 5.5)</li>
            <li>TOEFL iBT: 70+</li>
            <li>PTE Academic: 50+</li>
            <li>Duolingo: 100+</li>
          </ul>
        </li>
      </ul>

      <h5 class="text-primary fs-4">For Master’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>Bachelor’s degree in education or a related field</li>
        <li>GPA: 3.0 out of 4.0</li>
        <li>
          English Proficiency:
          <ul>
            <li>IELTS: 6.5 (no band below 6.0)</li>
            <li>TOEFL iBT: 80+</li>
            <li>PTE Academic: 58+</li>
            <li>Duolingo: 110+</li>
          </ul>
        </li>
        <li>
          Supporting Documents:
          <ul>
            <li>Statement of Purpose (SOP)</li>
            <li>Academic Transcripts</li>
            <li>Letters of Recommendation</li>
            <li>Resume</li>
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
                    Q: Can international students become licensed teachers?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes, depending on the country and program, you may
                    qualify for teaching licenses or registration after
                    graduation.
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
                    Q: Is classroom experience included in these programs?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Practicum placements or supervised teaching are
                    mandatory in most teaching-related degrees.
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
                    Q: Can I teach English abroad with a TESOL/ESL degree?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Absolutely. TESOL/ESL qualifications are highly sought
                    after in non-English speaking countries.
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
                    Q: Are online teaching skills part of the curriculum?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Many modern education degrees include digital
                    pedagogy and online teaching tools.
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
                    Q: Can I work in education policy or research after this
                    degree?
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Graduates can pursue leadership, policy-making, or
                    academic research roles in the education sector.
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
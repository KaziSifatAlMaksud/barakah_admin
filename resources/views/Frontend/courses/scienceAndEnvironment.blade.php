@extends('Frontend.layouts.master')

@section('title', 'Science & Environment - BSAT')

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

      <h2 class="title mb-4">Science & Environment – BSAT</h2>
      <hr class="my-5" />
      <!-- Introduction -->
      <h3 class="text-primary fs-4">Introduction</h3>
      <p class="text-dark fs-5">
        Explore, Innovate, and Protect Our Planet
        <br />
        Science & Environment programs help students understand the natural
        world, tackle climate challenges, and advance innovation in sustainable
        development. These programs are ideal for curious minds who want to work
        in research, conservation, energy, sustainability, or environmental
        policy. BSAT partners with universities that emphasize lab-based
        learning, fieldwork, and interdisciplinary problem-solving in scientific
        and ecological fields.
      </p>

      <div
        class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4 rounded-3"
      >
        <img
          src="{{ asset('assets/img/img_pic/6.5 Science & Environment/Whisk_c1d7ed2e35.jpg') }}"
          alt="Pre and Post Arrival Support"
          class="img-fluid rounded"
        />
      </div>


      <hr class="my-5" />

      <!-- Popular Programs -->
      <h3 class="text-primary fs-4">Popular Programs</h3>
      <ul class="test-color-dark fs-5">
        <li>Environmental Science</li>
        <li>Physics</li>
        <li>Chemistry</li>
        <li>Biology & Life Sciences</li>
        <li>Geology</li>
        <li>Earth & Atmospheric Sciences</li>
        <li>Marine Science</li>
        <li>Climate Change & Sustainability</li>
        <li>Agricultural Science</li>
        <li>Data Science for Environment</li>
      </ul>

      <hr class="my-5" />

      <!-- Career Pathways -->
      <h3 class="text-primary fs-4">Career Pathways</h3>
      <p class="test-color-dark fs-5">Graduates of Science & Environment degrees may pursue careers in:</p>
      <ul class="test-color-dark fs-5">
        <li>Environmental Consultancy</li>
        <li>Research & Academia</li>
        <li>Renewable Energy Sector</li>
        <li>Waste Management & Water Conservation</li>
        <li>Meteorology & Climate Research</li>
        <li>Wildlife & Marine Conservation</li>
        <li>Government Environmental Agencies</li>
        <li>Environmental Data & Impact Analysis</li>
      </ul>

      <hr class="my-5" />

      <!-- Entry Requirements -->
      <h3 class="text-primary fs-4">Entry Requirements</h3>

      <h5 class="test-color-dark fs-5">For Bachelor’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>
          High school diploma with strong grades in Science (Physics, Chemistry,
          Biology, or Math)
        </li>
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
        <li >
          Bachelor’s degree in a science, environmental, or engineering-related
          field
        </li>
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
          Required Documents:
          <ul>
            <li>Statement of Purpose (SOP)</li>
            <li>Academic Transcripts</li>
            <li>Letters of Recommendation</li>
            <li>Resume (CV)</li>
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

            <div class="accordion" id="accordionScience">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOneScience">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOneScience"
                    aria-expanded="true"
                    aria-controls="collapseOneScience"
                  >
                    Q: Are these degrees suitable for research careers?
                  </button>
                </h2>
                <div
                  id="collapseOneScience"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOneScience"
                  data-bs-parent="#accordionScience"
                >
                  <div class="accordion-body">
                    A: Yes. Many programs are research-intensive and ideal for
                    students pursuing scientific investigation or PhD pathways.
                  </div>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoScience">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwoScience"
                    aria-expanded="false"
                    aria-controls="collapseTwoScience"
                  >
                    Q: Can I work in sustainability after graduating?
                  </button>
                </h2>
                <div
                  id="collapseTwoScience"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwoScience"
                  data-bs-parent="#accordionScience"
                >
                  <div class="accordion-body">
                    A: Absolutely. Programs like Environmental Science, Climate
                    Change, and Energy Systems directly align with
                    sustainability careers.
                  </div>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThreeScience">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThreeScience"
                    aria-expanded="false"
                    aria-controls="collapseThreeScience"
                  >
                    Q: Do these programs involve fieldwork?
                  </button>
                </h2>
                <div
                  id="collapseThreeScience"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThreeScience"
                  data-bs-parent="#accordionScience"
                >
                  <div class="accordion-body">
                    A: Yes. Most environmental and natural science courses
                    include field trips, data collection, and lab work.
                  </div>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFourScience">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFourScience"
                    aria-expanded="false"
                    aria-controls="collapseFourScience"
                  >
                    Q: What if I want to specialize further?
                  </button>
                </h2>
                <div
                  id="collapseFourScience"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFourScience"
                  data-bs-parent="#accordionScience"
                >
                  <div class="accordion-body">
                    A: Postgraduate options are available in areas such as
                    marine biology, environmental engineering, or climate
                    modeling.
                  </div>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFiveScience">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFiveScience"
                    aria-expanded="false"
                    aria-controls="collapseFiveScience"
                  >
                    Q: Are there jobs in both private and public sectors?
                  </button>
                </h2>
                <div
                  id="collapseFiveScience"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFiveScience"
                  data-bs-parent="#accordionScience"
                >
                  <div class="accordion-body">
                    A: Yes. Graduates find employment in government, NGOs,
                    research institutes, consulting firms, and green-tech
                    industries.
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
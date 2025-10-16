@extends('Frontend.layouts.master')

@section('title', 'Hospitality & Tourism - BSAT')

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

      <h2 class="title mb-4">Hospitality & Tourism – BSAT</h2>

      <hr class="my-5" />
      <!-- Introduction -->
      <h3 class="text-primary fs-4">Introduction</h3>
      <p class="test-color-dark fs-5">
        Shape Experiences and Drive Global Hospitality
        <br />
        The Hospitality & Tourism industry is one of the fastest-growing sectors
        worldwide, offering dynamic careers in hotels, travel, events, and
        customer experience. These programs blend business management with
        customer service, cultural awareness, and innovation. BSAT connects
        students with top institutions that provide hands-on training, global
        internships, and industry-recognized certifications in the hospitality
        sector.
      </p>

      <div
        class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4 rounded-3"
      >
        <img
          src="{{ asset('assets/img/img_pic/6.6 Hospitality & Tourism/Whisk_4d2c3dc814.jpg') }}"
          alt="Pre and Post Arrival Support"
          class="img-fluid"
        />
      </div>

      <hr class="my-5" />

      <!-- Popular Programs -->
      <h3 class="text-primary fs-4">Popular Programs</h3>
      <ul class="test-color-dark fs-5">
        <li>Hotel & Hospitality Management</li>
        <li>Tourism & Travel Management</li>
        <li>Event Management</li>
        <li>Culinary Arts</li>
        <li>Resort & Leisure Management</li>
        <li>Airline & Airport Management</li>
        <li>Luxury Brand Management</li>
        <li>Food & Beverage Operations</li>
        <li>Hospitality Marketing</li>
        <li>Sustainable Tourism</li>
      </ul>

      <hr class="my-5" />

      <!-- Career Pathways -->
      <h3 class="text-primary fs-4">Career Pathways</h3>
      <p class="test-color-dark fs-5">Graduates in Hospitality & Tourism can pursue roles in:</p>
      <ul class="test-color-dark fs-5">
        <li>Hotel Operations & General Management</li>
        <li>Travel Agencies & Tour Operations</li>
        <li>Event Planning & Conference Services</li>
        <li>Cruise Lines & Airlines</li>
        <li>Food Service & Restaurant Chains</li>
        <li>Resort & Spa Management</li>
        <li>Destination Marketing Organizations</li>
        <li>Customer Experience Design</li>
      </ul>

      <hr class="my-5" />

      <!-- Entry Requirements -->
      <h3>Entry Requirements</h3>

      <hr class="my-5" />

      <h5 class="text-primary fs-4">For Bachelor’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>High school certificate (any stream accepted)</li>
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
        <li>Bachelor’s degree in business, hospitality, or a related field</li>
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
            <li>Recommendation Letters</li>
            <li>Resume</li>
            <li>Academic Transcripts</li>
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

            <div class="accordion" id="accordionHospitality">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOneHospitality">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOneHospitality"
                    aria-expanded="true"
                    aria-controls="collapseOneHospitality"
                  >
                    Q: Do I need prior experience to study hospitality?
                  </button>
                </h2>
                <div
                  id="collapseOneHospitality"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOneHospitality"
                  data-bs-parent="#accordionHospitality"
                >
                  <div class="accordion-body">
                    A: No. Many programs accept students without prior
                    experience and provide internships to build practical
                    skills.
                  </div>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoHospitality">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwoHospitality"
                    aria-expanded="false"
                    aria-controls="collapseTwoHospitality"
                  >
                    Q: What are the work opportunities during study?
                  </button>
                </h2>
                <div
                  id="collapseTwoHospitality"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwoHospitality"
                  data-bs-parent="#accordionHospitality"
                >
                  <div class="accordion-body">
                    A: Many institutions provide paid internships and
                    cooperative placements in hotels, resorts, and travel firms.
                  </div>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThreeHospitality">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThreeHospitality"
                    aria-expanded="false"
                    aria-controls="collapseThreeHospitality"
                  >
                    Q: Can I specialize in a specific area like events or luxury
                    tourism?
                  </button>
                </h2>
                <div
                  id="collapseThreeHospitality"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThreeHospitality"
                  data-bs-parent="#accordionHospitality"
                >
                  <div class="accordion-body">
                    A: Yes. Programs often offer specializations in events,
                    culinary arts, luxury services, or eco-tourism.
                  </div>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFourHospitality">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFourHospitality"
                    aria-expanded="false"
                    aria-controls="collapseFourHospitality"
                  >
                    Q: What are the long-term career prospects?
                  </button>
                </h2>
                <div
                  id="collapseFourHospitality"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFourHospitality"
                  data-bs-parent="#accordionHospitality"
                >
                  <div class="accordion-body">
                    A: With experience, graduates can progress into managerial
                    positions or even launch their own travel or hospitality
                    ventures.
                  </div>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFiveHospitality">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFiveHospitality"
                    aria-expanded="false"
                    aria-controls="collapseFiveHospitality"
                  >
                    Q: Is hospitality a global industry?
                  </button>
                </h2>
                <div
                  id="collapseFiveHospitality"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFiveHospitality"
                  data-bs-parent="#accordionHospitality"
                >
                  <div class="accordion-body">
                    A: Absolutely. Hospitality careers span across international
                    hotel chains, airlines, cruise lines, and tourism boards
                    worldwide.
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
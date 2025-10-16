@extends('Frontend.layouts.master')

@section('title', 'Business and Management - BSAT')

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
        href="../courses.html"
        onclick="window.history.back()"
        class="btn btn-transparent d-flex align-items-center"
      >
        <strong><i class="bi bi-arrow-left me-2"></i> Back</strong>
      </a>

      <h2 class="title mb-4">Business & Management – BSAT</h2>

      
      <hr class="my-5" />
      <!-- Introduction -->
      <h3 class="text-primary fs-4">Introduction</h3>
      <p class="test-color-dark fs-5">
        Shape Global Business with a World-Class Education.
        <br />
      Business & Management is one of the most powerful academic fields that opens doors to countless career opportunities in today's competitive and interconnected world. Whether you're interested in finance, marketing, leadership, or launching your own startup — a degree in business equips you with the skills, knowledge, and confidence to thrive across industries and continents.At BSAT, we guide you toward the best universities and programs that blend academic excellence with real-world relevance. From foundational courses to globally recognized MBAs, our partner institutions help you build the mindset of a future business leader.

      </p>

      <div
        class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4"
      >
        <img
          src="{{ asset('assets/img/img_pic/6.1 Business Management/Whisk_24b6a2aa65.jpg') }}"
          alt="Pre and Post Arrival Support"
          class="img-fluid"
        />
      </div>
      <hr class="my-5" />

      <!-- Popular Programs -->
      <h3 class="text-primary fs-4">Popular Programs</h3>
      <ul class="test-color-dark fs-5">
        <li>Bachelor of Business Administration (BBA)</li>
        <li>Master of Business Administration (MBA)</li>
        <li>International Business</li>
        <li>Marketing & Brand Management</li>
        <li>Finance & Accounting</li>
        <li>Entrepreneurship & Innovation</li>
        <li>Human Resource Management</li>
        <li>Supply Chain & Logistics</li>
        <li>Hospitality Management</li>
        <li>Business Analytics</li>
      </ul>

      <hr class="my-5" />

      <!-- Career Pathways -->
      <h3 class="text-primary fs-4">Career Pathways</h3>
      <p class="test-color-dark fs-5">Graduates of Business & Management programs can pursue careers in:</p>
      <ul class="test-color-dark fs-5">
        <li>Banking and Finance</li>
        <li>Marketing & Advertising</li>
        <li>Consulting</li>
        <li>International Trade</li>
        <li>Human Resources</li>
        <li>Startups & Entrepreneurship</li>
        <li>Operations & Logistics</li>
         <li>Business Strategy & Analytics</li>
          <li>Operations & Logistics</li>
          <li>Corporate Leadership Roles</li>
      </ul>
      <p class="test-color-dark fs-5">Top employers include multinational corporations, consulting firms, financial institutions, and tech startups.</p>

      <hr class="my-5" />

      <!-- Entry Requirements -->
      <h3>Entry Requirements</h3>
      <hr class="my-5" />

      <h5 class="text-primary fs-4">For Bachelor’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>
        Completion of 12 years of formal education (high school certificate or equivalent)

        </li>
        <li>Minimum GPA: 2.5 to 3.0 out of 4.0 (varies by university)</li>
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
                    Q: What are the most in-demand Business & Management specializations?

                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Popular and in-demand specializations include Finance, Marketing, Business Analytics, Supply Chain Management, Human Resources, and International Business.

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
                    Q: Can I study Business & Management without a background in business?

                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes! Many undergraduate programs require only a high school certificate, and most MBA programs accept students from diverse academic backgrounds as long as they meet entry requirements.

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
                    Q: What kind of job opportunities will I have after graduating?

                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Graduates can pursue roles in finance, marketing, consulting, operations, human resources, and management in multinational companies, startups, and public organizations.

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
                    Q: Are internships included in the programs?
                  </button>
                </h2>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Yes. Many universities offer internship placements or co-op programs as part of their curriculum to give students hands-on industry experience.

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
                    Q: Is a Business & Management degree worth the investment?
                  </button>
                </h2>
                <div
                  id="collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    A: Absolutely. Business & Management degrees have strong career prospects and are highly valued across industries worldwide, offering high return on investment and global mobility.

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


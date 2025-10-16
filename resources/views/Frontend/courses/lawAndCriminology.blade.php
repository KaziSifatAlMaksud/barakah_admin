@extends('Frontend.layouts.master')

@section('title', 'Law & Criminology - BSAT')

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

      <h2 class="title mb-4">Law & Criminology – BSAT</h2>

      <hr class="my-5" />
      <!-- Introduction -->
      <h3 class="text-primary fs-4">Introduction</h3>
      <p class="test-color-dark fs-5">
        Uphold Justice and Understand Criminal Behavior
        <br />
        Law & Criminology programs offer in-depth knowledge of legal systems,
        criminal justice, human rights, and the psychological and sociological
        factors that influence crime. These programs are ideal for students
        passionate about social justice, public safety, and legal reform. BSAT
        collaborates with leading institutions offering practical legal
        training, mock trials, criminological research, and pathways to legal
        practice or public sector roles.
      </p>

       <div
          class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4 rounded-3"
        >
        <img
          src="{{ asset('assets/img/img_pic/6.7 Law & Criminology/Whisk_d2f17ded94.jpg') }}"
          alt="Pre and Post Arrival Support"
          class="img-fluid"
        />
      </div>

      <hr class="my-5" />

      <!-- Popular Programs -->
      <h3 class="text-primary fs-4">Popular Programs</h3>
      <ul class="test-color-dark fs-5">
        <li>LLB (Bachelor of Laws)</li>
        <li>LLM (Master of Laws)</li>
        <li>Criminology & Criminal Justice</li>
        <li>Forensic Science</li>
        <li>International Law</li>
        <li>Human Rights Law</li>
        <li>Policing & Law Enforcement</li>
        <li>Legal Studies</li>
        <li>Criminal Psychology</li>
        <li>Youth Justice & Social Policy</li>
      </ul>

      <hr class="my-5" />

      <!-- Career Pathways -->
      <h3 class="text-primary fs-4">Career Pathways</h3>
      <p class="test-color-dark fs-5">Graduates in Law & Criminology can pursue roles in:</p>
      <ul class="test-color-dark fs-5">
        <li>Legal Practice (Solicitor/Barrister)</li>
        <li>Police & Criminal Investigations</li>
        <li>Forensics & Crime Scene Analysis</li>
        <li>Human Rights & Advocacy</li>
        <li>Government & Policy-Making</li>
        <li>Social Work & Youth Justice</li>
        <li>Correctional Services</li>
        <li>Legal Research & Academia</li>
      </ul>

      <hr class="my-5" />

      <!-- Entry Requirements -->
      <h3>Entry Requirements</h3>

      <hr class="my-5" />

      <h5 class="text-primary fs-4">For Bachelor’s Programs:</h5>
      <ul class="test-color-dark fs-5">
        <li>
          High school certificate (with humanities or law-related subjects
          preferred)
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
        <li>Bachelor’s degree in law, social sciences, or related field</li>
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
            <li>Letters of Recommendation (LORs)</li>
            <li>Curriculum Vitae (CV)</li>
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

            <div class="accordion" id="accordionLaw">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOneLaw">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOneLaw"
                    aria-expanded="true"
                    aria-controls="collapseOneLaw"
                  >
                    Q: Can I become a lawyer with an international degree?
                  </button>
                </h2>
                <div
                  id="collapseOneLaw"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOneLaw"
                  data-bs-parent="#accordionLaw"
                >
                  <div class="accordion-body">
                    A: Yes, but you must meet the bar exam or licensing
                    requirements of the country where you wish to practice.
                  </div>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoLaw">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwoLaw"
                    aria-expanded="false"
                    aria-controls="collapseTwoLaw"
                  >
                    Q: What is the difference between law and criminology?
                  </button>
                </h2>
                <div
                  id="collapseTwoLaw"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwoLaw"
                  data-bs-parent="#accordionLaw"
                >
                  <div class="accordion-body">
                    A: Law focuses on legal systems and statutes; criminology
                    studies the causes and prevention of crime from a social
                    science perspective.
                  </div>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThreeLaw">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThreeLaw"
                    aria-expanded="false"
                    aria-controls="collapseThreeLaw"
                  >
                    Q: Are these degrees suitable for international careers?
                  </button>
                </h2>
                <div
                  id="collapseThreeLaw"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThreeLaw"
                  data-bs-parent="#accordionLaw"
                >
                  <div class="accordion-body">
                    A: Yes. Law, international law, and human rights degrees are
                    highly relevant to global institutions, NGOs, and diplomacy.
                  </div>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFourLaw">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFourLaw"
                    aria-expanded="false"
                    aria-controls="collapseFourLaw"
                  >
                    Q: Do I need a science background for forensic studies?
                  </button>
                </h2>
                <div
                  id="collapseFourLaw"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFourLaw"
                  data-bs-parent="#accordionLaw"
                >
                  <div class="accordion-body">
                    A: Some programs require basic knowledge of biology or
                    chemistry, while others include foundational science
                    modules.
                  </div>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFiveLaw">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFiveLaw"
                    aria-expanded="false"
                    aria-controls="collapseFiveLaw"
                  >
                    Q: Can I work in policing with a criminology degree?
                  </button>
                </h2>
                <div
                  id="collapseFiveLaw"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingFiveLaw"
                  data-bs-parent="#accordionLaw"
                >
                  <div class="accordion-body">
                    A: Yes. Many criminology graduates work in law enforcement,
                    crime prevention, and policy-related fields.
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
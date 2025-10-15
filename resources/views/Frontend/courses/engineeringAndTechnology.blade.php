@extends('Frontend.layouts.master')

@section('title', 'Engineering and Technology - BSAT')

@section('content')

     <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center bg-primary">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
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

        <h2 class="title mb-4">Engineering & Technology – BSAT</h2>

        <div
          class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4 rounded-3"
        >
   
          <img
            src="../img/img_pic/6.2 Engineering Technology/Whisk_1d7f7e46aa.jpg"
            alt="Pre and Post Arrival Support"
            class="img-fluid"
          />
        </div>

        <!-- Introduction -->
        <h3 class="text-primary fs-4">Introduction</h3>
        <p class="test-color-dark fs-5">
          Build the Future with Innovation and Engineering Excellence. <br />
          Engineering & Technology programs are ideal for students who want to
          design, build, and innovate solutions for the modern world. From
          sustainable infrastructure and advanced robotics to artificial
          intelligence and clean energy — engineering graduates are shaping the
          future. At BSAT, we help you discover top engineering programs that
          offer cutting-edge labs, real-world research, and strong career
          outcomes.
        </p>

        <hr class="my-5" />

        <!-- Popular Programs -->
        <h3 class="text-primary fs-4">Popular Programs</h3>
        <ul class="test-color-dark fs-5">
          <li>Civil Engineering</li>
          <li>Mechanical Engineering</li>
          <li>Electrical & Electronics Engineering</li>
          <li>Computer Engineering</li>
          <li>Software Engineering</li>
          <li>Mechatronics & Robotics</li>
          <li>Environmental Engineering</li>
          <li>Aerospace Engineering</li>
          <li>Data Science & AI</li>
          <li>Information Technology</li>
        </ul>

        <hr class="my-5" />

        <!-- Career Pathways -->
        <h3>Career Pathways</h3>
        <p>Graduates of Engineering & Technology programs can work in:</p>
        <ul>
          <li>Construction & Infrastructure</li>
          <li>Automotive & Manufacturing Industries</li>
          <li>Energy & Environmental Sectors</li>
          <li>Tech Companies & Startups</li>
          <li>Government & Research Labs</li>
          <li>Artificial Intelligence & Data Analytics</li>
          <li>Aerospace & Defense</li>
        </ul>
        <p>
          Many engineers also progress into project management, consultancy, and
          innovation roles.
        </p>

        <hr class="my-5" />

        <!-- Entry Requirements -->
        <h3>Entry Requirements</h3>
        <h5>For Bachelor’s Programs:</h5>
        <ul>
          <li>
            Completion of 12 years of formal education with strong performance in
            Mathematics and Science
          </li>
          <li>Minimum GPA: 2.5 to 3.0 out of 4.0 (varies by institution)</li>
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

        <h5>For Master’s Programs:</h5>
        <ul>
          <li>
            Bachelor’s degree in a relevant engineering or science discipline
          </li>
          <li>Minimum GPA: 3.0 out of 4.0 (program-specific)</li>
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
            Supporting Documents:
            <ul>
              <li>Statement of Purpose (SOP)</li>
              <li>2–3 Letters of Recommendation</li>
              <li>Resume/CV</li>
              <li>Academic Transcripts</li>
            </ul>
          </li>
        </ul>
      </article>
      <!-- Article Content End -->


      
        </div>
      </section>
      <!-- Features Details Section -->
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
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Q: What are the best engineering fields for job prospects?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      A: Fields like software engineering, data science, robotics, and environmental engineering are in high demand across industries.
                    </div>
                  </div>
                </div>

                <!-- Item 2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Q: Do I need programming knowledge to study engineering?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      A: Not always. Some fields like computer or software engineering may require basic coding, but others like civil or mechanical do not at the entry level.
                    </div>
                  </div>
                </div>

                <!-- Item 3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Q: Are engineering programs mostly theory-based?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      A: Most programs offer a blend of theory, lab work, hands-on projects, and sometimes internships or industry placements.
                    </div>
                  </div>
                </div>

                <!-- Item 4 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Q: Can I switch engineering disciplines for my master’s?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      A: Yes, with relevant academic background or coursework. For example, students with an electrical background may shift to AI or embedded systems.
                    </div>
                  </div>
                </div>

                <!-- Item 5 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Q: Is accreditation important in engineering degrees?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      A: Yes. Accredited programs ensure that your degree meets international standards and is recognized by employers and licensing bodies.
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
        <div class="container-fluid team py-5  ">
            <div class="container py-5">
                <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">You may be eligible for up to 50% Scholarship at a renowned University Abroad</h4>
                <p class="mb-0">Check your eligibility and receive end to end assisstance for FREE!</p>
                    <button class="learn-more btn btn-primary px-5 py-3 mt-5 h6">
                                        Get a Free Profile Assessment <i class="fa fa-arrow-right"></i>
                    </button>

                </div>        
            </div> <!-- End of container -->
        </div>
        <!--  Journey today End -->


@endsection
@extends('Frontend.layouts.master')

@section('title', 'Destinations - BSAT')

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
    <div class="container-fluid bg-breadcrumb_background">
      <div class="container text-center py-5" style="max-width: 900px">
        <h4
          class="text-white display-4 mb-4 wow fadeInDown"
          data-wow-delay="0.1s"
        >
          Study Abroad with Barakah
        </h4>
        <ol
          class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
          data-wow-delay="0.3s"
        >
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>

          <li class="breadcrumb-item active text-primary">Destinations</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Study Abroad with Barakah</h4>
          <h1 class="display-4 mb-4">Your Trusted Partner</h1>
          <p class="mb-0">
            Your gateway to world-class learning – discover top global study
            destinations with Barakah.
          </p>
        </div>

        <!-- Destination Study Grid -->
        <div class="row g-4 team-container">
          <!-- New Life Insurance Card  1 -->
      

          <div
                class="col-md-6 col-lg-6 col-xl-3 team-member service designer wow fadeInUp"
                data-wow-delay="0.1s"
              >
                <a href="destinations/3.1.StudyInUSA.html" class="text-decoration-none text-dark wow ">
                  <div class="service-item position-relative">
                    <div class="service-img">
                      <img
                        src="{{ asset('assets/img/img_pic/3. Destinations/1. USA.jpg') }}"
                        class="img-fluid rounded-top w-100"
                        alt=""
                      />
                    </div>

                    <div class="service-content p-4" style="z-index: 0">
                      <div
                        class="service-icon rounded-circle overflow-hidden position-absolute shadow"
                        style="
                          width: 70px;
                          height: 70px;
                          top: -40px;
                          right: 20px;
                          border: 2px solid #fff;
                          z-index: 10;
                        "
                      >
                        <img
                          src="{{ asset('assets/img/about/usa_flag.png') }}"
                          alt="Flag"
                          style="
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            display: block;
                          "
                        />
                      </div>

                      <div class="service-content-inner pt-2">
                        <p class="d-inline-block mb-2"> <b>Study in USA </b> </p> <br />
                        
                        <p class="learn-more mb-0">
                          Learn More <i class="fa fa-arrow-right"></i>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

          <!-- New Life Insurance Card  1 End -->

          <!-- New Life Insurance Card  2 -->
          <div
                class="col-md-6 col-lg-6 col-xl-3 team-member service designer wow fadeInUp"
                data-wow-delay="0.3s"
            >
                <a href="destinations/3.2.StudyinUK.html" class="text-decoration-none text-dark">
                    <div class="service-item position-relative">
                        <div class="service-img">
                            <img
                                src="{{ asset('assets/img/img_pic/3. Destinations/2. UK.jpg') }}"
                                class="img-fluid rounded-top w-100"
                                alt=""
                            />
                        </div>

                        <div class="service-content p-4" style="z-index: 0">
                            <div
                                class="service-icon rounded-circle overflow-hidden position-absolute shadow"
                                style="
                                    width: 70px;
                                    height: 70px;
                                    top: -40px;
                                    right: 20px;
                                    border: 2px solid #fff;
                                    z-index: 10;
                                "
                            >
                                <img
                                    src="{{ asset('assets/img/about/uk_flag.jpg') }}"
                                    alt="Flag"
                                    style="
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                        display: block;
                                    "
                                />
                            </div>

                            <div class="service-content-inner pt-2">
                                <p class="d-inline-block mb-2"><b>Study in UK</b></p>
                                <br />
                                <p class="learn-more mb-0">
                                    Learn More <i class="fa fa-arrow-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


          <!-- New Life Insurance Card  1 End -->

          <!-- New Life Insurance Card  3 -->
          <div
              class="col-md-6 col-lg-6 col-xl-3 team-member service designer wow fadeInUp"
              data-wow-delay="0.5s"
          >
              <a href="destinations/3.3.studyInCanada.html" class="text-decoration-none text-dark">
                  <div class="service-item position-relative">
                      <div class="service-img">
                          <img
                              src="{{ asset('assets/img/img_pic/3.3 Canada/Whisk_0abeffafac.jpg') }}"
                              class="img-fluid rounded-top w-100"
                              alt=""
                          />
                      </div>

                      <div class="service-content p-4" style="z-index: 0">
                          <div
                              class="service-icon rounded-circle overflow-hidden position-absolute shadow"
                              style="
                                  width: 70px;
                                  height: 70px;
                                  top: -40px;
                                  right: 20px;
                                  border: 2px solid #fff;
                                  z-index: 10;
                              "
                          >
                              <img
                                  src="{{ asset('assets/img/about/canada_flag.png') }}"
                                  alt="Flag"
                                  style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      display: block;
                                  "
                              />
                          </div>

                          <div class="service-content-inner pt-2">
                              <p class="d-inline-block mb-2"><b>Study in Canada</b></p>
                              <br />
                              <p class="learn-more mb-0">
                                  Learn More <i class="fa fa-arrow-right"></i>
                              </p>
                          </div>
                      </div>
                  </div>
              </a>
          </div>



          
          <!-- New Life Insurance Card  3 End -->

          <!-- New Life Insurance Card  4 -->
          <div
              class="col-md-6 col-lg-6 col-xl-3 team-member service designer wow fadeInUp"
              data-wow-delay="0.7s"
          >
              <a href="#" class="text-decoration-none text-dark">
                  <div class="service-item position-relative">
                      <div class="service-img">
                          <img
                              src="{{ asset('assets/img/about/australia_photo.png') }}"
                              class="img-fluid rounded-top w-100"
                              alt=""
                          />
                      </div>

                      <div class="service-content p-4" style="z-index: 0">
                          <div
                              class="service-icon rounded-circle overflow-hidden position-absolute shadow"
                              style="
                                  width: 70px;
                                  height: 70px;
                                  top: -40px;
                                  right: 20px;
                                  border: 2px solid #fff;
                                  z-index: 10;
                              "
                          >
                              <img
                                  src="{{ asset('assets/img/about/australian flag.png') }}"
                                  alt="Flag"
                                  style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      display: block;
                                  "
                              />
                          </div>

                          <div class="service-content-inner pt-2">
                              <p class="d-inline-block mb-2"><b>Study in Australia</b></p>
                              <br />
                              <p class="learn-more mb-0">
                                  Learn More <i class="fa fa-arrow-right"></i>
                              </p>
                          </div>
                      </div>
                  </div>
              </a>
          </div>

          <!-- New Life Insurance Card  4 End -->
          <!-- New Life Insurance Card  4 -->
        <div
              class="col-md-6 col-lg-6 col-xl-3 team-member service designer wow fadeInUp"
              data-wow-delay="0.9s"
          >
              <a href="destinations/3.4.StudyInEurope.html" class="text-decoration-none text-dark">
                  <div class="service-item position-relative">
                      <div class="service-img">
                          <img
                              src="{{ asset('assets/img/img_pic/3. Destinations/4. Europe.jpg') }}"
                              class="img-fluid rounded-top w-100"
                              alt=""
                          />
                      </div>

                      <div class="service-content p-4" style="z-index: 0">
                          <div
                              class="service-icon rounded-circle overflow-hidden position-absolute shadow"
                              style="
                                  width: 70px;
                                  height: 70px;
                                  top: -40px;
                                  right: 20px;
                                  border: 2px solid #fff;
                                  z-index: 10;
                              "
                          >
                              <img
                                  src="{{ asset('assets/img/about/europe_flug.png') }}"
                                  alt="Flag"
                                  style="
                                      width: 100%;
                                      height: 100%;
                                      object-fit: cover;
                                      display: block;
                                  "
                              />
                          </div>

                          <div class="service-content-inner pt-2">
                              <p class="d-inline-block mb-2"><b>Study in Europe</b></p>
                              <br />
                              <p class="learn-more mb-0">
                                  Learn More <i class="fa fa-arrow-right"></i>
                              </p>
                          </div>
                      </div>
                  </div>
              </a>
          </div>

          <!-- New Life Insurance Card  4 End -->
          <!-- New Life Insurance Card  4 -->
        
          <div
            class="col-md-6 col-lg-6 col-xl-3 team-member service designer wow fadeInUp"
            data-wow-delay="1.1s"
        >
            <a href="#" class="text-decoration-none text-dark">
                <div class="service-item position-relative">
                    <div class="service-img">
                        <img
                            src="{{ asset('assets/img/img_pic/3. Destinations/6. New Zealand.jpg') }}"
                            class="img-fluid rounded-top w-100"
                            alt=""
                        />
                    </div>

                    <div class="service-content p-4" style="z-index: 0">
                        <div
                            class="service-icon rounded-circle overflow-hidden position-absolute shadow"
                            style="
                                width: 70px;
                                height: 70px;
                                top: -40px;
                                right: 20px;
                                border: 2px solid #fff;
                                z-index: 10;
                            "
                        >
                            <img
                                src="{{ asset('assets/img/about/New_Zealand_flag.png')}}"
                                alt="Flag"
                                style="
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    display: block;
                                "
                            />
                        </div>

                        <div class="service-content-inner pt-2">
                            <p class="d-inline-block mb-2"><b>Study in New Zealand</b></p>
                            <br />
                            <p class="learn-more mb-0">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

          <!-- New Life Insurance Card  4 End -->
        </div>
        <!-- End of row -->
      </div>
      <!-- End of container -->
    </div>
    <!-- Team End -->

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">
            Factors to Consider Before you Decide to Study Abroad
          </h4>
        </div>
        <div class="row g-5">
          
            <div class="col-xl-6 col-sm-12 wow fadeInRight" data-wow-delay="0.4s">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="card h-100 shadow-sm border-0 rounded-4 p-4 hover-shadow transition">
                    <div class="d-flex align-items-start mb-2">
                      <i class="bi bi-geo-alt-fill fs-3 text-primary me-3"></i>
                      <h6 class="mb-0 fw-semibold">Right Study Destination</h6>
                    </div>
                    <p class="mb-0 text-muted">
                      Choosing the right Study Destination based on your aspirations.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100 shadow-sm border-0 rounded-4 p-4 hover-shadow transition">
                    <div class="d-flex align-items-start mb-2">
                      <i class="bi bi-cash-coin fs-3 text-primary me-3"></i>
                    
                      <h6 class="mb-0 fw-semibold">Budget & Expenses</h6>
                    </div>
                    <p class="mb-0 text-muted">
                      Evaluate tuition fees, living expenses, scholarships, travel, and insurance.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100 shadow-sm border-0 rounded-4 p-4 hover-shadow transition">
                    <div class="d-flex align-items-start mb-2">
                      <i class="bi bi-building fs-3 text-primary me-3"></i>
                      <h6 class="mb-0 fw-semibold">Institution Reputation</h6>
                    </div>
                    <p class="mb-0 text-muted">
                      Understand the reputation of the institution that you are applying to.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100 shadow-sm border-0 rounded-4 p-4 hover-shadow transition">
                    <div class="d-flex align-items-start mb-2">
                      <i class="bi bi-file-earmark-text fs-3 text-primary me-3"></i>
                      <h6 class="mb-0 fw-semibold">Visa & Rules</h6>
                    </div>
                    <p class="mb-0 text-muted">
                      Familiarize yourself with visa process and rules for international students.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100 shadow-sm border-0 rounded-4 p-4 hover-shadow transition">
                    <div class="d-flex align-items-start mb-2">
                      <i class="bi bi-people fs-3 text-primary me-3"></i>
                      <h6 class="mb-0 fw-semibold">Community & Support</h6>
                    </div>
                    <p class="mb-0 text-muted">
                      Connect with local student communities and international support groups.
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card h-100 shadow-sm border-0 rounded-4 p-4 hover-shadow transition">
                    <div class="d-flex align-items-start mb-2">
                      <i class="bi bi-lightbulb fs-3 text-primary me-3"></i>
                      <h6 class="mb-0 fw-semibold">Personal Goals</h6>
                    </div>
                    <p class="mb-0 text-muted">
                      Align your study abroad choice with your long-term career and life goals.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          <div
            class="col-xl-6 d-flex align-items-center wow fadeInLeft"
            data-wow-delay="0.2s"
          >
            <div class="contact-img w-100 d-flex justify-content-center">
              <div class="contact-img-inner">
                <img
                  src="{{ asset('assets/img/versity_girls.png') }}"
                  class="img-fluid w-100"
                  alt="Image"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Journey today Start -->
    <div class="container-fluid team py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
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

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Contact Us</h4>
        </div>
        <div class="row g-5">
          <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <!-- Modern Info Section -->
              <div style="display:flex; justify-content:center; gap:30px; flex-wrap:wrap; font-family: 'Arial', sans-serif;">
                
                <div style="flex:1 1 200px; background:#fff; padding:30px; border-radius:15px; text-align:center; box-shadow:0 10px 25px rgba(0,0,0,0.1); transition: transform 0.3s;">
                  <div style="font-size:40px; color:#4CAF50; margin-bottom:15px;">🎓</div>
                  <h3 style="margin:0 0 10px; font-size:20px; color:#333;">Free* End-to-End Assistance</h3>
                  <p style="color:#777; font-size:14px;">We guide you throughout your admission journey with full support.</p>
                </div>
                
                <div style="flex:1 1 200px; background:#fff; padding:30px; border-radius:15px; text-align:center; box-shadow:0 10px 25px rgba(0,0,0,0.1); transition: transform 0.3s;">
                  <div style="font-size:40px; color:#2196F3; margin-bottom:15px;">🤝</div>
                  <h3 style="margin:0 0 10px; font-size:20px; color:#333;">Trusted by 22,000+ Students</h3>
                  <p style="color:#777; font-size:14px;">Join a growing community of students worldwide who rely on us.</p>
                </div>
                
                <div style="flex:1 1 200px; background:#fff; padding:30px; border-radius:15px; text-align:center; box-shadow:0 10px 25px rgba(0,0,0,0.1); transition: transform 0.3s;">
                  <div style="font-size:40px; color:#FF9800; margin-bottom:15px;">🏫</div>
                  <h3 style="margin:0 0 10px; font-size:20px; color:#333;">550+ Partner Institutions</h3>
                  <p style="color:#777; font-size:14px;">We collaborate with top universities and colleges worldwide.</p>
                </div>

              </div>

              <!-- Hover Effect -->
              <style>
                div[style*="box-shadow"]:hover {
                  transform: translateY(-10px);
                  box-shadow:0 15px 35px rgba(0,0,0,0.15);
                }
              </style>

          </div>
          <div class="col-xl-6 col-sm-12 wow fadeInRight" data-wow-delay="0.4s">
            <div>
              <h4 class="text-primary">Send Your Message</h4>
                @if(isset($success))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $success }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
            <form action="{{ route('frontend.contact.store') }}" method="POST">
              @csrf
                <div class="row g-3">
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                         <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name">
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email">
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="phone" class="form-control border-0" id="phone" name="phone" placeholder="Phone">
                      <label for="phone">Your Phone</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="project" name="project_option" placeholder="Project">
                      <label for="project">Your Project</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control border-0" id="subject" name="subject" placeholder="Subject">
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                         <textarea class="form-control border-0" placeholder="Leave a message here" name="message" id="message" style="height: 120px"></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
@endsection
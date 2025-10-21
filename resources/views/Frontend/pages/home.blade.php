
@extends('Frontend.layouts.master')

@section('title', 'Home - BSAT')

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

    <!-- Carousel Start -->
   <!-- Hero Carousel Start-->
    <div class="header-carousel owl-carousel">

    @if($Bannars->count() > 0)
      @foreach ($Bannars as $Bannar)
        <div
          class="header-carousel-item bg-primary"
          style="
            background-image: url('{{ asset($Bannar->image) }}');
            background-size: cover;
            background-position: center;
          "
        >
          <div class="carousel-caption">
            <div class="container">
              <div class="row g-4 align-items-center">
                <div class="col-lg-7 animated fadeInLeft">
                  <div class="text-sm-center text-md-start">
                    <h4 class="text-white text-uppercase fw-bold mb-4">
                       Welcome To Barakah
                    </h4>
               
                    <h1 class="display-1 text-white mb-4">{{ $Bannar->title }}</h1>
                    <p class="mb-5 fs-5">
                      {{ $Bannar->description }}
                    </p>
                    <div
                      class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4"
                    >
                      <a
                        class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                        href="#"
                        ><i class="fas fa-play-circle me-2"></i> Watch Video</a
                      >
                      <a
                        class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2"
                        href="{{ route('about') }}"
                        >Learn More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero Carousel -->
      @endforeach
      @endif
    </div>
    <!-- Carousel End -->
    <!-- Hero Section End -->

    <!-- Clients Section Start -->
    <div class="container-fluid client-section pb-5 mt-5 pt-4">
      <div class="container pb-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Our Partners</h4>
          <h1 class="display-4 mb-4">Proud Partners</h1>
          <p class="mb-0">
            We are proud to work with industry-leading organizations that trust
            our services and collaborate for mutual success.
          </p>
        </div>

        <div
          class="owl-carousel client-carousel wow fadeInUp"
          data-wow-delay="0.2s"
        >
          @if($partners->count() > 0)
          @foreach ($partners as $partner)
          <div class="client-item bg-light rounded p-3 text-center">
            <img
              src="{{ asset($partner->img) }}"
              class="img-fluid rounded"
              style="max-height: auto"
              alt="{{ $partner->name }}"
            />
          </div>
          @endforeach
          @endif
          <!-- Add more items as needed -->
        </div>
      </div>
    </div>
    <!-- Clients Section End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Our Features</h4>
          <h1 class="display-4 mb-4">Why Choose Us</h1>
          <p class="mb-0">
           We are proud to work with industry-leading organizations that trust our services and collaborate for mutual success.
          </p>
        </div>
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="feature-item p-4 pt-0">
              <div class="feature-icon p-4 mb-4">
                <i class="far fa-handshake fa-3x"></i>
              </div>
              <h4 class="mb-4">Trusted Company</h4>
              <p class="mb-4">
                We are a trusted company dedicated to delivering reliable solutions, quality service, and lasting value.
              </p>
              <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('about') }}"
                >Learn More</a
              >
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.4s"
          >
            <div class="feature-item p-4 pt-0">
              <div class="feature-icon p-4 mb-4">
                <i class="fa fa-dollar-sign fa-3x"></i>
              </div>
              <h4 class="mb-4">Anytime Money Back</h4>
              <p class="mb-4">
                We stand by our promise of quality with an anytime money-back guarantee for your peace of mind.
              </p>
              <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('about') }}"
                >Learn More</a
              >
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.6s"
          >
            <div class="feature-item p-4 pt-0">
              <div class="feature-icon p-4 mb-4">
                <i class="fa fa-bullseye fa-3x"></i>
              </div>
              <h4 class="mb-4">Flexible Plans</h4>
              <p class="mb-4">
                Choose from our flexible plans designed to fit your budget, needs, and lifestyle effortlessly.
              </p>
              <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('about') }}"
                >Learn More</a
              >
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.8s"
          >
            <div class="feature-item p-4 pt-0">
              <div class="feature-icon p-4 mb-4">
                <i class="fa fa-headphones fa-3x"></i>
              </div>
              <h4 class="mb-4">24/7 Fast Support</h4>
              <p class="mb-4">
                We are committed to providing 24/7 fast support to assist you with any inquiries or issues.
              </p>
              <a class="btn btn-primary rounded-pill py-2 px-4"  href="{{ route('about') }}"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature End -->

     <!-- Service Start -->
    <div class="container-fluid service py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Our Services</h4>
          <h1 class="display-4 mb-4">️ Our Key Services</h1>
          <p class="mb-0">
            From admission to arrival BSAT is your trusted partner for a smooth,
            stress-free study abroad journey.
          </p>
        </div>
        <div class="row g-4 justify-content-center">
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="service-item">
              <div class="service-img">
                <img
                  src="{{ asset('assets/img/services/Princeton-university-admission-jpg.webp') }}"
                  class="img-fluid rounded-top w-100"
                  alt=""
                />
                <div class="service-icon p-3">
                  <i class="fas fa-user-graduate fa-2x"></i>
                </div>
              </div>
              <div class="service-content p-4">
                <div class="service-content-inner">
                  <a href="#" class="d-inline-block h4 mb-4"
                    >University Admissions</a
                  >
                  <p class="mb-4">
                    BSAT helps Bangladeshi students apply to top universities
                    abroad by guiding course selection, preparing documents, and
                    ensuring smooth application submission.
                  </p>
                  <a
                    class="btn btn-primary rounded-pill py-2 px-4"
                    href="{{ route('services.admission_support') }}"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.4s"
          >
            <div class="service-item">
              <div class="service-img">
                <img
                  src="{{ asset('assets/img/services/visa assistance.png') }}"
                  class="img-fluid rounded-top w-100"
                  alt=""
                />
                <div class="service-icon p-3">
                  <i class="fas fa-passport fa-2x"></i>
                </div>
              </div>
              <div class="service-content p-4">
                <div class="service-content-inner">
                  <a href="#" class="d-inline-block h4 mb-4"
                    >Student Visa Assistance</a
                  >
                  <p class="mb-4">
                    BSAT simplifies visa processes with expert guidance,
                    document checks, and interview prep—ensuring higher approval
                    chances for studying abroad smoothly.
                  </p>
                  <a
                    class="btn btn-primary rounded-pill py-2 px-4"
                    href="{{ route('services.visa_assistance') }}"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.6s"
          >
            <div class="service-item">
              <div class="service-img">
                <img
                  src="{{ asset('assets/img/services/scholarship.png') }}"
                  class="img-fluid rounded-top w-100"
                  alt=""
                />
                <div class="service-icon p-3">
                  <i class="fas fa-hand-holding-usd fa-2x"></i>
                </div>
              </div>
              <div class="service-content p-4">
                <div class="service-content-inner">
                  <a href="#" class="d-inline-block h4 mb-4"
                    >Scholarship Guidance</a
                  >
                  <p class="mb-4">
                    BSAT helps students find and apply for scholarships,
                    reducing costs through expert guidance on merit, need-based,
                    and government funding options.
                  </p>
                  <a
                    class="btn btn-primary rounded-pill py-2 px-4"
                    href="{{ route('services.scholarships') }}"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
            data-wow-delay="0.8s"
          >
            <div class="service-item">
              <div class="service-img">
                <img
                  src="{{ asset('assets/img/services/travel.jpeg') }}"
                  class="img-fluid rounded-top w-100"
                  alt=""
                />
                <div class="service-icon p-3">
                  <i class="fas fa-suitcase-rolling fa-2x"></i>
                </div>
              </div>
              <div class="service-content p-4">
                <div class="service-content-inner">
                  <a href="#" class="d-inline-block h4 mb-4">Travel Support</a>
                  <p class="mb-4">
                    BSAT ensures a smooth journey abroad with travel,
                    accommodation, and pre-departure support, plus settling-in
                    help like airport pickup and adaptation.
                  </p>
                  <a
                    class="btn btn-primary rounded-pill py-2 px-4"
                    href="{{ route('services.travel_support') }}"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
            <a
              class="btn btn-primary rounded-pill py-3 px-5"
              href="{{ route('services') }}"
              >More Services</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="container-fluid team py-5 bg-light">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Destinations Country</h4>
          <h1 class="display-4 mb-4">Top Study Destinations</h1>
          <p class="mb-0">Explore our most popular destination countries.</p>
        </div>

        <!-- Team Grid -->
        <div class="row g-4 team-container">
           <!-- New Life Insurance Card  4 -->
          <div
            class="col-md-6 col-lg-6 col-xl-2 team-member service designer wow fadeInUp"
            data-wow-delay="0.1s"
          >
          <a href="destinations/3.1.StudyInUSA.html">  
            <div class="service-item shadow">
              <div class="service-img position-relative">
                <img
                  src="{{  asset('assets/img/img_pic/3.1 USA/Whisk_0fbb9647ea.jpg') }}"
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
                  <p href="#" class="d-inline-block h5 mb-4 ">USA</p>
                </div>
              </div>
            </div>
            </a>
          </div>
          <!-- New Life Insurance Card  4 End -->
          <!-- New Life Insurance Card  1 -->
          <div
            class="col-md-6 col-lg-6 col-xl-2 team-member service designer wow fadeInUp"
            data-wow-delay="0.3s"
          >
          <a href="#">
            <div class="service-item shadow">
              <div class="service-img position-relative">
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
                  <p href="#" class="d-inline-block h5 mb-4">Australia</p>
                </div>
              </div>
            </div>
            </a>
          </div>
          <!-- New Life Insurance Card  1 End -->

          <!-- New Life Insurance Card  2 -->
          <div
            class="col-md-6 col-lg-6 col-xl-2 team-member service designer wow fadeInUp"
            data-wow-delay="0.5s"
          >
          <a href="destinations/3.2.StudyinUK.html">
            <div class="service-item shadow">
              <div class="service-img position-relative">
                <img
                  src="{{ asset('assets/img/img_pic/3.2 United Kingdom/Whisk_0ad5784c9c.jpg') }}"
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
                  <p href="#" class="d-inline-block h5 mb-4">UK</p>
                </div>
              </div>
            </div>
            </a>
          </div>

          <!-- New Life Insurance Card  1 End -->

          <!-- New Life Insurance Card  3 -->
          <div
            class="col-md-6 col-lg-6 col-xl-2 team-member service designer wow fadeInUp"
            data-wow-delay="0.7s"
          >
          <a href="destinations/3.3.studyInCanada.html">
            <div class="service-item shadow">
              <div class="service-img position-relative">
                <img
                  src="{{ asset('assets/img/about/canada_photo.jpeg') }}"
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
                  <p href="#" class="d-inline-block h5 mb-4">Canada</p>
                </div>
              </div>
            </div>
            </a>
          </div>

          <!-- New Life Insurance Card  3 End -->

         
          <!-- New Life Insurance Card  4 -->
          <div
            class="col-md-6 col-lg-6 col-xl-2 team-member service designer wow fadeInUp"
            data-wow-delay="0.9s"
          >
          <a href="destinations/3.4.StudyInEurope.html">
            <div class="service-item shadow">
              <div class="service-img position-relative">
                <img
                  src="{{ asset('assets/img/img_pic/3.4 Europe/Whisk_2c072648c6.jpg') }}"
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
                  <p href="#" class="d-inline-block h5 mb-4">Europe</p>
                </div>
              </div>
            </div>
            </a>
          </div>
          <!-- New Life Insurance Card  4 End -->
          <!-- New Life Insurance Card  4 -->
          <div
            class="col-md-6 col-lg-6 col-xl-2 team-member service designer wow fadeInUp"
            data-wow-delay="1.1s"
          >
            <div class="service-item shadow">
              <div class="service-img position-relative">
                <img
                  src="{{ asset('assets/img/img_pic/3. Destinations/6. New Zealand.jpg') }}"
                  class="img-fluid rounded-top w-100"
                  alt="New Zealand"
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
                    src="{{ asset('assets/img/about/New_Zealand_flag.png') }}"
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
                  <p href="#" class="d-inline-block h5 mb-4">New Zealand</p>
                </div>
              </div>
            </div>
          </div>
          <!-- New Life Insurance Card  4 End -->
        </div>
        <!-- End of row -->
         
      </div>
         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
            <a
              class="btn btn-primary rounded-pill py-3 px-5"
              href="{{ route('destinations') }}"
              >More Destinations</a
            >
          </div>
      <!-- End of container -->
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container testimonial pb-5 mt-5">
      <div class="container pb-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Testimonial</h4>
          <h1 class="display-4 mb-4">Where Our Clients’ Dreams Turn Into Success</h1>
          <p class="mb-0">
            We take pride in transforming challenges into opportunities. Our success stories showcase how our strategic thinking, creative approach, and technical excellence have helped businesses achieve remarkable results. Together, we’re building a future driven by innovation, trust, and long-term partnerships.
          </p>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.2s"
        >
        @if ($SuccessStories->count() > 0)
          @foreach ($SuccessStories as $story)
            <div class="testimonial-item bg-light rounded">
              <div class="row g-0" style="height: 350px">
                <div class="col-4 col-lg-4 col-xl-3">
                  <div class="h-100">
                    <img
                      src="{{ asset($story->img) }}"
                      class="img-fluid h-100 rounded"
                    style="object-fit: cover"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-8 col-lg-8 col-xl-9">
                <div class="d-flex flex-column my-auto text-start p-4">
                  <h4 class="text-dark mb-0">@if($story->name) {{ $story->name }} @endif</h4>
                  <p class="mb-3">Success Story #{{ $story->id }}</p>

                  @if ($story->university_name)
                    <p>
                        <i
                      class="fas fa-university"
                      style="color: #007bff; margin-right: 8px"
                    ></i>
                   
                      {{ $story->university_name }}
                    </p>
                  @endif
                  @if($story->scholarship)
                    <p>
                      <i
                        class="fas fa-money-bill-wave"
                        style="color: #007bff; margin-right: 8px"
                      ></i>
                      {{ $story->scholarship }}% Tuition Waiver
                    </p>
                  @endif
                  @if($story->scholarship)
                    <p>
                         <i
                        class="fas fa-graduation-cap"
                        style="color: #007bff; margin-right: 8px"
                      ></i>
                      {{ $story->department }}
                    </p>
                  @endif

                   @if($story->CGPA)
                    <p>
                        <i class="fas fa-chart-line"
                          style="color: #007bff; margin-right: 8px"
                        ></i>
                      CGPA: {{ $story->CGPA }}
                    </p>
                  @endif

                   @if($story->country)
                    <p>
                        <i
                      class="fas fa-plane-departure"
                      style="color: #007bff; margin-right: 8px"
                    ></i>
                      {{ $story->country }}
                    </p>                  
                  @endif
                   @if($story->achivement)
                    <p>
                         <i
                        class="fas fa-graduation-cap"
                        style="color: #007bff; margin-right: 8px"
                      ></i>
                      {{ $story->achivement }}
                    </p>                  
                  @endif
                   @if($story->relocated == 1)
                    <p>
                        <i
                          class="fas fa-users"
                          style="color: #007bff; margin-right: 8px"
                        ></i>
                        Successfully Relocated with Spouse
                    </p>                  
                  @endif
                </div>
              </div>
            </div>
          </div>
        @endforeach
        @endif
         
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- About Start -->
    <div class="container-fluid bg-light about pb-5">
      <div class="container pb-5">
        <div class="row g-5">
          <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="about-item-content bg-white rounded p-5 h-100">
              <h4 class="text-primary">About Our Company</h4>
              <h1 class="display-4 mb-4">High Range of Exploring Protection</h1>
              <p>
                We provide comprehensive protection plans designed to secure your future and safeguard what matters most. With flexible life insurance options, we ensure peace of mind while helping you save money effectively.
              </p>
              <p>
               Whether you’re looking for reliable coverage, financial security, or tailored solutions, our plans adapt to your lifestyle and goals. From personal protection to business support in production or trading of goods, we’ve got you covered.
              </p>
              <p class="text-dark">
                <i class="fa fa-check text-primary me-3"></i>We can save your
                money.
              </p>
              <p class="text-dark">
                <i class="fa fa-check text-primary me-3"></i>Anytime Money Back
              </p>
              <p class="text-dark mb-4">
                <i class="fa fa-check text-primary me-3"></i>24/7 fast Support
              </p>
              <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('about') }}"
                >More Information</a
              >
            </div>
          </div>
          <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
            <div class="bg-white rounded p-5 h-100">
              <div class="row g-4 justify-content-center">
                <div class="col-12">
                  <div class="rounded bg-light">
                    <img
                      src="{{ asset('assets/img/high range exploring.png') }}"
                      class="img-fluid rounded w-100"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="counter-item bg-light rounded p-3 h-100">
                    <div class="counter-counting">
                      <span
                        class="text-primary fs-2 fw-bold"
                        data-toggle="counter-up"
                        >10</span
                      >
                      <span class="h1 fw-bold text-primary">+</span>
                    </div>
                    <h4 class="mb-0 text-dark">University Partners</h4>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="counter-item bg-light rounded p-3 h-100">
                    <div class="counter-counting">
                      <span
                        class="text-primary fs-2 fw-bold"
                        data-toggle="counter-up"
                        >1000</span
                      >
                      <span class="h1 fw-bold text-primary">+</span>
                    </div>
                    <h4 class="mb-0 text-dark">Success Stories</h4>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="counter-item bg-light rounded p-3 h-100">
                    <div class="counter-counting">
                      <span
                        class="text-primary fs-2 fw-bold"
                        data-toggle="counter-up"
                        >100</span
                      >
                      <span class="h1 fw-bold text-primary">%</span>
                    </div>
                    <h4 class="mb-0 text-dark">Scholarship Offered</h4>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="counter-item bg-light rounded p-3 h-100">
                    <div class="counter-counting">
                      <span
                        class="text-primary fs-2 fw-bold"
                        data-toggle="counter-up"
                        >12</span
                      >
                      <span class="h1 fw-bold text-primary">+</span>
                    </div>
                    <h4 class="mb-0 text-dark">Country Travel Support</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->
@endsection
@extends('Frontend.layouts.master')

@section('title', 'About Us - BSAT')

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
    <div class="container-fluid bg-breadcrumb_service">
      <div class="container text-center py-5" style="max-width: 900px">
        <h4
          class="text-white display-4 mb-4 wow fadeInDown"
          data-wow-delay="0.1s"
        >
          Our Services
        </h4>
        <ol
          class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
          data-wow-delay="0.3s"
        >
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>

          <li class="breadcrumb-item active text-primary">Service</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Our Services</h4>
          <h1 class="display-4">We Provide Best Services</h1>
          <p class="mb-0">
            At BSAT (Barakah Study Abroad & Tours), we provide everything you
            need to turn your international education dream into a reality. From
            choosing the right university to settling in a new country — our
            expert team is with you every step of the way. Click on any service
            below to discover how we can help you succeed.
          </p>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">
      <div class="container">
        <div class="row gy-4 justify-content-between features-item">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img
              src="{{ asset('assets/img/img_pic/4. Our Services/Whisk_b7beea0730.jpg') }}"
              class="img-fluid rounded"
              alt=""
            />
          </div>

          <div
            class="col-lg-5 d-flex align-items-center mb-5"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="content">
              <h3>Admission Support</h3>
              <p>
                Get expert help with university selection, application
                submission, SOP writing, and follow-up communication. <br />
                
              </p>
              <a href="services/01.service-admission_support.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a
              >
            </div>
          </div>
        </div>
        <!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item my-5">
          <div
            class="col-lg-5 d-flex align-items-center order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="content">
              <h3>Student Visa Assistance</h3>
              <p>
                End-to-end visa assistance — from document preparation to mock
                interviews and appointment scheduling. <br />
       
              </p>

              <p></p>
            <a href="services/02.service-visa_assistance.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a
              >
            </div>
          </div>

          <div
            class="col-lg-6 order-1 order-lg-2"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
              src="{{ asset('assets/img/services/visa assistance.png') }}"
              class="img-fluid rounded"
              alt=""
            />
          </div>
        </div>
        <!-- Features Item -->

        <!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item my-5">
          <div
            class="col-lg-6 order-1 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
              src="img/img_pic/4. Our Services/Whisk_c0d9ea751c.jpg"
              class="img-fluid rounded"
              alt=""
            />
          </div>
          <div
            class="col-lg-5 d-flex align-items-center order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="content">
              <h3>Health Insurance Assistance</h3>
              <p>
                Guidance on purchasing affordable, visa-compliant student health
                insurance tailored to your destination. <br />
         
              </p>
              <p></p>
                <a href="services/03.health_life_sciences.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a
              >
            </div>
          </div>
        </div>
        <!-- Features Item -->
        <!-- Features Item -->
        <div class="row gy-4 justify-content-between features-item my-5">
          <div
            class="col-lg-6 order-2 order-lg-2"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
              src="img/img_pic/4. Our Services/Whisk_8631749c85.jpg"
              class="img-fluid rounded"
              alt=""
            />
          </div>
          <div
            class="col-lg-5 d-flex align-items-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="content">
              <h3>Scholarships & Financial Planning</h3>
              <p>
                Find merit-based or need-based scholarships and get tips for
                budgeting and reducing tuition costs. <br />
      
              </p>
              <a href="services/05.service_scholarships.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a
              >
            </div>
          </div>
        </div>

        <!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">
          <div
            class="col-lg-5 d-flex align-items-center order-2 order-lg-2 my-5"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="content">
              <h3>Travel Support</h3>
              <p>
                We provide complete travel assistance including flight booking,
                airport pickup, travel insurance, and emergency support to
                ensure a smooth journey from home to campus. <br />
              </p>
              <p></p>
                <a href="services/07.service_travel_support.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a>
            </div>
          </div>

          <div
            class="col-lg-6 order-1 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
              src="{{ asset('assets/services/travel.jpeg') }}"
              class="img-fluid rounded"
              alt=""
            />
          </div>
        </div>
        <!-- Features Item -->

        <!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item my-4">
          <div
            class="col-lg-5 d-flex align-items-center order-2 order-lg-2"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="content">
              <h3>Pre-Departure & Post-Arrival Support</h3>
              <p>
                We assist with cultural orientation, travel tips, SIM cards,
                local banking, job search, and more. <br />
              </p>
              <p></p>
                <a href="services/06.service_postarrival.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a
              >
            </div>
          </div>

          <div
            class="col-lg-6 order-2 order-lg-2"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
              src="img/img_pic/4. Our Services/Whisk_a6a3c57680.jpg"
              class="img-fluid rounded"
              alt=""
            />
          </div>
        </div>
        <!-- Features Item -->

        <!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item my-4">
          <div
            class="col-lg-5 d-flex align-items-center order-2 order-lg-2"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <div class="content">
              <h3>Air Ticketing</h3>
              <p>
                We assist students with booking affordable and flexible air
                tickets, offering special student fares, group travel options,
                and guidance on baggage allowances and airline policies. <br />
          
              </p>
              <p></p>
                <a href="services/08.service_air_tickering.html" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a
              >
            </div>
          </div>

          <div
            class="col-lg-6 order-1 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
              src="img/img_pic/4. Our Services/Whisk_891f4b22f5.jpg"
              class="img-fluid rounded"
              alt=""
            />
          </div>
        </div>
        <!-- Features Item -->
      </div>
    </section>
    <!-- /Features Details Section -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5 mt-5">
      <div class="container pb-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Testimonial</h4>
          <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
          <p class="mb-0">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur
            adipisci facilis cupiditate recusandae aperiam temporibus corporis
            itaque quis facere, numquam, ad culpa deserunt sint dolorem autem
            obcaecati, ipsam mollitia hic.
          </p>
        </div>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.2s"
        >
          <div class="testimonial-item bg-light rounded">
            <div class="row g-0">
              <div class="col-4 col-lg-4 col-xl-3">
                <div class="h-100">
                  <img
                    src="img/testimonial-1.jpg"
                    class="img-fluid h-100 rounded"
                    style="object-fit: cover"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-8 col-lg-8 col-xl-9">
                <div class="d-flex flex-column my-auto text-start p-4">
                  <h4 class="text-dark mb-0">Client Name</h4>
                  <p class="mb-3">Profession</p>
                  <div class="d-flex text-primary mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p class="mb-0">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Enim error molestiae aut modi corrupti fugit eaque rem nulla
                    incidunt temporibus quisquam,
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-item bg-light rounded">
            <div class="row g-0">
              <div class="col-4 col-lg-4 col-xl-3">
                <div class="h-100">
                  <img
                    src="img/testimonial-2.jpg"
                    class="img-fluid h-100 rounded"
                    style="object-fit: cover"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-8 col-lg-8 col-xl-9">
                <div class="d-flex flex-column my-auto text-start p-4">
                  <h4 class="text-dark mb-0">Client Name</h4>
                  <p class="mb-3">Profession</p>
                  <div class="d-flex text-primary mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star text-body"></i>
                  </div>
                  <p class="mb-0">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Enim error molestiae aut modi corrupti fugit eaque rem nulla
                    incidunt temporibus quisquam,
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-item bg-light rounded">
            <div class="row g-0">
              <div class="col-4 col-lg-4 col-xl-3">
                <div class="h-100">
                  <img
                    src="img/testimonial-3.jpg"
                    class="img-fluid h-100 rounded"
                    style="object-fit: cover"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-8 col-lg-8 col-xl-9">
                <div class="d-flex flex-column my-auto text-start p-4">
                  <h4 class="text-dark mb-0">Client Name</h4>
                  <p class="mb-3">Profession</p>
                  <div class="d-flex text-primary mb-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star text-body"></i>
                    <i class="fas fa-star text-body"></i>
                  </div>
                  <p class="mb-0">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Enim error molestiae aut modi corrupti fugit eaque rem nulla
                    incidunt temporibus quisquam,
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

@endsection
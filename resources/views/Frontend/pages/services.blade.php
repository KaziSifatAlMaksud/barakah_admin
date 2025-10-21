@extends('Frontend.layouts.master')

@section('title', 'Sercices - BSAT')

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
              <a href="{{ route('services.admission_support') }}" class="btn btn-primary rounded-pill py-2 px-5"
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
            <a href="{{ route('services.visa_assistance') }}" class="btn btn-primary rounded-pill py-2 px-5"
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
              src="{{ asset('assets/img/img_pic/4.3 Health Insurance Assistance/Whisk_25b3240db7.jpg') }}"
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
                <a href="{{ route('services.health_life_sciences') }}" class="btn btn-primary rounded-pill py-2 px-5"
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
               src="{{ asset('assets/img/img_pic/4.5 Scholarships Financial Planning Updated/Whisk_d7d4cfb80e.jpg') }}"
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
              <a href="{{ route('services.scholarships') }}" class="btn btn-primary rounded-pill py-2 px-5"
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
                <a href="{{ route('services.travel_support') }}" class="btn btn-primary rounded-pill py-2 px-5"
                >View details</a>
            </div>
          </div>

          <div
            class="col-lg-6 order-1 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img
          
              src="{{ asset('assets/img/img_pic/4.7 Travel Support/Whisk_cb7e0c9f1c.jpg') }}"
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
                <a href="{{ route('services.postarrival') }}" class="btn btn-primary rounded-pill py-2 px-5"
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
              src="{{ asset('assets/img/img_pic/4.6 Pre-Departure Post-Arrival Support/Whisk_7b95e7b26a.jpg') }}"
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
                <a href="{{ route('services.air_tickating') }}" class="btn btn-primary rounded-pill py-2 px-5"
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
              src="{{ asset('assets/img/img_pic/4.8 Air Ticketing/Whisk_127f9f4254.jpg') }}"
              class="img-fluid rounded"
              alt=""
            />
          </div>
        </div>
        <!-- Features Item -->
      </div>
    </section>
    <!-- /Features Details Section -->

  

@endsection
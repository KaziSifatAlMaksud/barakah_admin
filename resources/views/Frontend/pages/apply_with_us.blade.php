@extends('Frontend.layouts.master')

@section('title', 'Apply with Us - BSAT')

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
          Apply with Us
        </h4>
        <ol
          class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
          data-wow-delay="0.3s"
        >
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active text-primary">Apply with Us</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
      <div class="container py-5">
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">Apply with Us</h4>
          <h1 class="display-4 mb-4">
            If you have any comments please apply now
          </h1>
        </div>
        <div class="row g-5">
          <!-- <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="contact-img d-flex justify-content-center" >
                            <div class="contact-img-inner">
                                <img src="img/contact-img.png" class="img-fluid w-100"  alt="Image">
                            </div>
                        </div>
                    </div> -->
          <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.4s">
            <div>
              <h4 class="text-primary">Send Your Message</h4>
              <p class="mb-4">
                Start your journey to studying in the USA with BSAT! Fill out
                our simple application form to get expert guidance on
                admissions, visas, scholarships, and travel support. Our team
                will review your details and assist you every step of the way.
                <!-- <a
                  class="text-primary fw-bold"
                  href="https://htmlcodex.com/contact-form"
                  >Download Now</a
                >. -->
              </p>
              <form>
                <div class="row g-3">
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Your Name"
                      />
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control border-0"
                        id="email"
                        placeholder="Your Email"
                      />
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="phone"
                        class="form-control border-0"
                        id="phone"
                        placeholder="Phone"
                      />
                      <label for="phone">Your Phone</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Last Education Level"
                      />
                      <label for="name">Last Education Level</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Your CGPA"
                      />
                      <label for="name">Your CGPA</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Year of Education Complete"
                      />
                      <label for="name">Year of Education Complete</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Your Subject of Study"
                      />
                      <label for="name">Your Subject of Study</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Which Degree You Want to Pursue"
                      />
                      <label for="name">Which Degree You Want to Pursue</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Your IELTS Score"
                      />
                      <label for="name">Your IELTS Score</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="name"
                        placeholder="Your TOEFL Score"
                      />
                      <label for="name">Your TOEFL Score</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="project"
                        placeholder="Your GRE Score"
                      />
                      <label for="project">Your GRE Score</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control border-0"
                        id="subject"
                        placeholder="Your Preferable University"
                      />
                      <label for="subject">Your Preferable University</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control border-0"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 120px"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3">Submit</button>
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
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
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-wow-delay="0.4s">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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
                
              </p>
              <form 
                  action="{{ route('application.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data"
                  id="applicationForm"
                >
                  @csrf
                  <div class="row g-3">

                    <!-- Name -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" required>
                        <label for="name">Your Name</label>
                      </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="email" class="form-control border-0" id="email" name="email" placeholder="Your Email" required>
                        <label for="email">Your Email</label>
                      </div>
                    </div>

                    <!-- Phone -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="tel" class="form-control border-0" id="phone" name="phone" placeholder="Your Phone">
                        <label for="phone">Your Phone</label>
                      </div>
                    </div>

                    <!-- Last Education Level -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="text" class="form-control border-0" id="last_edu" name="last_edu" placeholder="Last Education Level">
                        <label for="last_edu">Last Education Level</label>
                      </div>
                    </div>

                    <!-- CGPA -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="number" step="0.01" class="form-control border-0" id="cgpa" name="cgpa" placeholder="Your CGPA">
                        <label for="cgpa">Your CGPA</label>
                      </div>
                    </div>

                    <!-- Education Year -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="number" min="1900" max="2099" class="form-control border-0" id="edu_year" name="edu_year" placeholder="Year of Education Complete">
                        <label for="edu_year">Year of Education Complete</label>
                      </div>
                    </div>

                    <!-- Subject of Study -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="text" class="form-control border-0" id="subject_study" name="subject_study" placeholder="Your Subject of Study">
                        <label for="subject_study">Your Subject of Study</label>
                      </div>
                    </div>

                    <!-- Degree You Want to Pursue -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="text" class="form-control border-0" id="degree_want" name="degree_want" placeholder="Which Degree You Want to Pursue">
                        <label for="degree_want">Which Degree You Want to Pursue</label>
                      </div>
                    </div>

                    <!-- Exam Type -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <select class="form-select border-0" id="exam_type" name="exam_type">
                          <option value="">Select Exam Type</option>
                          <option value="IELTS">IELTS</option>
                          <option value="TOEFL">TOEFL</option>
                          <option value="GRE">GRE</option>
                          <option value="Other">Other</option>
                        </select>
                        <label for="exam_type">Exam Type</label>
                      </div>
                    </div>

                    <!-- Exam Score -->
                    <div class="col-lg-12 col-xl-6">
                      <div class="form-floating">
                        <input type="text" class="form-control border-0" id="score" name="score" placeholder="Your Exam Score">
                        <label for="score">Your Exam Score</label>
                      </div>
                    </div>

                    <!-- Preferable University -->
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control border-0" id="preferable_un" name="preferable_un" placeholder="Your Preferable University">
                        <label for="preferable_un">Your Preferable University</label>
                      </div>
                    </div>

                    <!-- Message -->
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control border-0" id="message" name="message" placeholder="Leave a message here" style="height: 120px"></textarea>
                        <label for="message">Message</label>
                      </div>
                    </div>

                    <!-- Attachment -->
                    <div class="col-12">
                      <label class="form-label fw-semibold mb-1">Upload Attachment (PDF, max 5 MB)</label>
                      <input type="file" class="form-control border-0" id="attachment" name="attachment" accept="application/pdf" required>
                      <div id="fileError" class="text-danger small mt-1"></div>
                    </div>

                    <!-- Submit -->
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary w-100 py-3">Submit</button>
                    </div>

                  </div>
                </form>

                <!-- Optional JavaScript validation -->
                <script>
                document.getElementById('applicationForm').addEventListener('submit', function (e) {
                  const fileInput = document.getElementById('attachment');
                  const file = fileInput.files[0];
                  const errorDiv = document.getElementById('fileError');
                  errorDiv.textContent = '';

                  if (file) {
                    const maxSize = 5 * 1024 * 1024; // 5MB
                    if (file.size > maxSize) {
                      e.preventDefault();
                      errorDiv.textContent = 'File size must not exceed 5 MB.';
                      return false;
                    }
                    if (file.type !== 'application/pdf') {
                      e.preventDefault();
                      errorDiv.textContent = 'Only PDF files are allowed.';
                      return false;
                    }
                  }
                });
                </script>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

@endsection
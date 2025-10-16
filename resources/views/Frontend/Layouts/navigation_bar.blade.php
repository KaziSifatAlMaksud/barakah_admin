     <!-- Topbar Start -->
    
     <div
      class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block"
    >
      <div class="container">
        <div class="row gx-0 align-items-center">
          <div class="col-lg-8 text-center text-lg-start mb-lg-0">
            <div class="d-flex flex-wrap">
              <div class="border-end border-primary pe-3">
                <a href="https://www.google.com/maps/place/Flat+3A,+House+13,+1209+Road+No.+13%2FA,+Dhaka+1209/@23.7497504,90.3727205,17z/data=!3m1!4b1!4m5!3m4!1s0x3755bf4d74140001:0x9b2ab207b852687d!8m2!3d23.7497504!4d90.3727205?entry=ttu&g_ep=EgoyMDI1MDgyNS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="text-muted small"
                  ><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A
                  Location</a
                >
              </div>
              <div class="ps-3">
                <a href="mailto:info@bsatbd.com" class="text-muted small"
                  ><i class="fas fa-envelope text-primary me-2"></i
                  >info@bsatbd.com</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 text-center text-lg-end">
            <div class="d-flex justify-content-end">
              <div class="d-flex border-end border-primary pe-3">
                <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/profile.php?id=61572919227052"
                  ><i class="fab fa-facebook-f"></i
                ></a>
       
                <a class="btn p-0 text-primary me-3" href="https://www.instagram.com/bsat.bd/"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a class="btn p-0 text-primary me-0" href="https://www.linkedin.com/company/bsatbd"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
              <div class="dropdown ms-3">
                <a
                  href="#"
                  class="dropdown-toggle text-dark"
                  data-bs-toggle="dropdown"
                  ><small
                    ><i class="fas fa-globe-europe text-primary me-2"></i>
                    English</small
                  ></a
                >
                <!-- <div class="dropdown-menu rounded">
                  <a href="#" class="dropdown-item">English</a>
                  <a href="#" class="dropdown-item">Bangla</a>
                  <a href="#" class="dropdown-item">French</a>
                  <a href="#" class="dropdown-item">Spanish</a>
                  <a href="#" class="dropdown-item">Arabic</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img src="{{ asset('assets/img/logo/Barakah-Logo.png') }}" alt="Logo" height="150" />

          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-0 mx-lg-auto">
              <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}">Home</a>
              <a href="{{ url('about') }}" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>

              <div class="nav-item dropdown ">
                  <!-- Main link clickable -->
                  <a href="{{ url('destinations') }}" class="nav-link " {{ Request::is('destinations') ? 'active' : '' }}>
                      Destinations
                  </a>

                  <!-- Dropdown toggle -->
                  <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                  <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                      <li><a href="destinations/3.1.StudyInUSA.html" class="dropdown-item">Study in USA</a></li>
                      <li><a href="destinations/3.2.StudyinUK.html" class="dropdown-item">Study in UK</a></li>
                      <li><a href="destinations/3.3.studyInCanada.html" class="dropdown-item">Study in Canada</a></li>
                      <li><a href="destinations/3.4.StudyInEurope.html" class="dropdown-item">Study in Europe</a></li>
                  </ul>
              </div>

              <div class="nav-item dropdown">
                  <!-- Main link clickable -->
                  <a href="{{ url('services') }}" class="nav-link" {{ Request::is('services') ? 'active' : '' }}>
                      Services
                  </a>

                  <!-- Dropdown toggle -->
                  <a href="#" class="nav-link dropdown-toggle" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>

                  <!-- Dropdown menu -->
                  <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                      <li><a href="services/01.service-admission_support.html" class="dropdown-item">Admission Support</a></li>
                      <li><a href="services/02.service-visa_assistance.html" class="dropdown-item">Visa Assistance</a></li>
                      <li><a href="services/03.health_life_sciences.html" class="dropdown-item">Health Insurance Assistance</a></li>
                      <li><a href="services/05.service_scholarships.html" class="dropdown-item">Scholarships & Financial Planning</a></li>
                     <li><a href="services/07.service_travel_support.html" class="dropdown-item">Travel Support</a></li>
                      <li><a href="services/06.service_postarrival.html" class="dropdown-item">Pre-Departure & Post-Arrival Support</a></li>
                      <li><a href="services/08.service_air_tickering.html" class="dropdown-item">Air Ticketing</a></li>
                  </ul>
              </div>

              
              <div class="nav-item dropdown">
                  <!-- Main link clickable -->
                  <a href="{{ url('courses') }}" class="nav-link">
                      Courses
                  </a>

                  <!-- Dropdown toggle -->`
                  <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>

                    <!-- Dropdown menu -->
                  <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                      <li><a href="{{ route('courses.engineering') }}" class="dropdown-item">Business Management</a></li>
                      <li><a href="{{ route('courses.business') }}" class="dropdown-item">Engineering Technology</a></li>
                       <li><a href="{{ route('courses.hospitality') }}" class="dropdown-item">Hospitality & Tourism</a></li>
                       <li><a href="{{ route('courses.law') }}" class="dropdown-item">Law & Criminology</a></li>
                       <li><a href="{{ route('courses.education') }}" class="dropdown-item">Education & Teaching</a></li>
                       <li><a href="{{ route('courses.arts') }}" class="dropdown-item">Arts Humanities Social Sciences</a></li>
                       <li><a href="{{ route('courses.health') }}" class="dropdown-item">Health & Life Sciences</a></li>                   
                      <li><a href="{{ route('courses.environment') }}" class="dropdown-item">Science & Environment</a></li>
                  </ul>
              </div>
           
               <!-- <a href="blog.html" class="nav-item nav-link">Blog</a> -->
             
              <a href="{{ route('contact')  }}" class="nav-item nav-link" {{ Request::is('contact') ? 'active' : '' }}>Contact</a>
              <div class="nav-btn px-3">
                <button
                  class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0"
                  data-bs-toggle="modal"
                  data-bs-target="#searchModal"
                >
                  <i class="fas fa-search"></i>
                </button>
                <a
                  href="{{ route('apply_with_us') }}"
                  class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"
                >
                  Apply with Us</a
                >
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar & Hero End -->
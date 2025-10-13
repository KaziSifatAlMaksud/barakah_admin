@extends('Frontend.layouts.master')

@section('title', 'About Us - BSAT')

@section('content')


 <section class="py-5 feature">
      <div class="container text-center">
        <!-- Header Section -->
        <div
          class="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style="max-width: 800px"
        >
          <h4 class="text-primary">About Us</h4>
          <h1 class="display-4 mb-4">About Us - Barakah</h1>
          <p class="mb-0">
            We are proud to work with industry-leading organizations that trust
            our services and collaborate for mutual success.
          </p>
        </div>

        <!-- Features Row with spacing -->
        <div class="row g-5"> <!-- g-5 adds larger gap between columns -->
          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="icon-box feature-item text-center h-100 p-3 shadow-sm rounded ">
              <div class="feature-icon mt-0 mb-4">
                <i class="fas fa-building fa-3x p-3"></i>
              </div>
              <h4>Who We Are</h4>
              <p>Dhaka-based consultancy with global support.</p>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.3s">
            <div class="icon-box feature-item text-center h-100 p-3 shadow-sm rounded">
              <div class="feature-icon mt-0 mb-4">
                <i class="fas fa-graduation-cap fa-3x p-3"></i>
              </div>
              <h4>What We Do</h4>
              <p>End-to-end study abroad guidance.</p>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.5s">
            <div class="icon-box feature-item text-center h-100 p-3 shadow-sm rounded">
              <div class="feature-icon mt-0 mb-4">
                <i class="fas fa-globe fa-3x p-3"></i>
              </div>
              <h4>Where We Work</h4>
              <p>USA, UK, Canada, Australia, Europe.</p>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.7s">
            <div class="icon-box feature-item text-center h-100 p-3 shadow-sm rounded">
              <div class="feature-icon mt-0 mb-4">
                <i class="fas fa-handshake fa-3x p-3"></i>
              </div>
              <h4>Why Choose Us</h4>
              <p>Honest, transparent, and student-focused support.</p>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- About Section -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 wow fadeInLeft" data-wow-delay="0.2s">
            <img
              src="{{ asset('assets/img/img_pic/2. About Us/1. Who We Are.jpg') }}"
              alt="About"
              class="img-fluid rounded shadow"
            />
          </div>
          <div class="col-lg-6 p-5 wow fadeInRight" data-wow-delay="0.4s">
            <h2 class="fw-bold mb-3">Who We Are</h2>
            <p class="text-muted">
              We are a forward-thinking company dedicated to delivering
              top-notch solutions. Our team of passionate professionals brings
              creativity, experience, and technical expertise to every project.
            </p>
            <p class="text-muted">
              Our goal is to empower businesses with innovative strategies that
              foster growth and long-term success.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-5 ">
      <div class="container text-center wow fadeInUp" data-wow-delay="0.2s">
         <h1 class="display-4 ">Our Mission & Vision</h1>
          <p class="mb-5 text-dark wow fadeInUp" data-wow-delay="0.3s" style=" margin:auto;">
            Our mission is to empower students from all backgrounds to access world-class education abroad through honest counseling, personalized guidance, and transparent support. Our vision is to become a trusted global education partner, breaking barriers and guiding students with integrity, expertise, and lifelong mentorship.
          </p>
   
         <div class="row g-4 justify-content-center">

          <!-- Mission Card -->
          <div class="col-md-6">
            <div class="card h-100 border-0  hover-up p-4 text-center bg-white shadow-sm">
              <i class="bi bi-bullseye text-primary mb-3" style="font-size: 3rem;"></i>
              <h5 class="fw-bold mb-3">Our Mission</h5>
              <p class="text-muted mb-0">
                Empowering students from all backgrounds to pursue world-class education abroad through honest counseling, personalized guidance, and transparent support. Your future is our mission, and your success is our priority.
              </p>
            </div>
          </div>

          <!-- Vision Card -->
          <div class="col-md-6">
            <div class="card h-100 border-0  hover-up p-4 text-center bg-white shadow-sm">
              <i class="bi bi-eye text-success mb-3" style="font-size: 3rem;"></i>
              <h5 class="fw-bold mb-3">Our Vision</h5>
              <p class="text-muted mb-0">
                To be a trusted global education partner, breaking barriers so every motivated student can pursue international opportunities. We guide students as lifelong mentors, walking beside them every step of the way.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

      <!-- Why Choose Us -->
  <section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="display-5 fw-bold wow fadeInLeft" data-wow-delay="0.2s">Why Choose Us</h2>
    <p class="mb-5 wow fadeInLeft" data-wow-delay="0.3s">Expert guidance, fast reliable service, and a student-first approach.</p>
    <div class="row g-4">
      
      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="card h-100 border-0 shadow-sm hover-up text-center p-4">
          <i class="bi bi-people text-primary mb-3 fs-1"></i>
          <h5 class="fw-bold mb-2">Expert Team</h5>
          <p class="text-muted mb-0">
            Skilled professionals bring years of expertise and innovation to every project.
          </p>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
        <div class="card h-100 border-0 shadow-sm hover-up text-center p-4">
          <i class="bi bi-lightning-charge text-warning mb-3 fs-1"></i>
          <h5 class="fw-bold mb-2">Fast & Reliable</h5>
          <p class="text-muted mb-0">
            High-quality solutions delivered quickly, without compromising reliability.
          </p>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
        <div class="card h-100 border-0 shadow-sm hover-up text-center p-4">
          <i class="bi bi-star text-danger mb-3 fs-1"></i>
          <h5 class="fw-bold mb-2">Customer First</h5>
          <p class="text-muted mb-0">
            We prioritize clients’ needs and build long-term partnerships based on trust.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


    <!-- What Makes BSAT Different -->
   
    <section class="py-5  mt-5">
      <div class="container text-center pb-5">
        <h2 class="display-4 fw-bold mb-3 wow fadeInRight" data-wow-delay="0.2s">What Makes BSAT Different</h2>
        <p class="text-muted mb-5 mx-auto wow fadeInRight" data-wow-delay="0.3s" style="max-width:700px;">
          Honest, student-first counseling, affordable study options, and complete support — from university selection to visa and beyond, with guidance in Dhaka and on-ground help in the USA.
        </p>

        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 border-0 shadow-sm hover-up p-4 text-center">
              <i class="fas fa-users fa-3x text-primary mb-3"></i>
              <h5 class="fw-bold mb-2">Real People, Real Support</h5>
              <p class="text-muted mb-0">
                Local presence in Dhaka plus on-ground help in the USA at every stage.
              </p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
            <div class="card h-100 border-0 shadow-sm hover-up p-4 text-center">
              <i class="fas fa-comments fa-3x text-success mb-3"></i>
              <h5 class="fw-bold mb-2">Student-First Counseling</h5>
              <p class="text-muted mb-0">
                Honest, personalized advice with no sales pressure or hidden agendas.
              </p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
            <div class="card h-100 border-0 shadow-sm hover-up p-4 text-center">
              <i class="fas fa-hand-holding-usd fa-3x text-warning mb-3"></i>
              <h5 class="fw-bold mb-2">Affordable & Accessible</h5>
              <p class="text-muted mb-0">
                Scholarships, budget-friendly universities, and flexible pathways.
              </p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
            <div class="card h-100 border-0 shadow-sm hover-up p-4 text-center">
              <i class="fas fa-route fa-3x text-danger mb-3"></i>
              <h5 class="fw-bold mb-2">End-to-End Service</h5>
              <p class="text-muted mb-0">
                From university selection to visa application and airport pickup.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- What Makes BSAT Different -->

    <!-- Message from the CEO -->
    <section class="py-5 bg-light">
      <div class="container">
        <h2 class="display-5 mb-4 text-center wow fadeInUp" data-wow-delay="0.2s">Message from the CEO</h2>
        <div class="row align-items-center">
          <!-- Left Side: Text -->
          <div class="col-md-7 wow fadeInRight" data-wow-delay="0.2s">
            <blockquote class="blockquote fs-6 fst-italic text-primary mb-4" >
              “Studying abroad is more than just earning a degree — it’s about
              building a future, shaping identity, and unlocking global
              opportunities. At BSAT, we are not just consultants — we are your
              mentors, your advocates, and your extended family throughout the
              journey.”
            </blockquote>
            <p>
              We started this organization with a deep personal commitment: to
              create a platform where students receive ethical, transparent, and
              empowering guidance as they pursue higher education abroad.
            </p>
            <p>
              Too often, students are overwhelmed by misinformation, false
              promises, or one-size-fits-all approaches. BSAT was born out of
              the belief that every student’s story is unique, and so should be
              their academic path. We pride ourselves on offering genuine
              advice, personalized strategies, and support that continues even
              after you land in your destination country.
            </p>
            <p>
              Our team is not here to “process files.” We are here to shape
              lives. From our base in Dhaka, to our support networks in your
              destination countries, we walk with our students every step of the
              way — helping them find clarity in uncertainty and confidence in
              decision-making.
            </p>
            <p>
              If you’re serious about studying abroad and want guidance that’s
              rooted in honesty and care, we would be honored to help shape your
              future.
            </p>

            <h5 class="mt-4 fw-bold">Warm regards,</h5>
            <p class="mb-0"><strong>Md Imran Hasan</strong></p>
            <p class="text-muted">
              CEO & Chief Consultant<br />Barakah Study Abroad & Tours (BSAT)
            </p>
          </div>

          <!-- Right Side: CEO Photo -->
          <div class="col-md-5 text-center wow fadeInLeft" data-wow-delay="0.4s">
            <img
              src="{{ asset('assets/img/CEO.png') }}"
              alt="CEO Photo"
              class="img-fluid rounded shadow"
            />
          </div>
        </div>
      </div>
    </section>


@endsection
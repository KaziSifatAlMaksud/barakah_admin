@extends('Frontend.layouts.master')

@section('title', 'About Us - BSAT')

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
        <div class="container-fluid bg-breadcrumb_service">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Courses</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active text-primary">Courses</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Features Details Section -->
      <section id="features-details" class="features-details section">
        <div class="container-fluid">

             <!-- Feature Start -->
            <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div
                class="text-center mx-auto pb-5 wow fadeInUp"
                data-wow-delay="0.2s"
                style="max-width: 800px"
                >
                <h4 class="text-primary">Our Courses</h4>
                <h1 class="display-4 mb-4">Fields of Study We Cover</h1>
                <p class="mb-0">
                    At BSAT (Barakah Study Abroad & Tours), we provide everything you need to turn your international education dream into a reality. From choosing the right university to settling in a new country — our expert team is with you every step of the way. Click on any course below to discover how we can help you succeed.
                </p>
                </div>
                <div class="row g-4">
                <div
                    class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                    data-wow-delay="0.2s"
                >
                    <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="bi bi-briefcase fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Business & Management</h4>
                    <p class="mb-4">
                        
                   <ul class="list-unstyled m-0 p-0">
                        <li class="border-bottom py-1"><p class="mb-0">Accounting</p></li>
                        <li class="border-bottom py-1"><p class="mb-0">Finance</p></li>
                        <li class="border-bottom py-1"><p class="mb-0">Marketing</p></li>
                        <li class="border-bottom py-1"><p class="mb-0">Human Resource Management</p></li>
                        <li class="py-1"><p class="mb-0">International Business</p></li>
                    </ul>

                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.1.businessandManagement.html"
                        >Learn More</a
                    >
                    </div>
                </div>
                 <!-- card items end -->
                <div
                    class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                    data-wow-delay="0.4s"
                >
                    <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="bi bi-gear fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Engineering & Technology</h4>
                    <p class="mb-4">
                        <ul class="list-unstyled m-0 p-0">
                            <li class="border-bottom py-1"><p class="mb-0">Civil, Mechanical, Electrical Engineering</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">Software Engineering</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">Computer Science & IT</p></li>
                            <li class="py-1"><p class="mb-0">Artificial Intelligence & Robotics</p></li>
                        </ul>

                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.2.engineeringAndTechnology.html"
                        >Learn More</a
                    >
                    </div>
                </div>


                <!-- card items -->

                <div
                    class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                    data-wow-delay="0.4s"
                >
                    <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="bi bi-building fa-3x"></i>
                    </div>
                    <h4 class="mb-4"> Hospitality & Tourism</h4>
                    <p class="mb-4">
                         <ul class="list-unstyled m-0 p-0">
                            <li class="border-bottom py-1"><p class="mb-0">Hotel Management</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">Travel & Tourism</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">Culinary Arts</p></li>
                            <li class="py-1"><p class="mb-0">Event Management</p></li>
                        </ul>

                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.6.HospitalityAndTourism.html"
                        >Learn More</a
                    >
                    </div>
                </div>

                <!-- card items end -->
                 <!-- card items -->

                <div
                    class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                    data-wow-delay="0.4s"
                >
                    <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="bi bi-pen fa-3x"></i>
                    </div>
                    <h4 class="mb-4">  Law & Criminology </h4>
                    <p class="mb-4">
                        <ul class="list-unstyled m-0 p-0">
                            <li class="border-bottom py-1"><p class="mb-0">LLB (Bachelor of Laws)</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">Criminal Law</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">International Law</p></li>
                            <li class="py-1"><p class="mb-0">Legal Studies</p></li>
                        </ul>

                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.7.LawAndCriminology.html"
                        >Learn More</a
                    >
                    </div>
                </div>

                <!-- card items end -->
                  <!-- card items -->

                <div
                    class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                    data-wow-delay="0.4s"
                >
                    <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="bi bi-marker-tip fa-3x"></i>
                    </div>
                    <h4 class="mb-4">  Education & Teaching </h4>
                    <p class="mb-4">
                        <ul class="list-unstyled m-0 p-0">
                            <li class="border-bottom py-1"><p class="mb-0">Early Childhood Education</p></li>
                            <li class="border-bottom py-1"><p class="mb-0">TESOL/ESL</p></li>
                            <li class="py-1"><p class="mb-0">Special Education</p></li>
                        </ul>

                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.8.EducationAndTeaching.html"
                        >Learn More</a
                    >
                    </div>
                </div>

                <!-- card items end -->
                <div
                    class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp"
                    data-wow-delay="0.6s"
                >
                    <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="bi bi-palette fa-3x"></i>
                        
                    </div>
                    <h4 class="mb-4">Arts, Humanities & Social Sciences</h4>
                    <p class="mb-4">
                      <ul class="list-unstyled m-0 p-0">
                        <li class="border-bottom py-1"><p class="mb-0">Media & Communication</p></li>
                        <li class="border-bottom py-1"><p class="mb-0">Psychology</p></li>
                        <li class="border-bottom py-1"><p class="mb-0">Sociology</p></li>
                        <li class="border-bottom py-1"><p class="mb-0">International Relations</p></li>
                        <li class="py-1"><p class="mb-0">Languages</p></li>
                      </ul>

                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.4.artsHumanities.html"
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
                            <i class="bi bi-lungs fa-3x"></i>
                        </div>
                        <h4 class="mb-4">Health & Life Sciences</h4>
                        <p class="mb-4">
                           <ul class="list-unstyled m-0 p-0">
                                <li class="border-bottom py-0"><p class="mb-0">Nursing</p></li>
                                <li class="border-bottom py-0"><p class="mb-0">Public Health</p></li>
                                <li class="border-bottom py-0"><p class="mb-0">Medicine & Surgery (Pre-med pathways)</p></li>
                                <li class="py-0"><p class="mb-0">Pharmacy & Biotechnology</p></li>
                            </ul>

                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.3.healthLifeScience.html"
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
                            <i class="bi bi-flask fa-3x"></i>                  
                        </div>
                        <h4 class="mb-4">Science & Environment</h4>
                        <p class="mb-4">
                            <ul class="list-unstyled m-0 p-0">
                                <li class="border-bottom py-1"><p class="mb-0">Physics, Chemistry, Biology</p></li>
                                <li class="border-bottom py-1"><p class="mb-0">Environmental Science</p></li>
                                <li class="border-bottom py-1"><p class="mb-0">Geology</p></li>
                                <li class="border-bottom py-1"><p class="mb-0">Data Science</p></li>
                                <li class="py-1"><p class="mb-0">Ecology</p></li>
                            </ul>
                        </p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="courses/6.5.scienceAndEnvirerment.html"
                            >Learn More</a
                        >
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Feature End -->        
        </div>
      </section>
      <!-- /Features Details Section -->


         <!-- Journey today Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
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
@extends('Frontend.layouts.master')

@section('title', 'Visa Assistance - BSAT')

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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div> -->
        <!-- Header End -->

        <article class="container article my-5">
            <a href="javascript:void(0);" onclick="window.history.back()" class="btn btn-transparent d-flex align-items-center">
               <strong>  <i class="bi bi-arrow-left me-2"></i> <!-- Back arrow icon -->
                Back</strong>
            </a>

                <h2 class="title mb-4">Getting your student visa approved is one of the most crucial steps in your study abroad journey. At BSAT, we make this process stress-free and successful through accurate documentation, country-specific expertise, and personal guidance.</h2>

                <!-- <div class="meta-top mb-4">
                    <ul class="list-unstyled d-flex flex-wrap">
                        <li class="me-3 d-flex align-items-center"><i class="bi bi-person me-1"></i> <a href="blog-details.html">John Doe</a></li>
                        <li class="me-3 d-flex align-items-center"><i class="bi bi-clock me-1"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots me-1"></i> <a href="blog-details.html">12 Comments</a></li>
                    </ul>
                </div> -->
                <!-- End meta top -->

                <hr class="my-5">

                <div class=" w-100  h-70 d-flex justify-content-center border align-items-center mb-4">
                    <img src="{{ asset('assets/img/img_pic/4.2 Visa Services/Whisk_4277ffee20.jpg') }}"  alt="" class="img-fluid">

                </div>
                
                <div class="content">
                    <h2 class="text-primary fs-4">Our Student Visa Services Include:</h2>
                  <p>
                  
                    <ol class="test-color-dark fs-5">
                        <li><b>Tailored Visa Guidance</b>
                            <p>We explain exactly what you need for your chosen country — whether it's the USA, UK, Canada, Australia, or Europe — including financial, academic, and health requirements.</p>
                        </li>
                        <li>
                            <b> Document Verification & Formatting</b>
                            <p>We help you organize, review, and format all necessary documents to match embassy standards, including:</p>
                        </li>
                        <li>
                            <ul>
                                <li>Academic records</li>
                                <li>Offer letter</li>
                                <li>Bank solvency & statements</li>
                                <li> Sponsorship/legal affidavits</li>
                                <li>Insurance & accommodation proof </li>
                            </ul>
                        </li>
                        <li>
                            <b>Statement of Purpose (SOP) Assistance</b>
                            <p>
                               We help you draft a clear, goal-oriented SOP — customized to your background, visa category, and future plans — to increase your approval chances.
                            </p>
                        </li>
                        <li>Visa Interview Preparation</li>
                        <p>Our team conducts mock interview sessions with real embassy-style questions for USA, UK, and other interview-based visas to boost your confidence.</p>
                        <li>
                          <b>Appointment & Tracking</b>
                          <p>We handle embassy appointment scheduling, biometric slots, and real-time tracking of your visa application — so you're always informed.</p>
                        </li>
                    </ol>
                    


                  </p>
                </div>
                <h3 class="text-primary fs-4">Why BSAT?</h3>
                <ul class="test-color-dark fs-5">
                    <li>10+ years combined experience in handling student visa cases</li>
                    <li>Updated knowledge of embassy rules and refusals</li>
                    <li>Support for SDS & Non-SDS, student route, Schengen visas, and more</li>
                    <li> Friendly team that walks you through every step — from submission to stamping
                        With BSAT, your student visa journey becomes clear, organized, and confidently executed.</li>
                </ul>
                

              </article>  
        </div>
      </section>
      <!-- /Features Details Section -->

      <!-- Journey today Start -->
        <div class="container-fluid team py-5  bg-light ">
            <div class="container py-5">
                <div class="text-center mx-auto  wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">You may be eligible for up to 50% Scholarship at a renowned University Abroad</h4>
                <p class="mb-0">Check your eligibility and receive end to end assisstance for FREE!</p>
                     <a href="{{ route('apply_with_us') }}" class="learn-more btn btn-primary px-5 py-3 mt-5 h6">
                        Get a Free Profile Assessment <i class="fa fa-arrow-right"></i>
                    </a>

                </div>        
            </div> <!-- End of container -->
        </div>
        <!--  Journey today End -->



@endsection
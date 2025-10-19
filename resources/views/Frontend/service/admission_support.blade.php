@extends('Frontend.layouts.master')

@section('title', 'Arts Humanities & Social Sciences - BSAT')

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

                <h2 class="title mb-4">Unlock international opportunities with BSAT’s comprehensive Admission Support. We guide you seamlessly from exploration to acceptance—helping you step into your dream university with confidence:</h2>

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
                    <img src="{{ asset('assets/img/img_pic/4.1 Admission Support/Whisk_28fee522ec.jpg') }}"  alt="" class="img-fluid">
                </div>
                
                <div class="content">
                    <h4 class="text-primary fs-4">What We Offer</h4>
                  <p class="test-color-dark fs-5">
                  
                    <ol class="test-color-dark fs-5">
                        <li><b>Personalized Counseling</b>
                            <p>Fill out our free consultation form. We'll evaluate your academic background, career goals, and financial preferences to recommend the best-fit universities.</p>
                        </li>
                        <li>
                            <b>University & Program Match</b>
                            <p>Access our wide database of partner institutions across Canada, the UK, Europe, Australia, and beyond. We help you shortlist universities based on ranking, tuition, intake dates, and scholarship availability.</p>
                        </li>
                        <li>
                            <b>Expert Application Assistance</b>
                            <p>We manage the full application cycle, including:</p>
                            <ul>
                                <li>Form submission</li>
                                <li>Document uploads</li>
                                <li>Timely follow-ups</li>
                                <li>Offer tracking</li>
                            </ul>
                        </li>
                        <li>
                            <b>Professional SOP, CV & LOR Support</b>
                            <p>
                               Get tailored help to craft compelling documents that showcase your strengths:
                                <ul>
                                    <li>Statement of Purpose (SOP) writing</li>
                                    <li>Curriculum Vitae (CV) crafting</li>
                                    <li>Letter of Recommendation (LOR) guidance</li>
                                    <li> Transcript preparation</li>
                                </ul>
                            </p>
                        </li>
                        <li>Offer & Conditional Offer Assistance</li>
                    </ol>
                   <p class="test-color-dark fs-5"> We follow up with universities to secure conditional or unconditional offer letters quickly—so you can move ahead with visa processing without delay. </p>

                  </p>
                </div>
                <h3 class="text-primary fs-4">Why Choose BSAT?</h3>
                <ul class="test-color-dark fs-5">
                    <li>Proven Admission Expertise – Based on PFEC’s model in Bangladesh</li>
                    <li>Free, No-Obligation Consult that opens doors to unlimited university options</li>
                    <li>Dedicated Follow-up until you receive your offer letter</li>
                    <li>250+ University Partnerships and direct application channels</li>
                </ul>
                

              </article>  
        </div>
      </section>
      <!-- /Features Details Section -->

      <!-- Journey today Start -->
        <div class="container-fluid team py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
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
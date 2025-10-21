@extends('Frontend.layouts.master')

@section('title', 'Health Insurance - BSAT')

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

                <h2 class="title mb-4">Studying abroad is an exciting journey — but it’s important to be protected and prepared, especially when it comes to your health. At BSAT, we make sure you have the right student health insurance that’s not only affordable but also meets visa and university requirements.</h2>

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
                    <img src="{{ asset('assets/img/img_pic/4.3 Health Insurance Assistance/Whisk_25b3240db7.jpg') }}" alt="" class="img-fluid">
                </div>
                
                <div class="content">
                    <h2 class="text-primary fs-4">What We Offer</h2>
                  <p>
                  
                    <ol class="test-color-dark fs-6">
                        <li><b>Understanding Insurance Requirements by Country</b>
                            <p>Every country has its own set of minimum insurance standards for international students. Our team will guide you through.</p>
                            <ul>
                              <li>What’s mandatory for your visa type (F-1, Student Route, D-Visa, etc.)</li>
                              <li>Required coverage amounts and duration</li>
                              <li>Special policies (e.g., travel insurance, COVID-19 inclusion)</li>
                              <li>Government vs. private insurance differences (e.g., Germany’s TK vs. Mawista)</li>
                            </ul>
                        </li>
                        <li>
                            <b> Comparing & Recommending Insurance Providers</b>
                            <p>We work with approved and reliable insurers to bring you:</p>
                            <ul>
                              <li> Multiple policy options (monthly or full-term)</li>
                              <li>Affordable premiums based on your age, country, and stay duration</li>
                              <li> Coverage for emergency, hospitalization, and outpatient services</li>
                              <li> Add-ons like dental, repatriation, and theft insurance (if required)</li>
                            </ul>
                        </li>
                        <li>
                          <b> Fast Enrollment & Policy Documentation</b>
                          Time is crucial. We ensure:

                            <ul>
                                <li>Policy enrollment is done within hours</li>
                                <li>Official documents are generated within 1–2 working days</li>
                                <li>Formats are compliant with embassy and university standards</li>
                                <li> You receive your certificate of insurance for visa processing and enrollment</li>
                            </ul>
                        </li>
                        <li>
                            <b>. Visa & University Documentation Support</b>
                            <p>
                               Most embassies require a valid insurance certificate before granting a student visa. BSAT ensures:
                            </p>
                            <ul>
                              <li>Insurance coverage dates match your offer letter</li>
                              <li> Translations and official seals are included if needed</li>
                              <li> Support for uploading to embassy portals or VFS centers</li>
                            </ul>
                        </li>
                        <li> <b>Post-Arrival Help</b>
                          <p>We stay connected even after you land. Need help with:.</p>
                          <ul>
                            <b>Renewing your insurance?</b>
                            <p>Extending coverage?</p>
                            <p>Filing a claim for medical bills?</p>
                            <p>BSAT will be there to support you.</p>
                          </ul>
                        </li>
                        <li>
                          <b>Why Students Trust BSAT</b>
                          <ul>
                            <li>Country-specific insurance guidance </li>
                            <li>Partnered with top global providers (Allianz, Mawista, ISO, etc.)</li>
                            <li>No hidden fees — transparent and fast</li>
                            <li>Continued assistance after your visa is approved</li>
                          </ul>
                          
                        </li>
                    </ol>
                    <p  class="test-color-dark fs-6">With BSAT, your student health insurance is not just a requirement — it’s a promise of peace of mind.</p>


                  </p>
                </div>
                <h3 class="text-primary fs-4">Why BSAT?</h3>
                <ul class="test-color-dark fs-6">
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
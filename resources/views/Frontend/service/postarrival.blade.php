@extends('Frontend.layouts.master')

@section('title', 'Post-Arrival Support - BSAT')

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
        <strong><i class="bi bi-arrow-left me-2"></i> Back</strong>
    </a>

    <h2 class="title mb-4">Pre-Departure & Post-Arrival Support – BSAT</h2>
    <p>At BSAT, our commitment doesn’t end once you receive your visa. We ensure you’re fully prepared for your journey abroad and continue to support you even after you arrive. Our pre-departure and post-arrival services are designed to give students and parents complete peace of mind during the transition.</p>

    <hr class="my-5">

    <div class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4">
              <img src="{{ asset('assets/img/img_pic/4.3 Health Insurance Assistance/Whisk_25b3240db7.jpg') }}" alt="" class="img-fluid">
    </div>

      <div class="content">
          <h2 class="text-primary fs-4" >What We Offer</h2>
          <ol  class="test-color-dark fs-5">
              <li><b>Pre-Departure Services</b>
                  <ul>
                      <li>Comprehensive travel briefing covering country-specific customs, academic expectations, and lifestyle tips</li>
                      <li>Detailed checklists for packing, airport procedures, and document safety</li>
                      <li>Guidance on managing foreign currency, health insurance, and international SIM cards</li>
                      <li>Support with flight booking and travel insurance arrangements</li>
                      <li>One-on-one student and parent orientation sessions</li>
                  </ul>
              </li>

              <li><b>Post-Arrival Support</b>
                  <ul>
                      <li>Airport pickup assistance and guidance on transport from airport to accommodation</li>
                      <li>Support in getting local SIM cards, bank accounts, and transport passes</li>
                      <li>City orientation – including nearby shops, healthcare, embassy, and university routes</li>
                      <li>Help connecting with student communities and local support networks</li>
                      <li>Continued assistance with accommodation adjustments, visa extensions, or emergencies</li>
                  </ul>
              </li>
          </ol>

          <p  class="test-color-dark fs-5">With BSAT by your side, you’re never alone — from take-off to touchdown and beyond.</p>
      </div>

      <h3 class="text-primary fs-4">Why BSAT?</h3>
      <ul class="test-color-dark fs-5">
          <li>End-to-end support before and after you fly</li>
          <li>Personalized transition help for both students and families</li>
          <li>Decade of experience in international student support</li>
          <li>Peace of mind for students and their loved ones</li>
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
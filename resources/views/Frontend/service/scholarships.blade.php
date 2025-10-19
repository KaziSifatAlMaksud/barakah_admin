@extends('Frontend.layouts.master')

@section('title', 'Scholarships - BSAT')

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

          <h2 class="title mb-4">Scholarships & Financial Planning – BSAT</h2>
          <p>At BSAT, we believe financial limitations should never stop a student from achieving their dream of studying abroad. That’s why we provide complete guidance on scholarships, budgeting, and education loans — so you can study with clarity and confidence.</p>

          <hr class="my-5">

          <div class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4">
              <img src="{{ asset('assets/img/img_pic/4.5 Scholarships Financial Planning Updated/Whisk_d7d4cfb80e.jpg') }} alt="" class="img-fluid">
          </div>

          <div class="content">
              <h2 class="text-primary fs-4">What We Offer</h2>
              <ol class="test-color-dark fs-5">
                  <li><b>Pre-Arrival Housing Consultation</b>
                      <p>Before you fly, our counselors will:</p>
                      <ul>
                          <li>Help you understand the different types of accommodation available in your destination (on-campus, off-campus, private, shared, etc.)</li>
                          <li>Advise on the safest and most student-friendly neighborhoods</li>
                          <li>Provide estimated monthly rent, deposit amounts, and upfront costs</li>
                          <li>Suggest accommodation based on your budget, lifestyle, and proximity to university</li>
                      </ul>
                  </li>

                  <li><b>University (On-Campus) Housing Assistance</b>
                      <p>Many universities offer accommodation to international students, but spots are limited. We help you:</p>
                      <ul>
                          <li>Apply before deadlines</li>
                          <li>Choose the right room type (single, shared, en-suite, etc.)</li>
                          <li>Understand meal plan options, campus facilities, and contract periods</li>
                          <li>Communicate directly with housing offices if needed</li>
                      </ul>
                  </li>

                  <li><b>Off-Campus & Private Rental Support</b>
                      <p>Prefer more independence or privacy? We assist with:</p>
                      <ul>
                          <li>Referrals to verified private student housing platforms</li>
                          <li>Help contacting trusted local landlords or property agents</li>
                          <li>Lease review and understanding legal terms</li>
                          <li>Tips on avoiding rental scams or overpriced listings</li>
                      </ul>
                  </li>

                  <li><b>Short-Term or Temporary Accommodation</b>
                      <p>In case permanent housing isn’t ready, we offer solutions like:</p>
                      <ul>
                          <li>Short-stay student hostels or dorms</li>
                          <li>Hotel/hostel bookings</li>
                          <li>Temporary family homestays or shared rentals</li>
                          <li>Emergency housing coordination (due to delays or visa issues)</li>
                      </ul>
                  </li>

                  <li><b>Arrival & Settlement Assistance</b>
                      <p>Once you arrive in your study destination, BSAT can help with:</p>
                      <ul>
                          <li>Airport pickup recommendations</li>
                          <li>Orientation on public transport to your accommodation</li>
                          <li>Local SIM, bank account setup, and neighborhood guidance</li>
                          <li>Connecting with other students from your country</li>
                      </ul>
                  </li>

                  <li><b>Why Students Trust BSAT</b>
                      <ul>
                          <li>Country-specific insurance guidance</li>
                          <li>Partnered with top global providers (Allianz, Mawista, ISO, etc.)</li>
                          <li>No hidden fees — transparent and fast</li>
                          <li>Continued assistance after your visa is approved</li>
                      </ul>
                  </li>
              </ol>

              <p class="test-color-dark fs-5">With BSAT, your student accommodation is not just a requirement — it’s a promise of peace of mind.</p>
          </div>

          <h3 class="text-primary fs-4">Why Choose BSAT?</h3>
          <ul class="test-color-dark fs-5">
              <li>Years of experience handling international student accommodation</li>
              <li>Network of verified landlords and housing platforms</li>
              <li>Help available for both university and private housing</li>
              <li>Reliable support for urgent or unexpected housing issues</li>
              <li>10+ years combined experience in handling student visa cases</li>
              <li>Updated knowledge of embassy rules and refusals</li>
              <li>Support for SDS & Non-SDS, student route, Schengen visas, and more</li>
              <li>Friendly team that walks you through every step — from submission to stamping</li>
          </ul>

          <p class="test-color-dark fs-5">BSAT doesn’t just get you into a university — we help you feel at home.</p>
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
@extends('Frontend.layouts.master')

@section('title', 'Travel Support - BSAT')

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

            <h2 class="title mb-4">Travel Support – BSAT</h2>
            <p class="test-color-dark fs-6">BSAT understands that traveling to a new country for higher education is both exciting and challenging. Our Travel Support service is designed to ease the process, offering end-to-end guidance from departure to arrival. We ensure that every student feels safe, confident, and well-prepared throughout their travel journey.</p>

            <hr class="my-5">

            <div class="w-100 h-70 d-flex justify-content-center border align-items-center mb-4">
                <img src="{{ asset('assets/img/img_pic/4.7 Travel Support/Whisk_fef5474d13.jpg') }} alt="Travel Support" class="img-fluid">

            </div>

            <div class="content">
                <h2 class="text-primary fs-4">What We Offer</h2>
                <ol class="test-color-dark fs-6">
                    <li><b>Pre-Departure Briefing</b>
                        <ul>
                            <li>Travel documentation checklist (passport, visa, air ticket, etc.)</li>
                            <li>Packing advice (weather-appropriate, necessary gadgets, documents)</li>
                            <li>Airport & immigration walkthrough</li>
                            <li>Currency exchange tips and setting up bank accounts</li>
                            <li>Cultural orientation: dos and don’ts</li>
                            <li>What to expect in your first week</li>
                        </ul>
                    </li>

                    <li><b>Flight Booking Assistance</b>
                        <ul>
                            <li>Access to student fares</li>
                            <li>Help with date selection aligned with academic sessions</li>
                            <li>Group booking options</li>
                            <li>Baggage allowance guidance</li>
                        </ul>
                    </li>

                    <li><b>Airport Pickup & Transfers</b>
                        <ul>
                            <li>Coordinated airport pickup (private/shared)</li>
                            <li>Group transfer options available</li>
                        </ul>
                    </li>

                    <li><b>Temporary Accommodation Help</b>
                        <ul>
                            <li>Hotel/hostel recommendations</li>
                            <li>Short-term rentals</li>
                            <li>Guidance on safe neighborhoods</li>
                            <li>Partnered temporary accommodation providers</li>
                        </ul>
                    </li>

                    <li><b>Travel Insurance Guidance</b>
                        <ul>
                            <li>Medical emergencies</li>
                            <li>Lost baggage or delays</li>
                            <li>Trip cancellations</li>
                            <li>COVID-19-related issues</li>
                        </ul>
                    </li>

                    <li><b>Emergency Travel Support</b>
                        <ul>
                            <li>Missed flights, baggage issues</li>
                            <li>Health emergencies on arrival</li>
                            <li>Lost documents support</li>
                            <li>Contacting embassy or university staff if needed</li>
                        </ul>
                    </li>

                    <li><b>Student Travel Tips</b>
                        <ul>
                            <li>Keep essential documents in your hand luggage</li>
                            <li>Don’t overpack; check luggage weight</li>
                            <li>Carry emergency contacts</li>
                            <li>Stay hydrated and well-rested before travel</li>
                            <li>Use apps like Google Translate, XE Currency, or TripIt</li>
                        </ul>
                    </li>

                    <li><b>Optional Add-ons</b>
                        <ul>
                            <li>Downloadable pre-departure checklist</li>
                            <li>Travel orientation video</li>
                            <li>Student testimonials about BSAT travel support</li>
                        </ul>
                    </li>
                </ol>
            </div>
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
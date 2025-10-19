@extends('Frontend.layouts.master')

@section('title', 'Air Ticketing - BSAT')

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
          <article class="container my-5">
              <h2 class="mb-4">Air Ticketing – Flight Booking Request Form</h2>
              <p class="test-color-dark fs-5">
                <strong>Flight Booking Made Easy with BSAT</strong><br>
                At BSAT, we take the stress out of international travel planning. Our air ticketing service is tailored specifically for students, offering discounted fares, personalized route planning, and expert support throughout the booking process.
              <br/>
                Whether you are flying for the first time or returning for a new academic session, our team will guide you in securing the best possible flights aligned with your visa timeline and university schedule.
              <br/>
               To get started, simply fill out the form below with your travel preferences and identification details. Our travel desk will contact you shortly.
              </p>
      

              <form enctype="multipart/form-data" class="row g-4 mt-4">
                <!-- Personal Information -->
                <h4 class="text-primary fs-4 mt-4">Personal Information</h4>
                <div class="col-md-6">
                  <label for="fullName" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="fullName" required>
                </div>
                <div class="col-md-6">
                  <label for="passportNumber" class="form-label">Passport Number</label>
                  <input type="text" class="form-control" id="passportNumber" required>
                </div>
                <div class="col-md-6">
                  <label for="nidNumber" class="form-label">NID Number</label>
                  <input type="text" class="form-control" id="nidNumber" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-md-6">
                  <label for="whatsapp" class="form-label">WhatsApp Number</label>
                  <input type="tel" class="form-control" id="whatsapp">
                </div>

                <!-- Upload Documents -->
                <h4 class="mt-4">Upload Documents</h4>
                <div class="col-md-6">
                  <label for="uploadNID" class="form-label">Upload NID (PDF or Image)</label>
                  <input class="form-control" type="file" id="uploadNID" accept=".pdf,.jpg,.jpeg,.png" required>
                </div>
                <div class="col-md-6">
                  <label for="uploadPassport" class="form-label">Upload Passport Scan (PDF or Image)</label>
                  <input class="form-control" type="file" id="uploadPassport" accept=".pdf,.jpg,.jpeg,.png" required>
                </div>

                <!-- Travel Details -->
                <h4 class="mt-4">Travel Details</h4>
                <div class="col-md-6">
                  <label for="departureCity" class="form-label">Preferred Departure City</label>
                  <input type="text" class="form-control" id="departureCity" required>
                </div>
                <div class="col-md-6">
                  <label for="destinationCity" class="form-label">Destination City</label>
                  <input type="text" class="form-control" id="destinationCity" required>
                </div>
                <div class="col-md-6">
                  <label for="departureDate" class="form-label">Preferred Departure Date</label>
                  <input type="date" class="form-control" id="departureDate" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label d-block">Trip Type</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tripType" id="oneWay" value="one-way" checked>
                    <label class="form-check-label" for="oneWay">One-Way</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tripType" id="roundTrip" value="round-trip">
                    <label class="form-check-label" for="roundTrip">Round-Trip</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="preferredAirline" class="form-label">Preferred Airline (optional)</label>
                  <input type="text" class="form-control" id="preferredAirline">
                </div>

                <!-- Additional Information -->
                <h4 class="mt-4">Additional Information</h4>
                <div class="col-md-6">
                  <label class="form-label d-block">Do you need baggage support?</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="baggageSupport" id="baggageYes" value="Yes">
                    <label class="form-check-label" for="baggageYes">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="baggageSupport" id="baggageNo" value="No" checked>
                    <label class="form-check-label" for="baggageNo">No</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <label class="form-label d-block">Are you traveling alone or in a group?</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="travelGroup" id="travelAlone" value="Alone" checked>
                    <label class="form-check-label" for="travelAlone">Alone</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="travelGroup" id="travelGroup" value="Group">
                    <label class="form-check-label" for="travelGroup">Group</label>
                  </div>
                </div>
                <div class="col-12">
                  <label for="specialRequests" class="form-label">Any Special Requests</label>
                  <textarea class="form-control" id="specialRequests" rows="3" placeholder="Write any special preferences or concerns here..."></textarea>
                </div>

                <!-- Submit -->
                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-primary btn-lg w-100">Submit Request</button>
                  <small class="d-block text-muted mt-2">Form data including uploads will be sent to BSAT Travel Support</small>
                </div>
              </form>
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
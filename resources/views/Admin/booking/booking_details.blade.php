@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">

  <div class="card shadow-sm">
    <div class="card-body">

      <div class="d-md-flex align-items-center justify-content-between mb-4">
        <div>
          <h4 class="card-title mb-1">Booking Details</h4>
          <p class="card-subtitle text-muted">View all information about this booking</p>
        </div>
        <div class="ms-auto">
          <a href="{{ route('bookings.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
          </a>
        </div>
      </div>

      {{-- Booking Info --}}
      <div class="row g-4">
        <div class="col-md-6">
          <label class="fw-semibold text-muted">Full Name:</label>
          <p class="fw-bold">{{ $booking->full_name }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Email:</label>
          <p class="fw-bold">{{ $booking->email }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Passport Number:</label>
          <p class="fw-bold">{{ $booking->passport_number }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">NID Number:</label>
          <p class="fw-bold">{{ $booking->nid_number }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Whatsapp:</label>
          <p class="fw-bold">{{ $booking->whatsapp }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Trip Type:</label>
          <p class="fw-bold">{{ ucfirst($booking->trip_type) }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Departure City:</label>
          <p class="fw-bold">{{ $booking->departure_city }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Destination City:</label>
          <p class="fw-bold">{{ $booking->destination_city }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Departure Date:</label>
          <p class="fw-bold">{{ $booking->departure_date }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Return Date:</label>
          <p class="fw-bold">{{ $booking->return_date ?? '-' }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Preferred Airline:</label>
          <p class="fw-bold">{{ $booking->preferred_airline ?? '-' }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Baggage Support:</label>
          <p class="fw-bold">{{ $booking->baggage_support ?? '-' }}</p>
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Travel Group:</label>
          <p class="fw-bold">{{ $booking->travel_group ?? '-' }}</p>
        </div>

        <div class="col-md-12">
          <label class="fw-semibold text-muted">Special Requests:</label>
          <div class="border rounded-3 p-3 bg-light">
            {!! nl2br(e($booking->special_requests ?? 'None')) !!}
          </div>
        </div>

        {{-- PDFs --}}
        <div class="col-md-6">
          <label class="fw-semibold text-muted">NID File:</label>
          @if($booking->nid_file)
            <p>
              <a href="{{ asset($booking->nid_file) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                View NID
              </a>
              <a href="{{ asset($booking->nid_file) }}" download class="btn btn-sm btn-outline-success">
                Download
              </a>
            </p>
          @else
            <p class="text-muted">No NID uploaded.</p>
          @endif
        </div>

        <div class="col-md-6">
          <label class="fw-semibold text-muted">Passport File:</label>
          @if($booking->passport_file)
            <p>
              <a href="{{ asset($booking->passport_file) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                View Passport
              </a>
              <a href="{{ asset($booking->passport_file) }}" download class="btn btn-sm btn-outline-success">
                Download
              </a>
            </p>
          @else
            <p class="text-muted">No Passport uploaded.</p>
          @endif
        </div>

      </div>

      {{-- Action Buttons --}}
      <div class="mt-4 text-end">
        {{-- <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-warning">
          <i class="bi bi-pencil-square"></i> Edit
        </a> --}}

        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this booking?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">
            <i class="bi bi-trash"></i> Delete
          </button>
        </form>
      </div>

    </div>
  </div>

</div>
@endsection

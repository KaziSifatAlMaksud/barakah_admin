@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')

<div class="container-fluid">

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="d-md-flex align-items-center justify-content-between">
        <div>
          <h4 class="card-title mb-1">Booking Management</h4>
          <p class="card-subtitle text-muted">
            Manage your bookings — {{ $bookings->count() }} Total
          </p>
        </div>
    
      </div>

      <div class="table-responsive mt-4">
        <table class="table mb-0 align-middle text-nowrap fs-3">
          <thead class="table-light">
            <tr>
              <th scope="col" class="text-muted px-0">Full Name</th>           
              <th scope="col" class="text-muted px-0">Email</th>
              <th scope="col" class="text-muted px-0">Whatsapp</th>
              <th scope="col" class="text-muted px-0">Trip Type</th>
              <th scope="col" class="text-muted px-0">Departure Date</th>
              <th scope="col" class="text-muted px-0">Return Date</th>
              <th scope="col" class="text-muted px-0">Preferred Airline</th>
              <th scope="col" class="text-muted px-0">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($bookings as $booking)
            <tr>
              <td class="px-0">{{ $booking->full_name }}</td>
              <td class="px-0">{{ $booking->email }}</td>
              <td class="px-0">{{ $booking->whatsapp }}</td>
              <td class="px-0">{{ ucfirst($booking->trip_type) }}</td>
              <td class="px-0">{{ \Carbon\Carbon::parse($booking->departure_date)->format('Y-m-d') }}</td>
              <td class="px-0">{{ $booking->return_date ? \Carbon\Carbon::parse($booking->return_date)->format('Y-m-d') : '-' }}</td>

              <td class="px-0">{{ $booking->preferred_airline ?? '-' }}</td>
              <td class="px-0 text-start">
                <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-sm btn-warning">
                  Show
                </a>
                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this booking?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="12" class="text-center text-muted py-4">
                No bookings found.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      {{-- <div class="mt-4">
        {{ $bookings->links() }}
      </div> --}}
    </div>
  </div>
</div>

@endsection

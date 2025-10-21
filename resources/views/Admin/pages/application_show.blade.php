@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Application Details</h4>
          <p class="card-subtitle text-muted">View applicant information and exam details</p>
        </div>
        <a href="{{ route('admin.application.index') }}" class="btn btn-outline-primary btn-sm">
          <i class="bi bi-arrow-left"></i> Back to List
        </a>
      </div>

      {{-- Applicant Basic Information --}}
      <div class="row g-4 mb-4">
        <div class="col-md-6">
          <div class="border rounded-3 p-3 shadow-sm bg-light">
            <h6 class="fw-bold text-primary mb-2"><i class="bi bi-person-circle me-2"></i>Applicant Information</h6>
            <p><strong>Name:</strong> {{ $application->name }}</p>
            <p><strong>Email:</strong> {{ $application->email }}</p>
            <p><strong>Phone:</strong> {{ $application->phone }}</p>
            <p><strong>Date of Birth:</strong> {{ $application->dob ?? 'N/A' }}</p>
            <p><strong>Gender:</strong> {{ ucfirst($application->gender ?? 'N/A') }}</p>
            <p><strong>Address:</strong> {{ $application->address ?? 'Not Provided' }}</p>
          </div>
        </div>

        {{-- Exam and Academic Details --}}
        <div class="col-md-6">
          <div class="border rounded-3 p-3 shadow-sm bg-light">
            <h6 class="fw-bold text-success mb-2"><i class="bi bi-book me-2"></i>Exam Information</h6>
            <p><strong>Exam Type:</strong> {{ $application->exam_type }}</p>
            <p><strong>Score:</strong> {{ $application->score ?? 'N/A' }}</p>
            {{-- <p><strong>Exam Date:</strong> {{ $application->exam_date ? date('d M Y', strtotime($application->exam_date)) : 'N/A' }}</p>
            <p><strong>Center Name:</strong> {{ $application->exam_center ?? 'N/A' }}</p> --}}
            {{-- <p><strong>Status:</strong> 
              @if($application->status == 'approved')
                <span class="badge bg-success">Approved</span>
              @elseif($application->status == 'pending')
                <span class="badge bg-warning text-dark">Pending</span>
              @else
                <span class="badge bg-danger">Rejected</span>
              @endif
            </p> --}}
          </div>
        </div>
      </div>

      {{-- Attached Document --}}
      <div class="border rounded-3 p-4 mb-4 shadow-sm">
        <h6 class="fw-bold text-info mb-3"><i class="bi bi-paperclip me-2"></i>Attached Document</h6>
        @if ($application->attachment_path)
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <p class="mb-1"><strong>Uploaded PDF:</strong></p>
              <a href="{{ asset('storage/' . $application->attachment_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                <i class="bi bi-file-earmark-pdf"></i> View PDF
              </a>
            </div>
            <small class="text-muted">Uploaded on: {{ $application->created_at->format('d M, Y') }}</small>
          </div>
        @else
          <p class="text-muted">No document uploaded for this application.</p>
        @endif
      </div>

      {{-- Admin Actions --}}
      {{-- <div class="border rounded-3 p-4 shadow-sm bg-light">
        <h6 class="fw-bold text-dark mb-3"><i class="bi bi-gear me-2"></i>Admin Actions</h6>
        <form action="" method="POST" class="d-flex align-items-center gap-3">
          @csrf
          @method('PUT')
          <div class="flex-grow-1">
            <select name="status" class="form-select shadow-sm" required>
              <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
              <option value="approved" {{ $application->status == 'approved' ? 'selected' : '' }}>Approved</option>
              <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success px-4">Update Status</button>
        </form>
      </div> --}}
    </div>
  </div>
</div>

{{-- Optional JavaScript for confirmation --}}
<script>
  document.querySelector('form').addEventListener('submit', function(e) {
    if(!confirm('Are you sure you want to update the application status?')) {
      e.preventDefault();
    }
  });
</script>
@endsection

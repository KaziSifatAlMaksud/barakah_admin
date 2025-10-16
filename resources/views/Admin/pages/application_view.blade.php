
@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="d-md-flex align-items-center">
        <div>
          <h4 class="card-title">Application List</h4>
          <p class="card-subtitle">
            {{-- Total {{ $applications->count() }} Applications --}}
          </p>
        </div>
      
      </div>
      @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
              <strong>{{ session('success') }}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      <div class="table-responsive mt-4">
        <table class="table mb-0 text-nowrap align-middle fs-3">
          <thead>
            <tr>
              <th class="px-2 text-muted">#</th>
              <th class="px-2 text-muted">Applicant Name</th>
              <th class="px-2 text-muted">Email</th>
              <th class="px-2 text-muted">Phone</th>
               <th class="px-2 text-muted">Exam Type</th>
              <th class="px-2 text-muted">PDF</th>
              <th class="px-2 text-muted text-end">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($applications as $index => $application)
            <tr>
              <td class="px-2">{{ $index + 1 }}</td>
              <td class="px-2">{{ $application->name }}</td>
              <td class="px-2">{{ $application->email }}</td>
              <td class="px-2">{{ $application->phone }}</td>
              <td class="px-2">{{ $application->exam_type }} ( Score : {{ $application->score }} )</td>
              <td class="px-2">
                @if ($application->attachment_path)
                  <a href="{{ asset('storage/' . $application->attachment_path) }}" class="btn btn-sm btn-primary" target="_blank">View PDF</a>
                @endif
              </td>
              <td class="px-2 text-end">
                <a href="{{ route('admin.application.show', $application->id) }}" class="btn btn-sm btn-info text-white">View</a>
            
                <form action="{{ route('admin.application.delete', $application->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                    Delete
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-muted py-4">
                No applications found.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

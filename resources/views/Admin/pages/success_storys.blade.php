
@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')


<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="d-md-flex align-items-center">
        <div>
          <h4 class="card-title">Success Stories</h4>
          <p class="card-subtitle">
            Our Students' Achievements — {{ $successStories->count() }} Stories
          </p>
        </div>
        <div class="ms-auto mt-3 mt-md-0">
          <a href="{{ route('admin.success_stories.create') }}" class="btn btn-primary">
            + Add New Story
          </a>
        </div>
      </div>

      <div class="table-responsive mt-4">
        <table class="table mb-0 text-nowrap align-middle fs-3">
          <thead class="table-light">
            <tr>
              <th scope="col" class="px-0 text-muted">Name</th>
              <th scope="col" class="px-0 text-muted">Department</th>
              <th scope="col" class="px-0 text-muted">University</th>
              <th scope="col" class="px-0 text-muted">Scholarship</th>
              <th scope="col" class="px-0 text-muted">CGPA</th>
              <th scope="col" class="px-0 text-muted">Country</th>
              <th scope="col" class="px-0 text-muted">Relocated</th>
              <th scope="col" class="px-0 text-muted text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($successStories as $story)
            <tr>
              <td class="px-0">
                <div class="d-flex align-items-center">
                  <img src="{{ asset($story->img ?? 'Admin/assets/images/no-image.png') }}" class="rounded-circle" width="40" alt="user" />
                  <div class="ms-3"> 
                    <h6 class="mb-0 fw-bolder">{{ $story->name }}</h6>
                    <span class="text-muted">{{ $story->achivement ?? 'No Achievement Info' }}</span>
                  </div>
                </div>
              </td>
              <td class="px-0">{{ $story->department ?? '-' }}</td>
              <td class="px-0">{{ $story->university_name ?? '-' }}</td>
              <td class="px-0">
                <span class="badge bg-info">{{ $story->scholarship ?? 'None' }}</span>
              </td>
              <td class="px-0 text-dark fw-medium">{{ $story->CGPA ?? '-' }}</td>
              <td class="px-0">{{ $story->country ?? '-' }}</td>
              <td class="px-0">
                @if($story->relocated)
                  <span class="badge bg-success">Yes</span>
                @else
                  <span class="badge bg-secondary">No</span>
                @endif
              </td>
              <td class="px-0 text-end">
                <a href="{{ route('admin.success_stories.show', $story->id) }}" class="btn btn-sm btn-warning">
                  Edit
                </a>
                <form action="{{ route('admin.success_stories.destroy', $story->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this story?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="8" class="text-center py-4 text-muted">
                No success stories found.
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
@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')

<div class="container-fluid">

  @if(isset($successMessage))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $successMessage }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(isset($errorMessage))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $errorMessage }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="d-md-flex align-items-center justify-content-between">
        <div>
          <h4 class="card-title mb-1">Partner Management</h4>
          <p class="card-subtitle text-muted">
            Manage your website partners — {{ $partners->count() }} Total
          </p>
        </div>
        <div class="ms-auto mt-3 mt-md-0">
          <a href="{{ route('admin.partners.create') }}" class="btn btn-primary">
            + Add New Partner
          </a>
        </div>
      </div>

      <div class="table-responsive mt-4">
        <table class="table mb-0 align-middle text-nowrap fs-3">
          <thead class="table-light">
            <tr>
              <th scope="col" class="text-muted px-0">Logo</th>
              <th scope="col" class="text-muted px-0">Name</th>
              <th scope="col" class="text-muted px-0">Alt Text</th>
              <th scope="col" class="text-muted px-0">Status</th>
              <th scope="col" class="text-muted text-end px-0">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($partners as $partner)
            <tr>
              <td class="px-0">
                <img src="{{ asset($partner->img ?? 'Admin/assets/images/no-image.png') }}"
                     class="rounded-3 shadow-sm"
                     width="80"
                     height="50"
                     alt="{{ $partner->alt_text ?? 'Partner Image' }}"
                     style="object-fit: cover;">
              </td>
              <td class="px-0">
                <h6 class="fw-semibold mb-0">{{ $partner->name }}</h6>
              </td>
              <td class="px-0 text-muted">
                {{ $partner->alt_text ?? '—' }}
              </td>
              <td class="px-0">
                @if($partner->status)
                  <span class="badge bg-success">Active</span>
                @else
                  <span class="badge bg-secondary">Inactive</span>
                @endif
              </td>
              <td class="px-0 text-end">
                <a href="{{ route('admin.partners.show', $partner->id) }}" class="btn btn-sm btn-warning">
                  Edit
                </a>
                <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this partner?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-muted py-4">
                No partners found.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <div class="mt-4">
        {{ $partners->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

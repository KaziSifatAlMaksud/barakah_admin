@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')

<div class="container-fluid">

  {{-- Success Message --}}
  @if(isset($successMessage))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $successMessage }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  {{-- Error Message --}}
  @if(isset($errorMessage))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $errorMessage }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  {{-- Card Section --}}
  <div class="card shadow-sm">
    <div class="card-body">
      <div class="d-md-flex align-items-center justify-content-between">
        <div>
          <h4 class="card-title mb-1">User Management</h4>
          <p class="card-subtitle text-muted">
            Manage system users — {{ $users->count() }} Total
          </p>
        </div>
        <div class="ms-auto mt-3 mt-md-0">
          <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
            + Add New User
          </a>
        </div>
      </div>

      {{-- Table --}}
      <div class="table-responsive mt-4">
        <table class="table mb-0 align-middle text-nowrap fs-3">
          <thead class="table-light">
            <tr>
              <th scope="col" class="text-muted px-0">#</th>
              <th scope="col" class="text-muted px-0">Name</th>
              <th scope="col" class="text-muted px-0">Email</th>
              <th scope="col" class="text-muted px-0">Role</th>
              <th scope="col" class="text-muted text-end px-0">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $index => $user)
            <tr>
              <td class="px-0">{{ $index + 1 }}</td>
              <td class="px-0 fw-semibold">{{ $user->name }}</td>
              <td class="px-0 text-muted">{{ $user->email }}</td>
              <td class="px-0">
                <span class="badge {{ $user->role === 'admin' ? 'bg-primary' : 'bg-secondary' }}">
                  {{ ucfirst($user->role) }}
                </span>
              </td>
              <td class="px-0 text-end">
                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-muted py-4">
                No users found.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      {{-- Pagination --}}
      <div class="mt-4">
        {{ $users->links() }}
      </div>
    </div>
  </div>
</div>

@endsection

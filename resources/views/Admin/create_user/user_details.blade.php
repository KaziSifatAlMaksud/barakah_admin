@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-md-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Edit User</h4>
          <p class="card-subtitle text-muted">Update user details below</p>
        </div>
      </div>

      {{-- FORM START --}}
      <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-4">
          {{-- 👤 Name --}}
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" id="name"
                   class="form-control shadow-sm"
                   value="{{ old('name', $user->name) }}"
                   placeholder="Enter full name" required>
          </div>

          {{-- ✉️ Email --}}
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold">Email</label>
            <input type="email" name="email" id="email"
                   class="form-control shadow-sm"
                   value="{{ old('email', $user->email) }}"
                   placeholder="Enter email address" required>
          </div>

          {{-- 🧭 Role --}}
          <div class="col-md-6">
            <label for="role" class="form-label fw-semibold">User Role</label>
            <select name="role" id="role" class="form-select shadow-sm" required>
              <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
              <option value="employee" {{ $user->role == 'employee' ? 'selected' : '' }}>Employee</option>
            </select>
          </div>

          {{-- 🔒 Password (optional) --}}
          <div class="col-md-6">
            <label for="password" class="form-label fw-semibold">New Password (optional)</label>
            <input type="password" name="password" id="password"
                   class="form-control shadow-sm"
                   placeholder="Enter new password (leave blank to keep current)">
          </div>
        </div>

        {{-- SUBMIT BUTTONS --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary px-4">Update User</button>
          <a href="{{ route('admin.users.index') }}" class="btn btn-secondary px-4">Cancel</a>
        </div>
      </form>
      {{-- FORM END --}}
    </div>
  </div>
</div>
@endsection

@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-md-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Add User</h4>
          <p class="card-subtitle text-muted">Create a new user entry</p>
        </div>
      </div>

      {{-- FORM START --}}
      <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-4">
          {{-- 👤 Name --}}
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Full Name</label>
            <input 
              type="text" 
              name="name" 
              id="name" 
              class="form-control shadow-sm" 
              placeholder="Enter full name" 
              value="{{ old('name') }}" 
              required>
            @error('name')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          {{-- 📧 Email --}}
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold">Email Address</label>
            <input 
              type="email" 
              name="email" 
              id="email" 
              class="form-control shadow-sm" 
              placeholder="Enter email address" 
              value="{{ old('email') }}" 
              required>
            @error('email')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          {{-- 🔒 Password --}}
          <div class="col-md-6">
            <label for="password" class="form-label fw-semibold">Password</label>
            <input 
              type="password" 
              name="password" 
              id="password" 
              class="form-control shadow-sm" 
              placeholder="Enter password" 
              required>
            @error('password')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          {{-- 🔑 Confirm Password --}}
          <div class="col-md-6">
            <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
            <input 
              type="password" 
              name="password_confirmation" 
              id="password_confirmation" 
              class="form-control shadow-sm" 
              placeholder="Re-enter password" 
              required>
          </div>

          {{-- 🧩 Role --}}
          <div class="col-md-6">
            <label for="role" class="form-label fw-semibold">User Role</label>
            <select 
              name="role" 
              id="role" 
              class="form-select shadow-sm" 
              required>
              <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>employee</option>
              <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('role')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

          {{-- ⚙️ Status --}}
          <div class="col-md-6">
            <label for="status" class="form-label fw-semibold">Status</label>
            <select 
              name="status" 
              id="status" 
              class="form-select shadow-sm" 
              required>
              <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
              <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            @error('status')
              <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
          </div>

         
        </div>

        {{-- SUBMIT BUTTONS --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary px-4">Submit</button>
          <a href="{{ route('admin.users.index') }}" class="btn btn-secondary px-4">Cancel</a>
        </div>
      </form>
      {{-- FORM END --}}
    </div>
  </div>
</div>


@endsection

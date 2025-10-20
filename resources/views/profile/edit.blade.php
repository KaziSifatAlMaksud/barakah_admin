@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">My Profile</h4>
          <p class="card-subtitle text-muted">Manage your account information and security settings</p>
        </div>
      </div>

      {{-- Profile Info Form --}}
      <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row g-4">
          {{-- 👤 Profile Photo --}}
          <div class="col-md-12">
            <label for="profile_photo" class="form-label fw-semibold">Profile Photo</label>
            <div class="d-flex align-items-center flex-column flex-md-row gap-3">
              <div class="image-preview-wrapper text-center">
                <img id="profilePreview" 
                     src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('Admin/assets/images/no-image.png') }}" 
                     alt="Profile" 
                     class="rounded-circle border shadow-sm" 
                     style="width: 140px; height: 140px; object-fit: cover;">
              </div>

              <div>
                <input type="file" name="profile_photo" id="profileInput" class="form-control shadow-sm" accept="image/*">
                <div class="mt-2 d-flex gap-2">
                  <button type="button" id="removeProfileBtn" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-trash"></i> Remove
                  </button>
                  <button type="button" id="resetProfileBtn" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-counterclockwise"></i> Reset
                  </button>
                </div>
                <small class="text-muted d-block mt-2">Allowed: JPG, PNG, GIF | Max size: 2MB</small>
              </div>
            </div>
          </div>

          {{-- 🧍‍♂️ Name --}}
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Full Name</label>
            <input type="text" name="name" id="name" 
                   class="form-control shadow-sm" 
                   value="{{ old('name', Auth::user()->name) }}" 
                   required>
          </div>

          {{-- 📧 Email --}}
          <div class="col-md-6">
            <label for="email" class="form-label fw-semibold">Email Address</label>
            <input type="email" name="email" id="email" 
                   class="form-control shadow-sm" readonly
                   value="{{ old('email', Auth::user()->email) }}" 
                   required>
          </div>

          {{-- 🔐 Password Change Section --}}
          <div class="col-md-6">
            <label for="password" class="form-label fw-semibold">New Password</label>
            <input type="password" name="password" id="password" class="form-control shadow-sm" placeholder="Leave blank to keep current password">
          </div>

          <div class="col-md-6">
            <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control shadow-sm" placeholder="Confirm new password">
          </div>
        </div>

        {{-- Action Buttons --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary px-4">Update Profile</button>
          <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancel</a>
        </div>
      </form>

      {{-- Delete Account Section --}}
      <hr class="my-5">
      <div class="text-danger">
        <h5 class="fw-bold mb-2">Delete Account</h5>
        <p class="text-muted mb-3">Once your account is deleted, all of your data will be permanently removed. Please proceed with caution.</p>
        <form action="{{ route('profile.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete Account</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- JS for Profile Image Preview --}}
<script>
  const profileInput = document.getElementById('profileInput');
  const profilePreview = document.getElementById('profilePreview');
  const removeProfileBtn = document.getElementById('removeProfileBtn');
  const resetProfileBtn = document.getElementById('resetProfileBtn');
  const defaultProfile = "{{ asset('Admin/assets/images/no-image.png') }}";
  const currentProfile = "{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('Admin/assets/images/no-image.png') }}";

  profileInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (event) => profilePreview.src = event.target.result;
      reader.readAsDataURL(file);
    }
  });

  removeProfileBtn.addEventListener('click', () => {
    profileInput.value = '';
    profilePreview.src = defaultProfile;
  });

  resetProfileBtn.addEventListener('click', () => {
    profileInput.value = '';
    profilePreview.src = currentProfile;
  });
</script>
@endsection

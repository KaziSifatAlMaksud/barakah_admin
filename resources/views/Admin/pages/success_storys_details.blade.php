@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-md-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Edit Success Story</h4>
          <p class="card-subtitle text-muted">Update the details of this success story</p>
        </div>
        <div class="ms-auto">
          <a href="{{ route('admin.success_stories.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to List
          </a>
        </div>
      </div>

      {{-- FORM START --}}
      <form action="{{ route('admin.success_stories.update', $story->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-4">
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $story->name) }}" class="form-control shadow-sm" placeholder="Enter Name" required>
          </div>

          <div class="col-md-6">
            <label for="department" class="form-label fw-semibold">Department</label>
            <input type="text" name="department" id="department" value="{{ old('department', $story->department) }}" class="form-control shadow-sm" placeholder="Enter Department">
          </div>

          <div class="col-md-6">
            <label for="university_name" class="form-label fw-semibold">University Name</label>
            <input type="text" name="university_name" id="university_name" value="{{ old('university_name', $story->university_name) }}" class="form-control shadow-sm" placeholder="Enter University Name">
          </div>

          <div class="col-md-6">
            <label for="scholarship" class="form-label fw-semibold">Scholarship</label>
            <input type="text" name="scholarship" id="scholarship" value="{{ old('scholarship', $story->scholarship) }}" class="form-control shadow-sm" placeholder="Enter Scholarship Name">
          </div>

          <div class="col-md-4">
            <label for="CGPA" class="form-label fw-semibold">CGPA</label>
            <input type="number" step="0.01" name="CGPA" id="CGPA" value="{{ old('CGPA', $story->CGPA) }}" class="form-control shadow-sm" placeholder="Enter CGPA">
          </div>

          <div class="col-md-4">
            <label for="country" class="form-label fw-semibold">Country</label>
            <input type="text" name="country" id="country" value="{{ old('country', $story->country) }}" class="form-control shadow-sm" placeholder="Enter Country">
          </div>

          <div class="col-md-4">
            <label for="relocated" class="form-label fw-semibold">Relocated</label>
            <select name="relocated" id="relocated" class="form-select shadow-sm">
              <option value="0" {{ old('relocated', $story->relocated) == 0 ? 'selected' : '' }}>No</option>
              <option value="1" {{ old('relocated', $story->relocated) == 1 ? 'selected' : '' }}>Yes</option>
            </select>
          </div>

          {{-- 🖼️ IMAGE UPLOAD FIELD --}}
          <div class="col-md-12">
            <label for="image" class="form-label fw-semibold">Profile Image</label>
            <div class="d-flex align-items-center flex-column flex-md-row gap-3">
              <div class="image-preview-wrapper text-center">
                <img id="imagePreview" 
                     src="{{ asset($story->img ?? 'Admin/assets/images/no-image.png') }}" 
                     alt="Preview" 
                     class="rounded-3 border" 
                     style="width: 160px; height: 160px; object-fit: cover;">
              </div>

              <div>
                <input type="file" name="image" id="imageInput" class="form-control shadow-sm" accept="image/*">
                <div class="mt-2 d-flex gap-2">
                  <button type="button" id="removeImageBtn" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-trash"></i> Remove
                  </button>
                  <button type="button" id="resetImageBtn" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-counterclockwise"></i> Reset
                  </button>
                </div>
                <small class="text-muted d-block mt-2">Allowed: JPG, PNG, GIF | Max size: 2MB</small>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <label for="achivement" class="form-label fw-semibold">Achievement</label>
            <textarea name="achivement" id="achivement" rows="4" class="form-control shadow-sm" placeholder="Describe the achievements...">{{ old('achivement', $story->achivement) }}</textarea>
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary px-4">Update</button>
          <a href="{{ route('admin.success_stories.index') }}" class="btn btn-secondary px-4">Cancel</a>
        </div>
      </form>
      {{-- FORM END --}}
    </div>
  </div>
</div>

{{-- JS for Image Preview and Remove --}}
<script>
  const imageInput = document.getElementById('imageInput');
  const imagePreview = document.getElementById('imagePreview');
  const removeImageBtn = document.getElementById('removeImageBtn');
  const resetImageBtn = document.getElementById('resetImageBtn');
  const defaultImage = "{{ asset('Admin/assets/images/no-image.png') }}";
  const currentImage = "{{ asset($story->img ?? 'Admin/assets/images/no-image.png') }}";

  // Preview selected image
  imageInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(evt) {
        imagePreview.src = evt.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

  // Remove selected image
  removeImageBtn.addEventListener('click', function() {
    imageInput.value = '';
    imagePreview.src = defaultImage;
  });

  // Reset to old image
  resetImageBtn.addEventListener('click', function() {
    imageInput.value = '';
    imagePreview.src = currentImage;
  });
</script>
@endsection

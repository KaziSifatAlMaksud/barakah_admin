@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-md-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Add Partner</h4>
          <p class="card-subtitle text-muted">Create a new partner entry</p>
        </div>
      </div>

      {{-- FORM START --}}
      <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row g-4">
          {{-- Partner Name --}}
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Partner Name</label>
            <input type="text" name="name" id="name" class="form-control shadow-sm" placeholder="Enter Partner Name" required>
          </div>

          {{-- Status --}}
          <div class="col-md-6">
            <label for="status" class="form-label fw-semibold">Status</label>
            <select name="status" id="status" class="form-select shadow-sm" required>
              <option value="0">Inactive</option>
              <option value="1">Active</option>
            </select>
          </div>

          {{-- Alt Text --}}
          <div class="col-md-12">
            <label for="alt_text" class="form-label fw-semibold">Alt Text</label>
            <textarea name="alt_text" id="alt_text" rows="3" class="form-control shadow-sm" placeholder="Enter image alt text..."></textarea>
          </div>

          {{-- 🖼️ IMAGE UPLOAD FIELD --}}
          <div class="col-md-12">
            <label for="img" class="form-label fw-semibold">Partner Image</label>
            <div class="d-flex align-items-center flex-column flex-md-row gap-3">
              <div class="image-preview-wrapper text-center">
                <img id="imagePreview" src="{{ asset('Admin/assets/images/no-image.png') }}" alt="Preview" class="rounded-3 border" style="width: 160px; height: 160px; object-fit: cover;">
              </div>

              <div>
                <input type="file" name="img" id="imageInput" class="form-control shadow-sm" accept="image/*" required>
                <div class="mt-2 d-flex gap-2">
                  <button type="button" id="removeImageBtn" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-trash"></i> Remove
                  </button>
                  <button type="button" id="resetImageBtn" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-counterclockwise"></i> Reset
                  </button>
                </div>
                <small class="text-muted d-block mt-2">Allowed types: JPG, PNG, GIF | Max size: 2MB</small>
              </div>
            </div>
          </div>
        </div>

        {{-- Submit Buttons --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary px-4">Submit</button>
          <a href="{{ route('admin.partners.index') }}" class="btn btn-secondary px-4">Cancel</a>
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

  // Preview when selecting an image
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

  // Reset preview image
  resetImageBtn.addEventListener('click', function() {
    imageInput.value = '';
    imagePreview.src = defaultImage;
  });
</script>
@endsection

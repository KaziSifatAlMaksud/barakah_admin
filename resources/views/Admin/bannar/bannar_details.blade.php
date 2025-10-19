@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-md-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Edit Banner</h4>
          <p class="card-subtitle text-muted">Update banner details below</p>
        </div>
      </div>

      {{-- FORM START --}}
      <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-4">
          {{-- 🏷️ Title --}}
          <div class="col-md-6">
            <label for="title" class="form-label fw-semibold">Title</label>
            <input type="text" name="title" id="title" 
                   class="form-control shadow-sm" 
                   value="{{ old('title', $banner->title) }}" 
                   placeholder="Enter banner title" required>
          </div>

 
          <div class="col-md-6">
            <label for="status" class="form-label fw-semibold">Status</label>
            <select name="status" id="status" class="form-select shadow-sm" required>
              <option value="0" {{ $banner->status == 0 ? 'selected' : '' }}>Inactive</option>
              <option value="1" {{ $banner->status == 1 ? 'selected' : '' }}>Active</option>
            </select>
          </div>


          <div class="col-md-12">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea name="description" id="description" rows="4" 
                      class="form-control shadow-sm" 
                      placeholder="Enter banner description">{{ old('description', $banner->description) }}</textarea>
          </div>

   
          <div class="col-md-12">
            <label for="image" class="form-label fw-semibold">Banner Image</label>
            <div class="d-flex align-items-center flex-column flex-md-row gap-3">

              {{-- ✅ Corrected Image Preview --}}
              <div class="image-preview-wrapper text-center">
                <img id="imagePreview" 
                     src="{{ $banner->image ? asset($banner->image) : asset('Admin/assets/images/no-image.png') }}" 
                     alt="Preview" 
                     class="rounded-3 border" 
                     style="width: 160px; height: 160px; object-fit: cover;">
              </div>

              {{-- Image Upload Controls --}}
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
        </div>

        {{-- SUBMIT BUTTONS --}}
        <div class="mt-4">
          <button type="submit" class="btn btn-primary px-4">Update</button>
          <a href="{{ route('admin.banners.index') }}" class="btn btn-secondary px-4">Cancel</a>
        </div>
      </form>
      {{-- FORM END --}}
    </div>
  </div>
</div>

{{-- ✅ Image Preview Script --}}
<script>
  const imageInput = document.getElementById('imageInput');
  const imagePreview = document.getElementById('imagePreview');
  const removeImageBtn = document.getElementById('removeImageBtn');
  const resetImageBtn = document.getElementById('resetImageBtn');
  const defaultImage = "{{ asset('Admin/assets/images/no-image.png') }}";
  const currentImage = "{{ $banner->image ? asset($banner->image) : asset('Admin/assets/images/no-image.png') }}";

  imageInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (event) => imagePreview.src = event.target.result;
      reader.readAsDataURL(file);
    }
  });

  removeImageBtn.addEventListener('click', () => {
    imageInput.value = '';
    imagePreview.src = defaultImage;
  });

  resetImageBtn.addEventListener('click', () => {
    imageInput.value = '';
    imagePreview.src = currentImage;
  });
</script>
@endsection

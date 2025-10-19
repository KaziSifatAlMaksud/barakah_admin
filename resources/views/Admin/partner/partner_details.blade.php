@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <div class="d-md-flex align-items-center mb-4">
        <div>
          <h4 class="card-title fw-bold">Edit Partner</h4>
          <p class="card-subtitle text-muted">Update partner details below</p>
        </div>
      </div>

      {{-- FORM START --}}
      <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row g-4">
          {{-- 🏷️ Partner Name --}}
          <div class="col-md-6">
            <label for="name" class="form-label fw-semibold">Partner Name</label>
            <input type="text" name="name" id="name" 
                   class="form-control shadow-sm" 
                   value="{{ old('name', $partner->name) }}" 
                   placeholder="Enter Partner Name" required>
          </div>

          {{-- ⚙️ Status --}}
          <div class="col-md-6">
            <label for="status" class="form-label fw-semibold">Status</label>
            <select name="status" id="status" class="form-select shadow-sm" required>
              <option value="0" {{ $partner->status == 0 ? 'selected' : '' }}>Inactive</option>
              <option value="1" {{ $partner->status == 1 ? 'selected' : '' }}>Active</option>
            </select>
          </div>

          {{-- 📝 Alt Text --}}
          <div class="col-md-12">
            <label for="alt_text" class="form-label fw-semibold">Alt Text</label>
            <textarea name="alt_text" id="alt_text" rows="3" 
                      class="form-control shadow-sm" 
                      placeholder="Enter image alt text...">{{ old('alt_text', $partner->alt_text) }}</textarea>
          </div>

          {{-- 🖼️ Partner Image Upload & Preview --}}
          <div class="col-md-12">
            <label for="img" class="form-label fw-semibold">Partner Image</label>
            <div class="d-flex align-items-center flex-column flex-md-row gap-3">
              
              {{-- Image Preview --}}
              <div class="image-preview-wrapper text-center">
                <img id="imagePreview" 
                     src="{{ $partner->img ? asset($partner->img) : asset('Admin/assets/images/no-image.png') }}" 
                     alt="Preview" 
                     class="rounded-3 border" 
                     style="width: 160px; height: 160px; object-fit: cover;">
              </div>

              {{-- Image Controls --}}
              <div>
                <input type="file" name="img" id="imageInput" class="form-control shadow-sm" accept="image/*">
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
          <a href="{{ route('admin.partners.index') }}" class="btn btn-secondary px-4">Cancel</a>
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
  const currentImage = "{{ $partner->img ? asset($partner->img) : asset('Admin/assets/images/no-image.png') }}";
  // 🔄 Live Preview
  imageInput.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (event) => imagePreview.src = event.target.result;
      reader.readAsDataURL(file);
    }
  });

  // ❌ Remove image
  removeImageBtn.addEventListener('click', () => {
    imageInput.value = '';
    imagePreview.src = defaultImage;
  });

  // 🔁 Reset to original
  resetImageBtn.addEventListener('click', () => {
    imageInput.value = '';
    imagePreview.src = currentImage;
  });
</script>
@endsection

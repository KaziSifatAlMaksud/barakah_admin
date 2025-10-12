
@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')

<div class="container-fluid">

    <div class="card-body">

      {{-- ✅ Success Message --}}
      @if (session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      {{-- ✅ Country Form --}}
      <h4 class="card-title mb-3">Add New Country</h4>
   
      <form action="{{ route('admin.country.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-3">
                <label class="form-label">Country Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label class="form-label">Short Form</label>
                <input type="text" name="short_form" class="form-control" required>
            </div>
            <div class="col-md-2">
                <label class="form-label">Region</label>
                <input type="text" name="region" class="form-control">
            </div>
            <div class="col-md-2">
                <label class="form-label">Currency</label>
                <input type="text" name="currency" class="form-control">
            </div>
            <div class="col-md-3">
                <label class="form-label">Flag Icon</label>
                 <img id="flagPreview" src="" alt="Flag Preview" style="margin:10px 10px;  max-width:50px; display:none;">
                <input type="file" name="flag_icon" class="form-control" onchange="previewImage(event, 'flagPreview')">
            </div>
            <div class="col-md-3">
                <label class="form-label">Background Image</label>
                <img id="bgPreview" src="" alt="Background Preview" style="margin:10px 10px; max-width:50px; display:none;">
                <input type="file" name="bg_img" class="form-control" onchange="previewImage(event, 'bgPreview')">  
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Country</button>
    </form>

    {{-- Model Start Here --}}

    <!-- Edit Country Modal -->
<div class="modal fade" id="editCountryModal" tabindex="-1" aria-labelledby="editCountryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="editCountryForm" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="editCountryModalLabel">Edit Country</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="edit_id" name="id">

          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" id="edit_name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Short Form</label>
            <input type="text" name="short_form" id="edit_short_form" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Region</label>
            <input type="text" name="region" id="edit_region" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Currency</label>
            <input type="text" name="currency" id="edit_currency" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <!-- Edit Country Modal -->

    <script>
    function previewImage(event, previewId) {
        const input = event.target;
        const preview = document.getElementById(previewId);

        if(input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.editBtn');

        editButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('edit_id').value = this.dataset.id;
                document.getElementById('edit_name').value = this.dataset.name;
                document.getElementById('edit_short_form').value = this.dataset.short_form;
                document.getElementById('edit_region').value = this.dataset.region;
                document.getElementById('edit_currency').value = this.dataset.currency;

                // Set form action dynamically
                document.getElementById('editCountryForm').action = `/country/${this.dataset.id}`;
            });
        });
    });
    </script>

      <hr>

      {{-- ✅ Country Table --}}
      <h4 class="mt-4">All Countries ({{ $countries->count() }})</h4>
      <div class="table-responsive mt-3">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Short Form</th>
                    <th>Region</th>
                    <th>Currency</th>
                    <th>Background</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->short_form }}</td>
                        <td>{{ $country->region ?? '-' }}</td>
                        <td>{{ $country->currency ?? '-' }}</td>
                        <td>
                            @if (!empty($country->bg_img))
                                <img src="{{ asset('storage/' . $country->bg_img) }}" alt="Image" width="60">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- Edit Button -->
                            <button class="btn btn-sm btn-primary editBtn"
                                data-id="{{ $country->id }}"
                                data-name="{{ $country->name }}"
                                data-short_form="{{ $country->short_form }}"
                                data-region="{{ $country->region }}"
                                data-currency="{{ $country->currency }}"
                                data-bs-toggle="modal"
                                data-bs-target="#editCountryModal">
                                Edit
                            </button>

                            <!-- Delete -->
                            <form action="{{ route('admin.country.destroy', $country->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this country?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>

</div>
@endsection
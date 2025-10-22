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

        {{-- ✅ Search Bar --}}
        <form method="GET" action="{{ route('admin.university.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search university by name, city or state..." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>

        {{-- ✅ Add University Form --}}
        <h4 class="card-title mb-3">Add New University</h4>

        <form action="{{ route('admin.university.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">

                <div class="col-md-3">
                    <label class="form-label">University Name</label>
                    <input type="text" name="university_name" class="form-control" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">City</label>
                    <input type="text" name="city" class="form-control">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Country</label>
                    <select name="country_id" class="form-select">
                        <option value="">Select Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label">State</label>
                    <input type="text" name="state" class="form-control">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Type</label>
                    <select name="type" class="form-select">
                        <option value="">Select Type</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                    </select>
                </div>

                <div class="col-md-4 mt-3">
                    <label class="form-label">Remarks</label>
                    <textarea name="remarks" class="form-control" rows="2"></textarea>
                </div>

                <div class="col-md-2 mt-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save University</button>
        </form>

        {{-- ✅ University Table --}}
        <hr>
        <h4 class="mt-4">All Universities ({{ $universities->count() }})</h4>

        <div class="table-responsive mt-3">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>University Name</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>State</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($universities as $university)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $university->university_name }}</td>
                            <td>{{ $university->city ?? '-' }}</td>
                            <td>{{ $university->country->name ?? '-' }}</td>
                            <td>{{ $university->state ?? '-' }}</td>
                            <td>{{ $university->type ?? '-' }}</td>
                            <td>
                                @if ($university->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary editBtn"
                                        data-id="{{ $university->id }}"
                                        data-university_name="{{ $university->university_name }}"
                                        data-city="{{ $university->city }}"
                                        data-country_id="{{ $university->country_id }}"
                                        data-state="{{ $university->state }}"
                                        data-type="{{ $university->type }}"
                                        data-remarks="{{ $university->remarks }}"
                                        data-status="{{ $university->status }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editUniversityModal">
                                        Edit
                                </button>

                                <form action="{{ route('admin.university.destroy', $university->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this university?');">
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

{{-- ✅ Edit University Modal --}}
<div class="modal fade" id="editUniversityModal" tabindex="-1" aria-labelledby="editUniversityModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editUniversityForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editUniversityModalLabel">Edit University</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="id">

                    <div class="mb-3">
                        <label class="form-label">University Name</label>
                        <input type="text" name="university_name" id="edit_university_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" id="edit_city" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <select name="country_id" id="edit_country_id" class="form-select">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">State</label>
                        <input type="text" name="state" id="edit_state" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Type</label>
                        <select name="type" id="edit_type" class="form-select">
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Remarks</label>
                        <textarea name="remarks" id="edit_remarks" class="form-control" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="edit_status" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.editBtn');

    editButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            document.getElementById('edit_id').value = this.dataset.id;
            document.getElementById('edit_university_name').value = this.dataset.university_name;
            document.getElementById('edit_city').value = this.dataset.city;
            document.getElementById('edit_country_id').value =
    this.dataset.country_id;
            document.getElementById('edit_state').value = this.dataset.state;
            document.getElementById('edit_type').value = this.dataset.type;
            document.getElementById('edit_remarks').value = this.dataset.remarks;
            document.getElementById('edit_status').value = this.dataset.status;

            // Set form action dynamically
            document.getElementById('editUniversityForm').action = `/admin/university/${this.dataset.id}`;
        });
    });
});
</script>

@endsection
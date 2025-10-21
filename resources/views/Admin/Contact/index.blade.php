@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')

@section('content')
<div class="container-fluid">
  <!-- Page Header -->
 

  <!-- Success & Error Alerts -->
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
      <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
      <i class="bi bi-exclamation-triangle me-2"></i> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <!-- Contacts Table -->
  <div class="card shadow-sm border-0">
    <div class="d-md-flex align-items-center justify-content-between mx-4 mt-4">
        <div>
          <h4 class="card-title mb-1">Contact Messages Management</h4>
          <p class="card-subtitle text-muted">
            All inquiries and messages submitted from the website.
          </p>
        </div>
     
      </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table align-middle mb-0 text-nowrap ">
          <thead class="table-light">
            <tr>
              <th class="text-muted">#</th>
              <th class="text-muted">Name</th>
              <th class="text-muted">Email</th>
              <th class="text-muted">Phone</th>
              <th class="text-muted">Project Option</th>
              <th class="text-muted">Message</th>
              <th class="text-muted text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($contacts as $index => $contact)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td class="fw-semibold">{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->project_option }}</td>
                <td class="text-truncate" style="max-width: 200px;">{{ Str::limit($contact->message, 50) }}</td>
                <td class="text-end">
                  <button 
                  class="btn btn-sm btn-warning"
                    data-bs-toggle="modal"
                    data-bs-target="#quickViewModal"
                    data-id="{{ $contact->id }}"
                    data-name="{{ $contact->name }}"
                    data-email="{{ $contact->email }}"
                    data-phone="{{ $contact->phone }}"
                    data-project="{{ $contact->project_option }}"
                    data-subject="{{ $contact->subject }}"
                    data-message="{{ $contact->message }}"
                    data-date="{{ $contact->created_at }}">
                   View
                  </button>

                  <button 
                    class="btn btn-sm btn-danger"
                    data-bs-toggle="modal"
                    data-bs-target="#deleteModal"
                    data-id="{{ $contact->id }}">
                    Delete
                  </button>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-center py-4 text-muted">No messages found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="d-flex justify-content-center mt-4">
        {{ $contacts->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>
</div>

<!-- Quick View Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 shadow-lg">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="quickViewLabel"><i class="bi bi-person-lines-fill me-2"></i>Contact Details</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-3">
          <div class="col-md-6">
            <p><strong>Name:</strong> <span id="viewName"></span></p>
            <p><strong>Email:</strong> <span id="viewEmail"></span></p>
            <p><strong>Phone:</strong> <span id="viewPhone"></span></p>
          </div>
          <div class="col-md-6">
            <p><strong>Project Option:</strong> <span id="viewProject"></span></p>
            <p><strong>Subject:</strong> <span id="viewSubject"></span></p>
            <p><strong>Submitted:</strong> <span id="viewDate"></span></p>
          </div>
        </div>
        <hr>
        <p><strong>Message:</strong></p>
        <div class="bg-light p-3 rounded" id="viewMessage" style="min-height: 100px;"></div>
      </div>
    </div>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-sm">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title"><i class="bi bi-exclamation-triangle me-2"></i>Confirm Deletion</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form id="deleteForm" method="POST" action="">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          <p class="mb-0">Are you sure you want to permanently delete this message?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const quickViewModal = document.getElementById('quickViewModal');
  if (quickViewModal) {
    quickViewModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      document.getElementById('viewName').textContent = button.getAttribute('data-name');
      document.getElementById('viewEmail').textContent = button.getAttribute('data-email');
      document.getElementById('viewPhone').textContent = button.getAttribute('data-phone');
      document.getElementById('viewProject').textContent = button.getAttribute('data-project');
      document.getElementById('viewSubject').textContent = button.getAttribute('data-subject');
      document.getElementById('viewMessage').textContent = button.getAttribute('data-message');
      const dateStr = button.getAttribute('data-date');
      document.getElementById('viewDate').textContent = dateStr ? new Date(dateStr).toLocaleString() : '';
    });
  }

  const deleteModal = document.getElementById('deleteModal');
  deleteModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const contactId = button.getAttribute('data-id');
    const form = document.getElementById('deleteForm');
    form.action = "{{ url('admin/contact_us') }}/" + contactId;
  });
});
</script>
@endsection

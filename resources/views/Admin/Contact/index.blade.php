
@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')


@section('content')

 <div class="container-fluid">

              @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success:</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                @if(session('error'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error:</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form id="deleteForm" method="POST" action="">
                      @csrf
                      @method('DELETE')

                      <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        Are you sure you want to delete this contact?
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>



            <!-- Quick View Modal -->
                  <div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="quickViewLabel">Contact Details</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body  p-5">
                          <dl class="row">
                            <dt class="col-sm-3"><b>Name : </b></dt>
                            <dd class="col-sm-9" id="viewName"></dd>

                            <dt class="col-sm-3"><b>Email : </b></dt>
                            <dd class="col-sm-9" id="viewEmail"></dd>

                            <dt class="col-sm-3"><b>Phone : </b></dt>
                            <dd class="col-sm-9" id="viewPhone"></dd>

                            <dt class="col-sm-3"><b>Project Option : </b></dt>
                            <dd class="col-sm-9" id="viewProject"></dd>

                            <dt class="col-sm-3"><b>Subject : </b></dt>
                            <dd class="col-sm-9" id="viewSubject"></dd>

                            <dt class="col-sm-3"><b>Message : </b></dt>
                            <dd class="col-sm-9" id="viewMessage"></dd>

                            <dt class="col-sm-3"><b>Submitted At : </b></dt>
                            <dd class="col-sm-9" id="viewDate"></dd>
                          </dl>
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- View Details Modal -->.
            
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Contact Us</h4>
                      <p class="card-subtitle">
                        {{-- Ample Admin Vs Pixel Admin --}}
                    
                      </p>
                    </div>
                    <div class="ms-auto mt-3 mt-md-0">
                      {{-- <select class="form-select theme-select border-0" aria-label="Default select example">
                        <option value="1">March 2025</option>
                        <option value="2">March 2025</option>
                        <option value="3">March 2025</option>
                      </select> --}}
                    </div>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                      <thead>
                          <tr>
                            <th scope="col" class="px-0 text-muted">Name</th>
                            <th scope="col" class="px-0 text-muted">Message</th>
                            <th scope="col" class="px-0 text-muted">Phone</th>
                            <th scope="col" class="px-0 text-muted">Project Option</th>
                            <th scope="col" class="px-0 text-muted text-center">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($contacts as $contact)
                          <tr>
                              <td class="px-0">
                                  {{ $contact->name }}
                              </td>
                              <td class="px-0">{{ $contact->message }}</td>
                              <td class="px-0">{{ $contact->phone }}</td>
                              <td class="px-0">{{ $contact->project_option }}</td>
                              <td class="px-0 text-center">
                                  <!-- Delete Button Icon -->
                                  <button class="btn btn-sm btn-outline-primary"
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
                                      <i class="bi bi-eye"></i>
                                  </button>
                                  
                                      <button class="btn btn-sm btn-outline-danger"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"
                                            data-id="{{ $contact->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

            
                              </td>
                            </tr>
                          @endforeach
                      </tbody>

                    

                    </table>
                    <div class="d-flex justify-content-center mt-3">
                        <nav>
                            <ul class="pagination pagination-sm">
                                @if ($contacts->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link">« Prev</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $contacts->previousPageUrl() }}">« Prev</a></li>
                                @endif
                                @foreach ($contacts->getUrlRange(1, $contacts->lastPage()) as $page => $url)
                                    @if ($page == $contacts->currentPage())
                                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                    @else
                                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                                @if ($contacts->hasMorePages())
                                    <li class="page-item"><a class="page-link" href="{{ $contacts->nextPageUrl() }}">Next »</a></li>
                                @else
                                    <li class="page-item disabled"><span class="page-link">Next »</span></li>
                                @endif
                            </ul>
                        </nav>
                    </div>

                      
                  </div>
                </div>
              </div>
            </div>
      </div>

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
        });
      </script>


      <script>
          var deleteModal = document.getElementById('deleteModal');
          deleteModal.addEventListener('show.bs.modal', function (event) {
              var button = event.relatedTarget;
              var contactId = button.getAttribute('data-id'); 
              var form = document.getElementById('deleteForm');
              form.action = "{{ url('admin/contact_us') }}/" + contactId;
          });
      </script>
@endsection
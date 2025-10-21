
@extends('Admin.layouts.app')
@include('Admin.layouts.sidebar')
@include('Admin.layouts.header')


@section('content')
<style>
  .dashboard-card {
  border-radius: 1rem;
  transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.dashboard-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}
</style>
<div class="container-fluid">
   
        <div class="row g-4 mb-4">

          @php
            $cards = [
              ['title' => 'Success Stories','url'=>'admin.success_stories.index', 'icon' => 'ti ti-bookmark', 'color' => 'success', 'count' => $totalSuccessStories ?? 0],
              ['title' => 'Banners', 'url'=>'admin.banners.index', 'icon' => 'ti ti-photo', 'color' => 'primary', 'count' => $totalBanners ?? 0],
              ['title' => 'Partners', 'url'=>'admin.partners.index', 'icon' => 'ti ti-users', 'color' => 'warning', 'count' => $totalPartners ?? 0],
              ['title' => 'Users', 'url'=>'admin.users.index', 'icon' => 'ti ti-user-check', 'color' => 'info', 'count' => $totalUsers ?? 0],
              ['title' => 'Contact Us', 'url'=>'admin.contact.index', 'icon' => 'ti ti-mail', 'color' => 'danger', 'count' => $totalContacts ?? 0],
              ['title' => 'Applications', 'url'=>'admin.application.index', 'icon' => 'ti ti-file-text', 'color' => 'secondary', 'count' => $totalApplications ?? 0],
            ];
          @endphp

           @foreach ($cards as $card)
          
              <div class="col-12 col-md-6 col-lg-4">
                 <a href="{{ route($card['url']) }}">
                <div class="card dashboard-card shadow-sm border-0 h-100">
                  <div class="card-body d-flex align-items-center">
                    <!-- Icon -->
                    <div class="icon-wrapper me-3" style=" width: 70px;
                        height: 70px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 2.5rem;
                        background-color: rgba(var(--bs-{{ $card['color'] }}-rgb), 0.1);
                        color: var(--bs-{{ $card['color'] }});
                        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
                    ">
                        <i class="{{ $card['icon'] }}"></i>
                    </div>

                    <!-- Info -->
                    <div class="text-start px-4">
                      <h6 class="fw-semibold text-dark mb-1">{{ $card['title'] }}</h6>
                      <h4 class="fw-bold mb-0 text-{{ $card['color'] }}">{{ $card['count'] }}</h4>
                    </div>
                  </div>
                </div>
                 </a>
              </div>
             
            @endforeach

        </div>
 

 
          <!--  Row 1 -->
          <div class="row">
               <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Latest Applications</h4>
                            <p class="card-subtitle">Overview of the latest applications</p>
                        </div>
                        <div class="ms-auto mt-3 mt-md-0">
                            <select class="form-select theme-select border-0">
                                <option value="1">March 2025</option>
                                <option value="2">February 2025</option>
                                <option value="3">January 2025</option>
                            </select>
                        </div>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table mb-0 text-nowrap align-middle fs-3">
                            <thead>
                                <tr>
                                    <th class="px-2 text-muted">#</th>
                                    <th class="px-2 text-muted">Applicant Name</th>
                                    <th class="px-2 text-muted">Email</th>
                                    <th class="px-2 text-muted">Phone</th>
                                    <th class="px-2 text-muted">Exam Type</th>
                                    <th class="px-2 text-muted">PDF</th>
                                    <th class="px-2 text-muted text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($applications as $index => $application)
                                <tr>
                                    <td class="px-2">{{ $index + 1 }}</td>
                                    <td class="px-2">{{ $application->name }}</td>
                                    <td class="px-2">{{ $application->email }}</td>
                                    <td class="px-2">{{ $application->phone }}</td>
                                    <td class="px-2">{{ $application->exam_type }} (Score: {{ $application->score }})</td>
                                    <td class="px-2">
                                        @if ($application->attachment_path)
                                            <a href="{{ asset($application->attachment_path) }}" class="btn btn-sm btn-primary" target="_blank">View PDF</a>
                                        @endif
                                    </td>
                                    <td class="px-2 text-end">
                                        <a href="{{ route('admin.application.show', $application->id) }}" class="btn btn-sm btn-info text-white">View</a>
                                        
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">No latest applications found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
          </div>
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design and Developed by <a href="#"
                class="pe-1 text-primary text-decoration-underline"> </a> Kazi Sifat Al Maksud <a href="https://github.com/KaziSifatAlMaksud" target="_blank" ></a></p>
          </div>
        </div>

@endsection
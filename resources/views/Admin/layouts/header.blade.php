@extends('Admin.layouts.app')
 @section('header')
  <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="ti ti-bell"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="message-body">
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 1
                  </a>
                  <a href="javascript:void(0)" class="dropdown-item">
                    Item 2
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
               
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false" 
                  style="display: flex; align-items: center; gap: 0.5rem; text-decoration: none;">
                    
                    <!-- Profile Image -->
                    <img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('assets/images/no-image.png') }}" 
                        alt="Profile" 
                        width="35" 
                        height="35" 
                        class="rounded-circle" 
                        style="object-fit: cover;">

                    <!-- Name and Role -->
                    <div style="display: flex; flex-direction: column; line-height: 1;">
                        <span style="font-weight: 400; font-size: 0.875rem;">{{ Auth::user()->name }}</span>
                        <small class="text-muted" style="font-size: 0.75rem;">{{ Auth::user()->role }}</small>
                    </div>
                </a>


                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ url('/profile') }}" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a> --}}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">
                            Logout
                        </button>
                    </form>

                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

    @endsection
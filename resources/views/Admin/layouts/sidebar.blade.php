@extends('Admin.layouts.app')




@section('sidebar')
     <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div >
        <div class="brand-logo d-flex flex-column align-items-center justify-content-center text-center pt-3">
          <a href="{{ route('dashboard') }}" class="text-nowrap logo-img d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/img/logo/Barakah-Logo.png') }}" alt="Barakah Logo" width="100" class="mx-auto d-block" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer mt-2" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('admin.contact.index') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Contact Us</span>
                </div>
                
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('admin.application.index') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Applications</span>
                </div>
                
              </a>
            </li>
        

              {{-- card start here  --}}

            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                  <i class="ti ti-trophy"></i>
                  </span>
                  <span class="hide-menu">Success Stories</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.success_stories.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">All Success Stories</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.success_stories.create') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Create Success Story</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            {{-- card end here  --}}

            {{-- card start here  --}}

            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-layout"></i>
                  </span>
                  <span class="hide-menu">Banners</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.banners.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">All Banners</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.banners.create') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Create Banners</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            {{-- card end here  --}}


             {{-- card start here  --}}

            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                   <i class="bi bi-people"></i>  

                  </span>
                  <span class="hide-menu">Partner</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.partners.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">All Partners</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.partners.create') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Create Partners</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            {{-- card end here  --}}


            {{-- card start here  --}}

            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-layout"></i>
                  </span>
                  <span class="hide-menu">User</span>
                </div>
                
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.users.index') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">All Users</span>
                    </div>
                    
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"  
                    href="{{ route('admin.users.create') }}">
                    <div class="d-flex align-items-center gap-3">
                      <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="ti ti-circle"></i>
                      </div>
                      <span class="hide-menu">Create Users</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            {{-- card end here  --}}

            {{-- card start here  --}}
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="{{ route('admin.country.index') }}" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Country</span>
                </div>
                
              </a>
            </li>
         


           
          
          <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">User Response</span>
            </li>
          
          
           
           
            
         
            

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
          
           
          
           
           
            
            

         


         
            



           
           

           
          
            
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between"  
                href="#"
                aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-settings"></i>
                  </span>
                  <span class="hide-menu">Maintenance</span>
                </div>
                
              </a>
            </li>

            <li>
              <span class="sidebar-divider lg"></span>
            </li>
          
          
           
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->

@endsection
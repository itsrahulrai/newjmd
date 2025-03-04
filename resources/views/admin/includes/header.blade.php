 <div class="app-header header">
     <div class="container-fluid">
         <div class="d-flex">
             <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                 href="#"></a><!-- sidebar-toggle-->
             <a class="header-brand1 d-flex d-md-none" href="{{ route('home') }}">
                 <img src="{{ asset('assets/admin/images/brand/logo.png') }}" class="header-brand-img desktop-logo"
                     alt="logo">
                 <img src="{{ asset('assets/admin/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                     alt="logo">
                 <img src="{{ asset('assets/admin/images/brand/logo-2.png') }}" class="header-brand-img light-logo"
                     alt="logo">
                 <img src="{{ asset('assets/admin/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                     alt="logo">
             </a><!-- LOGO -->
            
             <div class="d-flex order-lg-2 ms-auto header-right-icons">

                 <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                     data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                     aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                 </button>
                 <div class="dropdown d-none d-md-flex">
                     <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                         <span class="dark-layout" data-bs-placement="bottom" data-bs-toggle="tooltip"
                             title="Dark Theme"><i class="fe fe-moon"></i></span>
                         <span class="light-layout" data-bs-placement="bottom" data-bs-toggle="tooltip"
                             title="Light Theme"><i class="fe fe-sun"></i></span>
                     </a>
                 </div><!-- Theme-Layout -->

                 <div class="dropdown d-none d-md-flex">
                     <a class="nav-link icon full-screen-link nav-link-bg">
                         <i class="fe fe-minimize fullscreen-button"></i>
                     </a>
                 </div><!-- FULL-SCREEN -->

                 <div class="dropdown d-none d-md-flex profile-1">
                     <a href="#" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                        <span><img src="{{ asset('assets/admin/images/users/profile.png') }}" 
                            alt="profile-user" 
                            class="avatar avatar-sm brround cover-image mb-1 ms-0" 
                            style="width: 40px; height: 40px;">
                        </span>
                         <span class=" ms-3 d-none d-lg-block ">
                             <span class="text-dark">{{ Auth::user()->name }}</span>
                         </span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                         <div class="drop-heading">
                             <div class="text-center">
                                 <h5 class="text-dark mb-0">{{ Auth::user()->name }}</h5>
                                 <small class="text-muted">Administrator</small>
                             </div>
                         </div>
                         <div class="dropdown-divider m-0"></div>
                         <a class="dropdown-item" href="{{route('admin.user.profile')}}">
                             <i class="dropdown-icon fe fe-user"></i> Profile
                         </a>
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                             <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                 <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                             </a>
                         </form>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>

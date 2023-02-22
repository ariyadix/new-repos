 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         {{-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> --}}
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         @if (auth()->user())
             <li class="nav-item">
                 <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                     <div class="dropdown-item">
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                             @csrf
                             <button class=" btn btn-flat" type="submit">
                                 <i class="fas fa-sign-out-alt"></i> Keluar
                             </button>
                         </form>
                     </div>
                 </div>
             </li>
         @endif
     </ul>
 </nav>
 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/" class="brand-link">
         <img src="{{ asset('img') }}/logo.png" alt="SI - Akdre Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light"><b>SI</b> - Akre</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             @if (Auth::user()->level == 5)
                 <div class="image d-flex align-items-center">
                     <img src="{{ url('img/rev/' . Auth::user()->reviewer->img_url) }}" class="img-circle elevation-2"
                         alt="User Image">
                 </div>
                 <div class="info">

                     <a href="/profile" class="d-block">{{ Auth::user()->reviewer->nama }}</a>
                     <a class="d-block" disabled>{{ Auth::user()->reviewer->instansi }}</a>

                 </div>
             @elseif (Auth::user()->level == 4)
                 <div class="image d-flex align-items-center">
                     <img src="{{ url('img/mhs/' . Auth::user()->mhs->img_url) }}" class="img-circle elevation-2"
                         alt="User Image">
                 </div>
                 <div class="info">

                     <a href="/profile" class="d-block">{{ Auth::user()->mhs->nama }}</a>
                     <a class="d-block" disabled>{{ Auth::user()->mhs->prodi->nama }}</a>
                 </div>
             @elseif (Auth::user()->level == 3)
                 <div class="image d-flex align-items-center">
                     <img src="{{ url('img/dos/' . Auth::user()->dosen->img_url) }}" class="img-circle elevation-2"
                         alt="User Image">
                 </div>
                 <div class="info">

                     <a href="/profile" class="d-block">{{ Auth::user()->dosen->nama }}</a>
                     <a class="d-block" disabled>{{ Auth::user()->dosen->prodi->nama }}</a>
                 </div>
             @elseif (Auth::user()->level == 2)
                 <div class="image d-flex align-items-center">
                     <img src="{{ asset('img') }}/logo.png" class="img-circle elevation-2" alt="User Image">
                 </div>
                 <div class="info">

                     <a href="/profile" class="d-block">{{ Auth::user()->prodi->nama }}</a>
                 </div>
             @else
                 <div class="image d-flex align-items-center">
                     <img src="{{ asset('img') }}/profile.jpg" class="img-circle elevation-2" alt="User Image">
                 </div>
                 <div class="info">

                     <a href="/profile" class="d-block">{{ Auth::user()->username }}</a>
                     <a class="d-block" disabled>Super Admin</a>
                 </div>
             @endif
         </div>

         <!-- SidebarSearch Form -->
         {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 @if (Auth::user()->level == 5 || Auth::user()->level == 3 || Auth::user()->level == 4)
                 @else
                     <li class="nav-header">Beranda</li>
                     <li class="nav-item">
                         <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">

                             <i class="nav-icon fas fa-tachometer-alt fa-fw"></i>
                             {{-- <i class="nav-icon fas fa-user fa-fw"></i> --}}
                             <p>
                                 Dashboard
                             </p>
                         </a>
                     </li>
                 @endif
                 @unless(request()->is('lkps/*') || request()->is('led/*') || request()->is('matriks/*'))
                     @if (Auth::user()->level == 5)
                         @include('layouts.nav.rev_nav')
                     @elseif (Auth::user()->level == 4)
                         @include('layouts.nav.mhs_nav')
                     @elseif (Auth::user()->level == 3)
                         @include('layouts.nav.dosen_nav')
                     @elseif (Auth::user()->level == 2)
                         @include('layouts.nav.prodi_nav')
                     @elseif (Auth::user()->level == 1)
                         @include('layouts.nav.admin_nav')
                     @endif
                 @endunless
                 @if (request()->is('matriks/prodi'))
                     @include('layouts.nav.rev_nav')
                 @endif

                 @if (request()->is('lkps/*'))
                     @include('layouts.nav.lkps')
                 @endif
                 @if (request()->is('led/*'))
                     @include('layouts.nav.led')
                 @endif
                 @if (request()->is('matriks/view*'))
                     @include('layouts.nav.matriks')
                 @endif

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

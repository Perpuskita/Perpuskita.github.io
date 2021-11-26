<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perpusnesia</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/select2.css')}}">
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
  @section('css')

  @show
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('book.ico')}}" />

  <style>
    .navbar.default-layout{
      font-family: "Poppins", sans-serif;
      background: linear-gradient(120deg, #e21c34, #500b28);
      transition: background 0.25s ease;
      -webkit-transition: background 0.25s ease;
      -moz-transition: background 0.25s ease;
      -ms-transition: background 0.25s ease;
    }

    .card{
      border: 0;
      border-radius: 15px;
      background: #fff;
    }

    .sidebar {
      min-height: calc(100vh- 63px);
      background: #1b1e23;
      font-family: "Poppins", sans-serif;
      padding: 0;
      width: 255px;
      z-index: 11;
      transition: width 0.25s ease, background 0.25s ease;
      -webkit-transition: width 0.25s ease, background 0.25s ease;
      -moz-transition: width 0.25s ease, background 0.25s ease;
      -ms-transition: width 0.25s ease, background 0.25s ease;
    }

    .navbar.default-layout .navbar-brand-wrapper {
      transition: width 0.25s ease, background 0.25s ease;
      -webkit-transition: width 0.25s ease, background 0.25s ease;
      -moz-transition: width 0.25s ease, background 0.25s ease;
      -ms-transition: width 0.25s ease, background 0.25s ease;
      background: #1b1e23;
      width: 255px;
      height: 63px;
    }

    .content-wrapper {
      background: #ebebeb;
      padding: 1.5rem 1.7rem;
      width: 100%;
      -webkit-flex-grow: 1;
      flex-grow: 1;
    }

    .sidebar .nav .nav-item.active > .nav-link {
      color: #ce1127;
    }

    .sidebar .nav .nav-item .nav-link[aria-expanded="true"] {
      background: #ce1127;
      color: #fff;
    }

    .sidebar .nav .nav-item .collapse.show, .sidebar .nav .nav-item .collapsing {
      background: #ce1127;
      color: #fff;
    }

    .sidebar .nav.sub-menu .nav-item .nav-link {
      color: #fff;
      padding: 0.75rem 1rem;
      font-size: 12px;
      line-height: 1;
      height: auto;
    }

    .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link {
      background: #ce1127;
      color: #fff;
    }

    .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-profile) > .nav-link i {
      color: inherit;
    }
    
    .sidebar .nav .nav-item .nav-link {
      align-items: center;
      display: flex;
      padding: 16px 35px;
      white-space: nowrap;
      height: 52px;
      color: #fff;
    }

    .text-info {
      color: #0066ff!important;
    }

    .text-success {
      color: #00ce68!important;
    }

    .text-warning {
      color: #ff9900 !important;
    }

    .text-danger {
      color: #ce1127 !important;
    }

    .footer {
      background: #ebebeb;
      padding: 20px 1rem;
      transition: all 0.25s ease;
      -moz-transition: all 0.25s ease;
      -webkit-transition: all 0.25s ease;
      -ms-transition: all 0.25s ease;
      border-top: 1px solid #f2f2f2;
      font-size: calc(13px - 0.05rem);
      font-family: "Poppins", sans-serif;
    }

    .sidebar .nav.sub-menu .nav-item .nav-link.active {
      color: #1b1e23;
      background: transparent;
    }

    .sidebar .nav.sub-menu .nav-item .nav-link:hover {
      color: #1b1e23;
      background: transparent;
    }

    .footer a {
      color: #1b1e23;
      font-size: inherit;
    }

    .text-muted, .preview-list .preview-item .preview-item-content p .content-category {
      color: #676767 !important;
    }

    .sidebar .nav .nav-item .nav-link .menu-icon {
      margin-right: 1.25rem;
      width: 16px;
      line-height: 1;
      font-size: 18px;
      color: #fff;
    }

    .sidebar .nav .nav-item.active > .nav-link {
      background-color: #ce1127;
      color: #fff;
    }
  </style>

</head>
<body>
    <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html" style="color: #fffff">
          PERPUSNESIA
        </a>
           <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
          <i class="fa fa-align-justify" style="color: #fff;"></i>
        </button>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
         
          <li class="nav-item dropdown d-xl-inline-block">
          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{Auth::user()->name}} !</span>
                @if(Auth::user()->gambar == '')
                  <img class="img-xs rounded-circle"  src="{{asset('images/user/default.png')}}" alt="profile image">
                @else
                <img class="img-xs rounded-circle"  src="{{asset('images/user/'.Auth::user()->gambar)}}" alt="profile image">
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                 
                </div>
              </a>
              <a class="dropdown-item" style="margin-top: 20px;" href="{{route('user.edit', Auth::user()->id)}}">
               Edit Profile
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                 Sign Out

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
              </a>
            </div>
          </li>
        </ul>
     
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      @section('sidebar')
          @include('layouts.sidebar',['user' => Auth::User()])
      @show
      </nav>
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')

        </div>
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Kelompok 2 PTI A 2020
            <a href="https://gilacoding.com/" target="_blank">Perpusnesia</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/misc.js')}}"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('js/sweetalert2.all.js')}}"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
  @include('sweetalert::alert')
  @section('js')

  @show
</body>

</html>
                         
   
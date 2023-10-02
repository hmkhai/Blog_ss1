<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('frontend/images/logos/favicon.png')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/styles.min.css')}}"/>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{asset('frontend/images/logos/dark-logo.svg')}}" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>

  <!--  Body Wrapper -->
<!-- Sidebar navigation-->
<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">

        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>

        <li class="sidebar-item">
            <a class="sidebar-link" method="post" href="{{URL::to('/admin_layout')}}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
        </li>

      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">UI COMPONENTS</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{URL::to('/form_category')}}" aria-expanded="false">
          <span>
            <i class="ti ti-file-description"></i>
          </span>
          <span class="hide-menu">Forms</span>
        </a>
      </li>
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">AUTH</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
          <span>
            <i class="ti ti-user-plus"></i>
          </span>
          <span class="hide-menu">Register</span>
        </a>
      </li>
    </ul>
  </nav>

  @yield('admin_content')


  <script src="{{asset('frontend/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('frontend/js/app.min.js')}}"></script>
  <script src="{{asset('frontend/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('frontend/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('frontend/js/dashboard.js')}}"></script>
</body>

</html>

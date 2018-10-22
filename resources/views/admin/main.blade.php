<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  @include('admin.layout.head')
</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
      @include('admin.layout.topnav')
  </nav>

  <!-- SideBar (menu) -->
  <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
      @include('admin.layout.sidebar')
  </div>

  <!-- Content -->
  <div class="app-content content">
    <br>
      @yield('content')
  </div>

  <!--  MAIN FOOTER -->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      @include('admin.layout.footer')
  </footer>


  @include('admin.layout.scripts')

</body>
</html>
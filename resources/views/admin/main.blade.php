<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    @include('admin.layout.head')
    @yield('js')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  </head>
  
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
    
    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
      @include('admin.layout.topnav')
    </nav>
    
    <!-- SideBar (menu) -->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
      @include('admin.layout.sidebar')
    </div>
    
    <!-- Content -->
    <div class="app-content content">
      <br>
      <div class="container-fluid">   
          @yield('content')
          <div class="row no-gutters" >
            <div class="col-5">@yield('section_order_cart')</div>
            <div class="col-5">@yield('section_menu')</div>
            <div class="col-2">@yield('section_table_palette')</div>
          </div>
          @yield('modal')
      </div>
    </div>

    <div id="test" class="col-12">
      Testing Perpose
      <div class="mini_win">
      </div>

    </div>
    
    <!--  MAIN FOOTER -->
    {{-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      @include('admin.layout.footer')
    </footer> --}}
    
    {{--  Js_script_optional ( Each-Page )  --}}
    
    @include('admin.layout.scripts')
    @yield('js_script')
    @yield('js_bottom')

    <script>
    </script>
    
 </body>

</html>
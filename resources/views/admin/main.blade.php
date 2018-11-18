<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    @include('admin.layout.head')
    @yield('js')
  </head>
  
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">
    
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
      <div class="container-fluid">   
          @yield('content')
          <div class="row no-gutters" >
            <div class="col-5">@yield('order_items')</div>
            <div class="col-5">@yield('item_selecter')</div>
            <div class="col-2">@yield('table_select_palette')</div>
          </div>
          @yield('modal')
      </div>

      {!! Session::get('import_done', '' ) !!}
      
    </div>
    
    <!--  MAIN FOOTER -->
    {{-- <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      @include('admin.layout.footer')
    </footer> --}}
    
    {{--  Js_script_optional ( Each-Page )  --}}
    @yield('js_script')
    @include('admin.layout.scripts')

  </body>
</html>
<div class="main-menu-content">

  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    
  {{-- <li class="nav-item has-sub"><a href=""><i class="la la-home">☺</i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
    <ul class="menu-content" style="">
      <li class="{{ Request::is('importExport') ? 'active' : '' }}"><a class="menu-item" href="{{URL::to('/importExport')}}" data-i18n="nav.dash.sales">Import/Export</a> </li>
    </ul>
  </li> --}}

  {{-- 
  <li class="nav-item has-sub"><a href=""><i class="la la-download">☺</i><span class="menu-title" data-i18n="nav.footers.main"> Opration </span></a>
    <ul class="menu-content" style="">

      <li class="nav-item">

          <a href="{{ URL::to('cat') }}"><i class="la la-repeat">♛</i><span class="menu-title" data-i18n="nav.form_repeater.main">Categories</span></a> 

          <a href="{{ URL::to('companies') }}"><i class="la la-repeat">♛</i><span class="menu-title" data-i18n="nav.form_repeater.main">Companies</span></a> 

      </li>

    </ul>
  </li> --}}


<br>

<li class="{{ Request::is('pos') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('pos/')}}" data-i18n="nav.dash.ecommerce">Sales POS </a></li>


<li class="nav-item {{ Request::is('cook') ? 'active' : '' }}"><a href="/cook"><span class="menu-title" data-i18n="nav.form_repeater.main"> Open Orders</span></a> </li>



  <li class="nav-item has-sub"><a href=""><i class="la "></i><span class="menu-title" data-i18n="nav.footers.main">Data Opration</span></a>

    <ul class="menu-content" style="">
      
        <li class="{{ Request::is('Category') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('Category/')}}" data-i18n="nav.dash.ecommerce">Category</a></li>

        <li class="{{ Request::is('SubCategory') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('SubCategory/')}}" data-i18n="nav.dash.ecommerce">SubCategory</a></li>
        
        <li class="{{ Request::is('Item') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('Item/')}}" data-i18n="nav.dash.ecommerce">Item</a></li>

        <li class="{{ Request::is('Table') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('Table/')}}" data-i18n="nav.dash.ecommerce">Table</a></li>


    </ul>
  </li>



  <li class="nav-item"><a href="#"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Reprot 3</span></a> </li>



  <li class="nav-item has-sub"><a href=""><i class="la la-download"></i><span class="menu-title" data-i18n="nav.footers.main"> Deployment </span></a>
    <ul class="menu-content" style="">
      <li class="nav-item"><a href="{{ URL::to('import_table') }}"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">
      ImportData</span></a> </li>

      <li class="nav-item"><a href="{{ URL::to('drop_database/truncate') }}"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">
      TruncateTables</span></a> </li>

      <li class="nav-item"><a href="{{ URL::to('drop_database') }}"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">
      DropTables</span></a> </li>

    </ul>
  </li>

</ul>
</div>
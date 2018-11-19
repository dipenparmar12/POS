<div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    
    <li class="nav-item has-sub"><a href=""><i class="la la-home">☺</i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a>
    <ul class="menu-content" style="">
      <li class="{{ Request::is('pos/table') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('pos/table')}}" data-i18n="nav.dash.crypto">Tables</a></li>
      <li class="{{ Request::is('pos') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('pos/')}}" data-i18n="nav.dash.ecommerce">Sales</a></li>
      <li class=""><a class="menu-item" href="test/test" data-i18n="nav.dash.sales">Test/test()</a></li>
      <li class="{{ Request::is('importExport') ? 'active' : '' }}"><a class="menu-item" href="{{URL::to('/importExport')}}" data-i18n="nav.dash.sales">Import/Export</a> </li>
      <li class=""><a class="menu-item" href="{{URL::to('/crud')}}" data-i18n="nav.dash.sales">Edit Data</a> </li>
    </ul>
  </li>
  <li class="nav-item has-sub"><a href="i class="la la-download">♀</i><span class="menu-title" data-i18n="nav.footers.main">CRUD</span></a>
  <ul class="menu-content" style="">
      <li class="{{ Request::is('Category') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('Category/')}}" data-i18n="nav.dash.ecommerce">Category</a></li>

      <li class="{{ Request::is('SubCategory') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('SubCategory/')}}" data-i18n="nav.dash.ecommerce">SubCategory</a></li>
      
      <li class="{{ Request::is('Table') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('Table/')}}" data-i18n="nav.dash.ecommerce">Table</a></li>
  </ul>
</li>
<li class="nav-item"><a href="{{ URL::to('import_table') }}"><i class="la la-repeat">♛</i><span class="menu-title" data-i18n="nav.form_repeater.main">ImportData</span></a> </li>
<li class="nav-item"><a href="#"><i class="la la-repeat">♫</i><span class="menu-title" data-i18n="nav.form_repeater.main">Link 2</span></a> </li>
</ul>
</div>
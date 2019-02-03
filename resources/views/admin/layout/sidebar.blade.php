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


<li class=""><a class="menu-item" data-i18n="nav.dash.ecommerce"></a></li>

<li class="{{ Request::is('pos') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('pos/')}}" data-i18n="nav.dash.ecommerce">Sales POS </a></li>



  <li class="nav-item has-sub"><a href=""><i class="la la-download">♀</i><span class="menu-title" data-i18n="nav.footers.main">CRUD</span></a>

    <ul class="menu-content" style="">
      
        <li class="{{ Request::is('category') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('category/')}}" data-i18n="nav.dash.ecommerce">Category</a></li>

        <li class="{{ Request::is('subcategory') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('subcategory/')}}" data-i18n="nav.dash.ecommerce">SubCategory</a></li>
        
        <li class="{{ Request::is('item') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('item/')}}" data-i18n="nav.dash.ecommerce">Item</a></li>

        <li class="{{ Request::is('table') ? 'active' : '' }}"><a class="menu-item" href="{{ URL::to('table/')}}" data-i18n="nav.dash.ecommerce">Table</a></li>


    </ul>
  </li>



  <li class="nav-item"><a href="#"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Reprot 1</span></a> </li>

  <li class="nav-item"><a href="#"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Reprot 3</span></a> </li>

  <li class="nav-item"><a href="#"><i class="la la-repeat"></i><span class="menu-title" data-i18n="nav.form_repeater.main">Reprot 4</span></a> </li>



  <li class="nav-item has-sub"><a href=""><i class="la la-download">☺</i><span class="menu-title" data-i18n="nav.footers.main"> Deployment </span></a>
    <ul class="menu-content" style="">
      <li class="nav-item"><a href="{{ URL::to('import_table') }}"><i class="la la-repeat">♛</i><span class="menu-title" data-i18n="nav.form_repeater.main">
      ImportData</span></a> </li>

      <li class="nav-item"><a href="{{ URL::to('drop_database/truncate') }}"><i class="la la-repeat">♛</i><span class="menu-title" data-i18n="nav.form_repeater.main">
      TruncateTables</span></a> </li>

      <li class="nav-item"><a href="{{ URL::to('drop_database') }}"><i class="la la-repeat">♛</i><span class="menu-title" data-i18n="nav.form_repeater.main">
      DropTables</span></a> </li>

    </ul>
  </li>


  <li class="nav-item"><a href="#"><i class="la la-repeat">♫</i><span class="menu-title" data-i18n="nav.form_repeater.main">Link 2</span></a> </li>

</ul>
</div>
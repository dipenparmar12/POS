<div class="row">
  <div class="col">
    <div class="card" style="">
      <div class="card-header">
        
        {{-- Card Opration Add,Max. Minimize, Refresh --}}
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li> <a href="#" id="Category_modal_btn" data-toggle="modal" data-target="#{{ $title }}"><div class="badge badge-success">+Add</div></a> </li>
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload" id="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
          </ul>
        </div>

        <h4 class="card-title"> {{ $title }}</h4>
        <div class="heading-elements">
          
        </div>
      </div>
      <div class="card-content">
      
      {{-- Card_Body Content --}}
      <div id="new-orders" class="media-list position-relative ps-container ps-theme-default" data-ps-id="418037d8-3206-2fbc-6f87-6ba3632e60cf">
          {{ $slot }}
      </div>

      </div>
    </div>
  </div>
</div>
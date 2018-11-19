<div class="row">
  <div class="col">
    <div class="card" style="">
      <div class="card-header">
        <h4 class="card-title"> {{ $title }}</h4>
        <div class="heading-elements">
          <a href="" class="btn btn-sm btn-blue" data-toggle="modal" data-target="#add_item_modal">+Add</a>
        </div>
      </div>
      <div class="card-content">
        <div id="new-orders" class="media-list position-relative ps-container ps-theme-default" data-ps-id="418037d8-3206-2fbc-6f87-6ba3632e60cf">

            {{ $slot }}
          
          <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
      </div>
    </div>
  </div>
</div>
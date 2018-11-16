{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
@section('js')

@endsection
<script>

$(document).ready(function () {

  var sub_cat = $('a[data-value="sub_category"]');
  
  sub_cat.on('click',function(){
    console.log(this);
  });
    
  $('#add_item_modal').modal('show');

});
</script>

<div class="card-content">
  <div class="card-body">
    <ul class="nav nav-tabs nav-underline">
      @foreach ($categories as $category)
      <li class="nav-item" id="{{$category->nick_name}}">
        <a class="nav-link dropdown-toggle" id="tab_{{$category->nick_name}}" data-value='{{$category->name}}' data-toggle="dropdown" href="#{{$category->name}}" > {{$category->nick_name}}</a>
        <div class="dropdown " id="drop_{{$category->nick_name}}">
          <div class="dropdown-menu">
            
            @forelse ($sub_categories as $sub_category)
            @if ($sub_category->category_id == $category->id)
            <a class="dropdown-item" data-value="sub_category" id="sub_category_id_{{$sub_category->category_id}}" > {{$sub_category->name}}_cat </a>
            @endif
            @empty
            <p class="dropdown-item"> Add Item </p>
            @endforelse
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Edit</a>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
    <br>
    <div class="row">
      <div class="col">
        <div class="card" style="">
          <div class="card-header">
            <h4 class="card-title">Item</h4>
            <div class="heading-elements">
              <a href="" class="btn btn-sm btn-blue" data-toggle="modal" data-target="#add_item_modal">+Add</a>
            </div>
          </div>
          <div class="card-content">
            <div id="new-orders" class="media-list position-relative ps-container ps-theme-default" data-ps-id="418037d8-3206-2fbc-6f87-6ba3632e60cf">
              <div class="table-responsive">
                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                  <thead>
                    <tr>
                      <th class="border-top-0">#</th>
                      <th class="border-top-0">Item</th>
                      <th class="border-top-0">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($items as $item)
                    <tr>
                      <td class="text-truncate"> {{$loop->iteration}} </td>
                      <td class="text-truncate p-1"> {{$item->name}} </td>
                      <td class="text-truncate"> {{$item->price}} </td>
                    </tr>
                    @if ($loop->index == 15 ) @php break; @endphp @endif
                    @empty
                    <td>No Data </td>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
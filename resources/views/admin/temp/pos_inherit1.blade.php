@extends('admin.pos_page')
@section('title',"Sale Point of Sale Index")
@section('content')
<div class="row">
  {{-- SubCategory Selection Menu --}}
  <div class="col-5">
    <div class="card-content">
      <div class="card-body">
        <ul class="nav nav-tabs nav-underline ">
          <li class="nav-item">
            <a class="nav-link " id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Active Table 13 </a>
          </li>
        </ul>
        
        {{-- <div class="tab-content px-1 pt-1"> --}}
          <div class="tab-content px-0 pt-0">
            
            @foreach ($category as $sub_category)
            <div class="tab-pane" id="{{$sub_category->name}}" aria-labelledby="base-market">
              <div class="row">
                <h3> {{$sub_category->id." ".$sub_category->name}} </h3>
              </div>
            </div>
            @endforeach
            
          </div>
          
          
        </div>
      </div>
    </div>
    {{-- Main Category Selection ( South, Panjabi, Chinise Etc ) --}}
    <div class="col-5">
      <div class="card-content">
        <div class="card-body ">
          
          {{-- <p>I am Card_body in main Category Selection Menu </p> --}}
          <ul class="nav nav-tabs nav-underline ">
            @foreach ($category as $sub_category)
            <li class="nav-item">
              <a class="nav-link " id="{{$sub_category->name}}" data-toggle="tab" aria-controls="{{$sub_category->name}}" href="#{{$sub_category->name}}" aria-expanded="true"> {{$sub_category->nick_name}} </a>
            </li>
            @endforeach
          </ul>
          
          <div class="row">
            <hr>
            {{-- <div class="col-6">#temp</div>
            <div class="col-6">#temp</div> --}}
            <div class="col">
              <div class="tab-content px-0 pt-0">
                <div id="recent-sales" class="">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title"> Active Table 14 </h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">
                          <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="invoice-summary.html" target="_blank">View all</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-content mt-1">
                      <div class="table-responsive">
                        <table id="recent-orders" class="table table-hover table-xl mb-0">
                          <thead>
                            <tr>
                              <th class="border-top-0">#</th>
                              <th class="border-top-0">Item</th>
                              <th class="border-top-0">Quantity</th>
                              <th class="border-top-0">Price</th>
                              <th class="border-top-0">Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-truncate">1</td>
                              <td class="text-truncate">Masala Dhosa</td>
                              <td class="text-truncate">$1190.00</td>
                              <td class="text-truncate p-1">
                                <ul class="list-unstyled users-list m-0">
                                  
                                  <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                    -
                                  </li>
                                  <li class="avatar avatar-sm">
                                    <span class="badge badge-info">+5 more</span>
                                  </li>
                                </ul>
                              </td>
                              <td>
                                <button type="button" class="btn btn-sm btn-outline-success round">Tablet</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                
                @foreach ($category as $sub_category)
                <div class="tab-pane" id="{{$sub_category->name}}" aria-labelledby="base-market">
                  <div class="row">
                    <h3> {{$sub_category->id." ".$sub_category->name}} </h3>
                  </div>
                </div>
                @endforeach
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    {{-- Table Selection Tool Palatte --}}
    <div class="col-2">
    </div>
  </div>
  @endsection
  
  
  <!-- SideBar (menu) SubCategory Selection Menu  -->
  @section('category_list')
  <h2>Cat</h2>
  @endsection
  
  <!-- Main Category Selection ( South, Panjabi, Chinise Etc ) -->
  @section('active_table_item_list')
  <h2>orderList</h2>
  @endsection
  <!-- Table Selection Tool Palatte -->
  @section('table_selection_palette')
  <div class="card-content">
    <div class="card-body">
      <ul class="nav nav-tabs nav-underline ">
        <li class="nav-item">
          <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Table </a>
        </li>
        <div class="col-12">
          <hr>
          <div class="row ">
            @for ($i = 1; $i < 21 ; $i++)
            <div class="col-6 line-height-2">
              @if( ($i%3) == 0)
              <p class="btn btn-danger btn-sm"> T-{{$i}}</p>
              @else
              <p class="btn btn-success btn-sm"> T-{{$i}}</p>
              @endif
              @if ($i==7)
              <p class="btn bg-amber btn-sm"> T-{{$i}}</p>
              @endif
            </div>
            @endfor
          </div>
        </div>
      </ul>
    </div>
  </div>
  @endsection
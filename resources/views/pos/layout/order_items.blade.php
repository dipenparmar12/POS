{{-- order_list_table Selection Menu --}}
<section>
  <div class="card-content ">
    <div class="card-body ">
      <ul class="nav nav-tabs nav-underline ">
        <li class="nav-item">
          <a class="nav-link " id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true">
            Active Table
            @if (Session::has('active_table'))
            {{ Session::get('active_table') }}
            @endif
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="col">
    <div class="tab-content px-0 pt-0">
      <div id="recent-sales" class="">
        <div class="card">
          <div class="card-header">
            {{-- <h4 class="card-title">
            Active Table
            @if(Session::has('active_table'))
            {{ Session::get('active_table') }}
            @endif
            </h4> --}}
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          </div>
          
          <div class="card-content mt-1">
            <div class="table-responsive">
              
              <table id="recent-orders" class="table table-hover">
                <thead>
                  <tr>
                    
                    <th class="border-top-0 m-0 " style="width:40% " >Item</th>
                    <th class="border-top-0 m-0 w-50" style="width:25% " >Qty</th>
                    <th class="border-top-0 m-0 " style="width:10%" >Price</th>
                    <th class="border-top-0 m-0 " style="width:14% " >Options</th>
                  </tr>
                </thead>
                
                <tbody>

                  {{-- {{ dd($ordered_items) }} --}}
                  
                  @if ( count(@$ordered_items) > 0 )
                    
                    @forelse($ordered_items as $ordered_item)
                      <tr>
                        <td class="text-truncate">{{ $ordered_item->name }} </td>
                        <td class="text-truncate"><input type="number" class="w-75" value="{{ $ordered_item->price }}" ></td>
                        <td class="text-truncate"> <span>100.0 </span></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-blue round"> Edt </button>
                        </td>
                      </tr>
                    @empty
                      <p> Add items in Order Table </p>
                    @endforelse

                  @endif

                </tbody>
              </table>
              
              <!-- item_table_btn -->
              <div class="heading-elements ">
                <ul class="list-inline ">
                  <li><a class="btn box-shadow-1 round btn-outline-success" id="check_out"" >CheckOut</a></li>
                  <li><a class="btn box-shadow-1 round btn-outline-danger   " href=" {{ URL::to('pos/index') }}" >Process</a></li>
                  <li><a class="btn box-shadow-1 round btn-outline-blue-grey  " href=" {{ URL::to('pos/') }}"  >Abort</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
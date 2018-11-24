{{-- order_list_table Selection Menu --}}
<section>
  <div class="card-content ">
    <div class="card-body ">
      <ul class="nav nav-tabs nav-underline ">
        <li class="nav-item">
          <a class="nav-link " id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true">
            Active Table
            {{ Session::get('active_table') }}
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
            <h4 class="card-title">
                Active Table {{ Session::get('active_table') }}
                <div class="heading-elements">
                  <div class="badge border-left-primary badge-striped"> InvoiceNo-2018-{{Session::get('order_id') }}</div>
                </div>
            </h4>

            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          </div>
          
          <div class="card-content mt-1">
            <div class="table-responsive">
              
              <table id="recent-orders" class="table table-hover">
                <thead>
                  <tr>
                    <th class="border-top-0 m-0 " style="" >Item</th>
                    <th class="border-top-0 m-0 w-50" style="" >Qty </th>
                    <th class="border-top-0 m-0 w-50" style="width: 10%" > Dlvrd </th>
                    <th class="border-top-0 m-0 " style="" >Price</th>
                    <th class="border-top-0 m-0 " style="" >Options</th>
                  </tr>
                </thead>
                
                <tbody>

                  @if ( count(@$order) > 0 )

                    @forelse ( ($order->with('item'))->get() as $ordered_item)
                      {{-- {{ ($ordered_item)->item->name }} --}}
                      <tr>
                        <td class="text-truncate">{{ $ordered_item->item->name }} </td>
                        <td class="text-truncate">
                          {{-- <input type="number" class="w-75" value="{{$loop->iteration}}"> --}}
                          {{$loop->iteration}} 
                        </td>
                        <td>
                          @if ( ( $loop->index )/2 == 0 )
                            <button type="button" class="btn btn-sm btn-outline-success round"> &check; </button>
                          @else
                            <button type="button" class="btn btn-sm btn-outline-light round"> &check; </button>
                          @endif
                        </td>
                        <td class="text-truncate"> <span> {{ $ordered_item->item->price }} </span></td>
                        <td>
                          <button type="button" class="btn btn-sm btn-outline-danger round "> &#10005; </button>
                        </td>
                      </tr>

                    @empty
                        @php $order=null @endphp
                    @endforelse
                    
                  @endif

                </tbody>
              </table>
              
              <!-- item_table_btn -->
              <div class="heading-elements ">
                <ul class="list-inline ">

                  @if ( $order )
                    <li><a class="btn box-shadow-1 round btn-outline-success" id="check_out"" >CheckOut</a></li>
                    <li><a class="btn box-shadow-1 round btn-outline-danger" href=" {{ URL::to('pos/index') }}" >Process</a></li>
                  @else
                    <h1 class="m-2"> Cart is <div class="badge badge-warning">Empty</div></h1>
                  @endif
                  
                    <li><a class="btn box-shadow-1 round btn-outline-blue-grey" id="abort_order" >Abort</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
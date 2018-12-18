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

<script>
    $('#check_out').on('click', function(event) {
      alert('Hello ');
      document.form1.target = "myActionWin";
      window.open("{{ URL::to('pos/check_out') }}","myActionWin","width=350,height=350,toolbar=0");
    });
</script>  
  
   
  <div class="col">
    <div class="tab-content px-0 pt-0">
      <div id="recent-sales" class="">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">
                @if (Session::get('active_table'))
                  Active Table {{ Session::get('active_table') }} 
                  <a href="{{ URL::to('Table') }}" class="badge badge-success" target="_blank">+Remark</a>
                @endif

                <div class="heading-elements">
                  <div class="badge border-left-primary badge-striped"> 
                    @if (Session::get('active_table'))
                      InvoiceNo-2018-{{Session::get('order_id') }}
                    @endif
                  </div>
                </div>
            </h4>

            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          </div>
          
          <div class="card-content mt-1">
            <div class="table-responsive">
              
              <table id="recent-orders" class="table table-hover">
                <thead>
                  <tr>
                    <th class="border-top-0 m-0 " style="" ># Item</th>

                    {{-- <th class="border-top-0 m-0 w-50" style="width: 10%" > Dlvrd </th> --}}

                    <th class="border-top-0 m-0 w-50" style="" >Qty </th>
                    <th class="border-top-0 m-0 " style="" >Price</th>
                    <th class="border-top-0 m-0 " style="" >Amt</th>
                    <th class="border-top-0 m-0 " style="" >Options</th>
                  </tr>
                </thead>
                
                <tbody>

                  {{-- {{ dd($order) }} --}}

                  @if ( @$order )
                    
                    @php $total = 0; @endphp

                    @forelse ( ($order->with('item'))->get() as $ordered_item)
                      <tr>
                        {{-- #Name --}}
                        <td class="text-truncate">{{ $loop->iteration.'. '.$ordered_item->item->name }}</td>

                        {{-- #Dlvrd --}}
                        {{-- <td>
                          @if ( ( $loop->index )/2 == 0 )
                            <button type="button" class="btn btn-sm btn-outline-success round"> &check; </button>
                          @else
                            <button type="button" class="btn btn-sm btn-outline-light round"> &check; </button>
                          @endif
                        </td> --}}

                        {{-- #Qty --}}
                        <td class="text-truncate">{{$ordered_item->qty }}</td>

                        {{-- #price  --}}
                        <td class="text-truncate">{{$ordered_item->item->price }}</td>

                        {{-- #Amount  --}}
                        <td class="text-truncate">{{ $total += ($ordered_item->qty * $ordered_item->item->price) }}</td>

                        {{-- #Remove  --}}
                        <td><button type="button" class="btn btn-sm btn-outline-danger round "> &#10005; </button> </td>
                      </tr>

                    @empty
                        @php $order=null @endphp
                    @endforelse

                        {{-- Last Row, Order_detials Table --}}
                        <td></td>
                        <td></td>
                        <td style=" font-weight: 800" >Total</td>
                        <td style=" font-weight: 800" >{{ $total.'/-'}}</td>
                        <td></td>

                  @endif
                </tbody>
              </table>
              
              <!-- item_table_btn -->
              <div class="heading-elements ">
                <ul class="list-inline ">

                  @if (@$order)
                    <li><a class="btn box-shadow-1 round btn-outline-success" id="check_out" >CheckOut</a></li>
                    <li><a class="btn box-shadow-1 round btn-outline-danger" id="process" href="#"  >Process</a></li>
                    <li><a class="btn box-shadow-1 round btn-outline-blue-grey" id="abort_order" >Abort</a></li>
                  @else
                      @if (Session::get('active_table'))
                        <h1 class="m-2"> Cart is <div class="badge badge-warning">Empty</div></h1>
                        <li><a class="btn box-shadow-1 round btn-outline-blue-grey" id="abort_order" >Abort</a></li>
                      @endif
                  @endif
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


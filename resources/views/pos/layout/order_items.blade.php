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
                    
                    <th class="border-top-0 m-0 w-25" >Item</th>
                    <th class="border-top-0 m-0 ">Price</th>
                    <th class="border-top-0 m-0">Qty</th>
                    <th class="border-top-0 m-0">Amt</th>
                  </tr>
                </thead>
                
                <tbody>
                  @for ($i = 0; $i < 7; $i++)
                  <tr>
                    
                    <td class="text-truncate">{{ $i }} Masala Dhosa </td>
                    <td class="text-truncate"> 270.00 </td>
                    <td class="text-truncate">+4</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-outline-blue round"> Edt </button>
                    </td>
                  </tr>
                  @endfor
                </tbody>
              </table>
              
              <!-- item_table_btn -->
              <div class="heading-elements ">
                <ul class="list-inline ">
                  <li><a class=" btn box-shadow-1 round btn-outline-success  " href=" {{ URL::to('pos/table') }}" target="_blank">CheckOut</a></li>
                  <li><a class=" btn box-shadow-1 round btn-outline-danger   " href=" {{ URL::to('pos/index') }}" target="_blank">Process</a></li>
                  <li><a class=" btn box-shadow-1 round btn-outline-blue-grey  " href=" {{ URL::to('pos/') }}" target="_blank">Clear</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
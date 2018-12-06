<style>

.check_out_bill{
  /*background-color: green;*/
}

th{
  padding: 8px;
}

tr {  
  background-color: #f2f2f2;
  text-align:left;
}
tr td{
  text-align:left;
  padding: 7px;
  font-size: 15px;
}

</style>

<div class="check_out_bill">

  <h1>{{config('app.name','Restaurant_POS')}} </h1>
  
  <h4 style="float:both">
    <span > Table {{ Session::get('active_table') }},</span>
    <span > InvoiceNo-2018-{{Session::get('order_id') }} </span>
  </h4>

  <table id="recent-orders" class="table table-hover" >
    <thead>
      <tr>
        <th class="border-top-0 m-0 " style="" ># Item</th>
        <th class="border-top-0 m-0 w-50" style="" >Qty </th>
        <th class="border-top-0 m-0 " style="" >Price</th>
        <th class="border-top-0 m-0 " style="" >Amt</th>
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

            {{-- #Qty --}}
            <td class="text-truncate">{{$ordered_item->qty }}</td>

            {{-- #price  --}}
            <td class="text-truncate">{{$ordered_item->item->price }}</td>

            {{-- #Amount  --}}
            <td class="text-truncate">{{ $total += ($ordered_item->qty * $ordered_item->item->price) }}</td>
          </tr>

        @empty
            @php $order=null @endphp
        @endforelse

            {{-- Last Row, Order_detials Table --}}
            <td></td>
            <td></td>
            <td style=" font-weight: 800" >Total</td>
            <td style=" font-weight: 800" >{{ $total.'/-'}}</td>
         
      @endif
    </tbody>
  </table>
  
  <!-- item_table_btn -->
  <ul class="list-inline ">
    @if ($order)
      <a href="#" onclick="window.print()" id="print_bill" > Print </a>
      <a href="#" id="close_checkout_bill" onclick="window.close()" > Close </a>
    @else
      <h1 class="m-2"> Cart is <div class="badge badge-warning">Empty</div></h1>
    @endif
  </ul>
  
</div>
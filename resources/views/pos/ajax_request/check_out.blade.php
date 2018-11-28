  <h1 >Sagar Dhosa</h1>
  <h4 class="">
      Table {{ Session::get('active_table') }}
      InvoiceNo-2018-{{Session::get('order_id') }}
  </h4>

  <table id="recent-orders" class="table table-hover">
    <thead>
      <tr>
        <th class="border-top-0 m-0 " style="" >Item</th>
        <th class="border-top-0 m-0 w-50" style="" >Qty </th>
        <th class="border-top-0 m-0 " style="" >Price</th>
      </tr>
    </thead>
    
    <tbody>
      @if ( count(@$order) > 0 )
        @forelse ( ($order->with('item'))->get() as $ordered_item)
          {{-- {{ ($ordered_item)->item->name }} --}}
          <tr>
            <td class="text-truncate"> {{ $ordered_item->item->name }} </td>
            <td class="text-truncate"> {{$loop->iteration}} </td> 
            <td class="text-truncate"> {{ $ordered_item->item->price }}</td>
          </tr>
        @empty
            @php $order=null @endphp
        @endforelse
      @endif
    </tbody>
  </table>
  
    <!-- item_table_btn -->
    <ul class="list-inline ">
      @if ($order)
        <a class="btn box-shadow-1 round btn-outline-danger" href="#" onclick="printResult()" id="print_bill" > Print </a>
      @else
        <h1 class="m-2"> Cart is <div class="badge badge-warning">Empty</div></h1>
      @endif
    </ul>

<script>
  function printResult() {
    var DocumentContainer = document.getElementById('list-inline');
    var WindowObject = window.open('google.com', "PrintWindow", "width=650,height=750,top=50,left=100,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
  }
</script>
@section('title',"Pending Orders")
@extends('admin.main')

@section('js')
  @parent
  {{-- Your additional JS Scripts --}}
@endsection


@section('content')

    <div class="card">
    <div class="card-header">
        <h4 class="card-title" style="text-transform:capitalize;"> Open Orders </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload" id="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="card-content mt-1">
                <div class="table-responsive">
                    <div id="db_records">
        <table id="recent-orders" class="table table-hover">
      <thead>
          <tr>
              <th class="border-top-0 m-0"># ItemName</th>
              <th class="border-top-0 m-0"> SubCategory</th>
              <th class="border-top-0 m-0"> Category</th>
              <th class="border-top-0 m-0"> Table Number</th>
              <th class="border-top-0 m-0"> OrderId</th>
              <th class="border-top-0 m-0"> Action</th>
          </tr>
      </thead>
      
      <tbody>

        @forelse (@$openOrders as $order)
        <tr>
            @php
            @endphp

            <td class="text-truncate"> {{ $loop->iteration.'. '.$order->item->name }} </td>
            <td class="text-truncate"> {{ $order->item->subCategory->name}} </td>
            <td class="text-truncate"> {{ $order->item->subCategory->category->name }} </td>
            <td class="text-truncate"> {{ $order->table_id }} </td>
            <td class="text-truncate"> {{ $order->item_id }} </td>
            <td>
                <button type="button" data-edit_btn="{{$order->id}}" class="btn btn-sm btn-outline-blue round"> Delivered/Cooked/Ready/Completed </button>
                <button type="button" id="update_not_available_item" data-update_not_available_item_id="{{$order->id}}" class="btn btn-sm btn-outline-danger round"> N/A </button>
            </td>
        </tr>
        @empty
          <h1>Empty</h1>
        @endforelse

      </tbody>
  </table>
    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
  

$(document).ready(function() {

  user_cook_fucntion = {

    update_not_available_item_id:function(id){

      $.ajax({
        url: '/cook/update_not_available_item_id/'+id,
        type: 'get',
        
        success:function(response){
          $("#update_not_available_item").closest('tr').remove();
          swal("Item Cancled successfully ");
        }          
      });

    }, // get_section_menu_item_table_by_subcateogry_id(SubCategory_id)

  };



  // Abort Current Table/Order ( records deleted )
  $('body').on('click', '#update_not_available_item', function(event) {
    event.preventDefault();

    var order_item_id = $(this).data('update_not_available_item_id');

    console.log(order_item_id);

    // swal("Are you sure, Item not Available. ", {
    //         buttons: ["No", "Yes"],
    //     }).then((value) => {
    //   if (value) {
        user_cook_fucntion.update_not_available_item_id(order_item_id);
    //     alert(order_item_id);
    //   }
    // });

  }); // abort_order Click


}); // # Jquery


</script>


@endsection




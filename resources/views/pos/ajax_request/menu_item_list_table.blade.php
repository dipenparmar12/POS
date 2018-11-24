
<style>
  tr{
    transition: .3s all;
    user-select: none;
  }
  
  tr.item_select_list:first-child{
    /*background-color: gray !important;*/
    /*box-shadow: 2px 7px 29px #bfbfbf; */

    /*transform: translateX(10px) scale(1.1);
    border-left: 7px solid #28d09491;
    box-shadow: 2px 7px 29px #bfbfbf;*/

  }

  tr.item_select_list:hover{
    cursor: pointer;
    transform: translateX(10px) scale(1.07);
    border-left: 9px solid #28d09491;
    box-shadow: 3px 7px 13px -4px #bfbfbf;
  }

  tr.item_select_list:active{
    background-color: #28d09485 !important;
    box-shadow: 2px 7px 29px #bfbfbf !important;
    /*border-left: 20px solid #28d09491;*/
    transform: translateZ(10px) translateX(8px) ;

  }

</style>

<div class="">
  <table id="menu_item_list_table" class="table table-hover table-xl ">
    <thead>
      <tr>
        <th class="border-top-0">#</th>
        <th class="border-top-0">Item</th>
        <th class="border-top-0">Price</th>
      </tr>
    </thead>

    <tbody>
      @forelse ($items as $item)
        <tr class="item_select_list" data-item_id="{{ $item->id }}" data-order_id="{{ Session::get('order_id') }}">
          <td class=""> {{$loop->iteration}} </td>
          <td class="">{{$item->name}}</td>
          <td class=""> {{$item->price}} </td>
        </tr>
      @empty
        <td> Empty </td>
      @endforelse
    </tbody>
  </table>
</div>




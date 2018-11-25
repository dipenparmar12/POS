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

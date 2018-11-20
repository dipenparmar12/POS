
<div class="table-responsive">
  <table id="item_list_table" class="table table-hover table-xl mb-0">
    <thead>
      <tr>
        <th class="border-top-0">#</th>
        <th class="border-top-0">Item</th>
        <th class="border-top-0">Price</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($items as $item)
        <tr>
          <td class="text-truncate"> {{$loop->iteration}} </td>
          <td class="text-truncate p-1"> {{$item->name}} </td>
          <td class="text-truncate"> {{$item->price}} </td>
        </tr>
      @empty
        <td> Empty </td>
      @endforelse
    </tbody>
  </table>
</div>

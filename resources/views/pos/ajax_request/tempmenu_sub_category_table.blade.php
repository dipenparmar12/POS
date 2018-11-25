<div class="">
  <table id="menu_item_list_table" class="table table-hover table-xl ">
    <thead>
      <tr>
        <th class="border-top-0">#</th>
        <th class="border-top-0">Category</th>
        <th class="border-top-0">SubCateogry</th>
      </tr>
    </thead>

    <tbody>
      @forelse ($subCategories as $subCategory)
        <tr class="item_select_list" data-item_id="{{ $subCategory->id }}" data-order_id="{{ Session::get('order_id') }}">
          
          <td class=""> {{$loop->iteration}} </td>
          <td class=""> {{$subCategory->name}} </td>
          <td class="">
             <a class="dropdown-item" data-value="subCategory" data-subCategory_id="{{ $subCategory->id }}" data-subCategory_name="{{ $subCategory->id }}" data-subCategory_id="{{ $subCategory->id }}" id="subCategory_id__{{$subCategory->id}}" > 
              {{$subCategory->nick_name}}  
            </a>
          </td>

        </tr>
      @empty
        <td> Empty </td>
      @endforelse
    </tbody>
  </table>
</div>

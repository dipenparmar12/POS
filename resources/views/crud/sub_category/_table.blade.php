  <table id="recent-orders" class="table table-hover">
      <thead>
          <tr>
              <th class="border-top-0 m-0 "># Name</th>
              <th class="border-top-0 m-0">Nick name</th>
              <th class="border-top-0 m-0 ">Category ID</th>
              <th class="border-top-0 m-0">Action</th>
          </tr>
      </thead>
      
      <tbody>
        @forelse (@$db_records as $category)
          <tr>    
              <td class="text-truncate"> {{ $category->id.' '.$category->name }}</td>
              <td class="text-truncate"> {{ $category->nick_name }} </td>
              <td class="text-truncate"> {{ $category->category_id }} </td>
              <td>
                <button type="button" data-edit_btn="{{$category->id}}" class="btn btn-sm btn-outline-blue round"> Edt </button>
                <button type="button" data-delete_btn="{{$category->id}}" class="btn btn-sm btn-outline-danger round"> Del </button>
                
              </td>
          </tr>
        @empty
          <h1>Empty</h1>
        @endforelse

      </tbody>
  </table>
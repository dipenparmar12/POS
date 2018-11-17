  <table id="recent-orders" class="table table-hover">
      <thead>
          <tr>
              <th class="border-top-0 m-0 "># status</th>
              <th class="border-top-0 m-0">Remark</th>
              <th class="border-top-0 m-0"></th>
          </tr>
      </thead>
      
      <tbody>
        @forelse (@$db_records as $category)
          <tr>    
              <td class="text-truncate"> {{ $category->id.' '.$category->status }}</td>
              <td class="text-truncate"> {{ $category->remark }} </td>
              
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
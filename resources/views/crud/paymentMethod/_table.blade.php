  <table id="recent-orders" class="table table-hover">
      <thead>
          <tr>
              <th class="border-top-0 m-0 ">#</th>
              <th class="border-top-0 m-0 ">Payment Type</th>
          </tr>
      </thead>
      
      <tbody>
        
        @forelse (@$db_records as $record)
          <tr>    
              <td class="text-truncate"> {{ $record->id }}</td>
              <td class="text-truncate"> {{ $record->payment_type }} </td>
              <td>
                <button type="button" data-edit_btn="{{$record->id}}" class="btn btn-sm btn-outline-blue round"> Edt </button>
                <button type="button" data-delete_btn="{{$record->id}}" class="btn btn-sm btn-outline-danger round"> Del </button>
                
              </td>
          </tr>
        @empty
          <h1>Empty</h1>
        @endforelse

      </tbody>
  </table>
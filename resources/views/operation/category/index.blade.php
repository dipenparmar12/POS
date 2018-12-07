@extends('admin.main')

{{-- Index Categories ( Card->table->list ) --}}
@section('content')
  
  {{-- Card With Table ( Records index Lists ) --}}
  @component('operation.card',['title'=>@$title])
    
    <div class="table-responsive">
      <div id="db_records">
          <table id="recent-orders" class="table table-hover">
              <thead>
                  <tr>
                      <th class="border-top-0 m-0 "># Name</th>
                      <th class="border-top-0 m-0">Nick name</th>
                      <th class="border-top-0 m-0">Action</th>
                  </tr>
              </thead>
              <tbody> 
                  <tr>    
                      <td class="text-truncate"> 1 PUNJABI</td>
                      <td class="text-truncate"> Png </td>
                      <td>
                        <button type="button" data-edit_btn="1" class="btn btn-sm btn-outline-blue round"> Edt </button>
                        <button type="button" data-delete_btn="1" class="btn btn-sm btn-outline-danger round"> Del </button>
                      </td>
                  </tr>
                  
                  @forelse($table_data as $row)
                    <tr>    
                        <td class="text-truncate">{{ $row->id.' '.$row->name }}</td>
                        <td class="text-truncate"> {{ $row->nick_name }} </td>
                        <td>
                          <button type="button" data-edit_btn="{{ $row->id }}" class="btn btn-sm btn-outline-blue round"> Edt </button>
                          <button type="button" data-delete_btn="{{ $row->id }}" class="btn btn-sm btn-outline-danger round"> Del </button>
                        </td>
                    </tr>
                  @empty
                    empty
                  @endforelse

              </tbody>
          </table>
      </div>
    </div>
  @endcomponent

  
  @component('operation.modal',['title'=>@$title])
    <form action="">
      
    </form>
  @endcomponent

@endsection {{-- #content --}}
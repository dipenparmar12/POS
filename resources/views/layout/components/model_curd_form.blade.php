  {!! Form::open(['route' => $crud_table.'.store', 'id'=> 'create_'.$crud_table]) !!}
      @csrf
      
      <h4 class="form-section"><i class="la la-eye"></i>Add  {{ $crud_table }}</h4>
      
      <div class="form-body">
        {{ $slot }}
      </div>
    
      <div class="modal-footer">
          <button type="button" class="btn box-shadow-1 round btn-outline-blue-grey grey" data-dismiss="modal">Close</button>
          <button type="button" id="{{ $crud_table }}_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
      </div>

  {!! Form::close() !!}
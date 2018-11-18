  {!! Form::open(['route' => $crud_table.'.store', 'id'=> 'create_'.$crud_table]) !!}
      @csrf
      
      <h4 class="form-section"><i class="la la-eye"></i>Add  {{ $crud_table }}</h4>
      
      <div class="row">
      
        <div class="col-md-6">
          <div class="form-group">
            <label for="id_category_name"> Payment Type </label>
            <input type="text" id="id_category_name" class="form-control border-success" placeholder="Category Name" value="P_Type" name="payment_type">
          </div>
        </div>
      </div>
    
      <div class="modal-footer">
          <button type="button" class="btn box-shadow-1 round btn-outline-blue-grey grey" data-dismiss="modal">Close</button>
          <button type="button" id="{{ $crud_table }}_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
      </div>

  {!! Form::close() !!}
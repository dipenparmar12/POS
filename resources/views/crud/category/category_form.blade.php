  
  {{-- {!! Form::open($form_confi) !!} --}}
  {!! Form::open(['route' => 'category.store', 'id'=> 'create_category']) !!}
      @csrf
      
      <h4 class="form-section"><i class="la la-eye"></i>Add Main Category</h4>
      
      <div class="row">

        {{-- Compnay_id determinded by login  --}}
        <input type="hidden" value="{{ Session::get('company_id') }}" name="company_id">
      
        <input type="hidden" value="create" name="form_mode">

        <div class="col-md-6">
          <div class="form-group">
            <label for="id_category_name"> Category Name </label>
            <input type="text" id="id_category_name" class="form-control border-success" placeholder="Category Name" value="test" name="name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="id_category_nick_name">Nick Name</label>
            <input type="text" id="id_name" class="form-control border-success" placeholder="Nick Name" value="test" name="nick_name">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="location3"> Category Description </label>
            <textarea class="form-control" name="desc" id="id_desc" cols="28" rows="5" placeholder="item Description">I_am_text_area_value="test"</textarea>
          </div>
        </div>
        <div class="col-md-6">
          <label for="location3">Select Category Image:</label>
          <div class="form-group">
            <input type="file" id="userinput3" class="form-control border-primary" name="img">
          </div>
        </div>
      </div>
    
      <div class="modal-footer">
          <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
          <button type="button" id="create_category_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
      </div>

  {!! Form::close() !!}
  {!! Form::open(['route' => Session::get('table').'.store', 'id'=> 'create_'.Session::get('table')]) !!}
      @csrf
      
      <h4 class="form-section"><i class="la la-eye"></i>Add  {{ Session::get('table') }}</h4>
      <div class="form-body">
          <div class="row">
              <div class="col">
                  <div class="form-group">
                      <select class="custom-select form-control" id="category_id" name="status">
                          <option value="hold"> HOlD </option>
                          <option value="empty"> EMPTY </option>
                          
                      </select>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" id="userinput4" class="form-control border-success" placeholder="Name" name="remark">
                  </div>
              </div>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn box-shadow-1 round btn-outline-blue-grey grey" data-dismiss="modal">Close</button>
        <button type="button" id="{{ Session::get('table') }}_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
      </div>

  {!! Form::close() !!}
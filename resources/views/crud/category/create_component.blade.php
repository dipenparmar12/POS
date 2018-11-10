{{-- Modal Component --}}

<div class="col-lg-4 col-md-6 col-sm-12">
    
    <!-- Modal -->
    <div class="modal animated bounceIn text-left " id="create_category_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel46" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    {{-- add_main_category_modal Add Modal --}}

                      {!! Form::open(['action' => 'CategoryController@store']) !!}

                          <h4 class="form-section"><i class="la la-eye"></i>Add Main Category</h4>
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="id_category_name"> Category Name </label>
                                <input type="text" id="id_category_name" class="form-control border-success" placeholder="Category Name" name="name">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="id_category_nick_name">Nick Name</label>
                                <input type="text" id="id_name" class="form-control border-success" placeholder="Nick Name" name="nick_name">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="location3"> Category Description </label>
                                <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="item Description"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="location3">Select Category Image:</label>
                              <div class="form-group">
                                <input type="file" id="userinput3" class="form-control border-primary" name="img">
                              </div>
                            </div>
                          </div>

                      {!! Form::close() !!}

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
                    <button type="button" id="create_modal_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
                </div>
    
            </div>
        </div>
    </div>
</div>

{{-- UPDATE `tables` SET status="empty", order_id=null --}}
@extends('admin.main')

@section('js_script')
  @parent
  @include('script.pos_script') 
@endsection

@section('title'," Point of Sale Index ")


  {{-- Sub_category Selection Menu --}}
    @section('section_order_cart')
     <section id="section_order_items">
  
        {{-- 
          <script src="{{ asset('js_plugins/bootstrap-notify.js') }}"></script>
          <script src="{{ asset('js_plugins/bootstrap-notify_by_tim.js') }}"></script>
          <script src="{{ asset('js_function.js') }}"></script>
          <script> </script> 
        --}}
  
        @include('pos.layout.section_order_cart',['order'=>@$order])
     </section>
    @endsection

  {{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
    @section('section_menu')
      <section id="section_menu">
        @include('pos.layout.section_menu')
      </section>
    @endsection

  {{-- Table_selection Tool Palatte --}}
    @section('section_table_palette')
      <section id="section_table_palette">
        @include('pos.layout.section_table_palette',['tables'=>$tables])
      </section>

@endsection

  

  @section('modal')
    {{-- Item Add Modal --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <!-- Modal -->
        <div class="modal animated bounceIn text-left " id="add_item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel46" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" role="document">

            <div class="modal-content">
              
              <div class="modal-header">
                <h4 class="modal-title">Add Items</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                 <div class="list-group">
                   <li class="list-group-item"><a class="d-block" href="/category">Add Category</a></li>
                   <li class="list-group-item"><a class="d-block" href="/subcategory">Add SubCategory</a></li>
                   <li class="list-group-item"><a class="d-block" href="/item">Add Item</a></li>
                 </div>
              </div>
            </div>
          </div>
        </div>
    </div>



    {{-- add_main_category_modal Add Modal --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <!-- Modal -->
        <div class="modal animated bounceIn text-left " id="add_main_category_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel46" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-body">
                <form>
                  <form class="form">
                    <div class="form-body">
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

                      <div class="modal-footer">
                        <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
                        <button type="button" class="btn box-shadow-1 round btn-outline-success">Save Item</button>
                      </div>                    
                  </form>
                  
                </form>
              </div>
              
            </div>
          </div>
        </div>
    </div>

    {{-- Main Category Add Modal --}}
    <div class="col-lg-4 col-md-6 col-sm-12">
        <!-- Modal -->
        <div class="modal animated bounceIn text-left " id="add_sub_category_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel46" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-body">
                <form>
                  <form class="form">
                    <div class="form-body">
                      <h4 class="form-section"><i class="la la-eye"></i>Add Sub_category</h4>
                      <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <select class="custom-select form-control" id="category_id" name="name">
                                  <option value="">Main category 1</option>
                                  <option value="">Main category 2</option>
                                  <option value="">Main category 4</option>
                                </select>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" id="userinput4" class="form-control border-success" placeholder="Name" name="name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" id="userinput3" class="form-control border-success" placeholder="Nick name" name="nick_name">
                          </div>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="Description"></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label for="location3">Select Sub_category Image:</label>
                            <div class="form-group">
                              <input type="file" id="userinput3" class="form-control border-primary" name="img">
                            </div>
                          </div>    
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
                        <button type="button" class="btn box-shadow-1 round btn-outline-success">Save Sub_category</button>
                      </div>                    
                  </form>
                  
                </form>
              </div>
              
            </div>
          </div>
        </div>
    </div>
  @endsection

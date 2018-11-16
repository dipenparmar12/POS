{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
@section('js')
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
@endsection

<div class="card-content">
  <div class="card-body">
    <ul class="nav nav-tabs nav-underline">
      @foreach ($categories as $category)
      <li class="nav-item" id="{{$category->nick_name}}">
        <a class="nav-link dropdown-toggle" id="tab_{{$category->nick_name}}" data-value='{{$category->name}}' data-toggle="dropdown" href="#{{$category->name}}" > {{$category->nick_name}}</a>
        <div class="dropdown " id="drop_{{$category->nick_name}}">
          <div class="dropdown-menu">
            
              @forelse ($sub_categories as $sub_category)
                @if ($sub_category->category_id == $category->id)
                  <a class="dropdown-item" data-value="sub_category" id="sub_category_id_{{$sub_category->category_id}}" > {{$sub_category->name}}_cat </a>
                @endif
              @empty
                  <p class="dropdown-item"> Add Item </p>
              @endforelse
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Edit</a>

            </div>
        </div>  
      </li>
      @endforeach
    </ul>

    <script>
      $(document).ready(function () {
        var sub_cat = $('a[data-value="sub_category"]');
        sub_cat.on('click',function(){
          console.log(this);
        });

        $('#add_item_modal').modal('show');

        
      });
    </script>
    
    <br>

    <div class="row">
        <div class="col">
            <div class="card" style="">
              <div class="card-header">
                <h4 class="card-title">Item</h4>
                <div class="heading-elements">
                  <a href="" class="btn btn-sm btn-blue" data-toggle="modal" data-target="#add_item_modal">+Add</a>
                </div>
              </div>

              <div class="card-content">
                <div id="new-orders" class="media-list position-relative ps-container ps-theme-default" data-ps-id="418037d8-3206-2fbc-6f87-6ba3632e60cf">
                  <div class="table-responsive">
                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                      <thead>
                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Item</th>
                          <th class="border-top-0">Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($items as $item)
                          <tr>
                            <td class="text-truncate"> {{$loop->iteration}} </td>
                            <td class="text-truncate p-1"> {{$item->name}} </td>
                            <td class="text-truncate"> {{$item->price}} </td>
                          </tr>

                          @if ($loop->index == 15 ) @php break; @endphp @endif

                        @empty
                            <td>No Data </td>  
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
    </div>
    
  </div>
</div>

@section('modal')

  {{-- Item Add Modal --}}
  <div class="col-lg-4 col-md-6 col-sm-12">
      <!-- Modal -->
      <div class="modal animated bounceIn text-left " id="add_item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel46" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-body">
              <form>
                <form class="form">
                  <div class="form-body">
                    <h4 class="form-section"><i class="la la-eye"></i>Add Item</h4>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="location2"> Main Category:
                                  <a href="#" data-toggle="modal" data-target="#add_main_category_modal"> <div class="badge badge-success"> +Add </div> </a>
                              </label>
                              <select class="custom-select form-control" id="category_id" name="name">
                                <option value="">item 1</option>
                                <option value="">item 2</option>
                                <option value="">item 4</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                            <label for="location2"> Sub Category : 
                              <a href="#" data-toggle="modal" data-target="#add_sub_category_modal"> <div class="badge badge-success"> +Add </div> </a>
                            </label>
                            <select class="custom-select form-control" id="sub_category_id" name="sub_category_id">
                              <option value="">item 1</option>
                              <option value="">item 2</option>
                              <option value="">item 3</option>
                              <option value="">item 4</option>
                            </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" id="userinput4" class="form-control border-success" placeholder="Item Name" name="name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="number" id="userinput3" class="form-control border-success" placeholder="Item Price" name="price">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="location3"> Item Description </label>
                            <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="item Description"></textarea>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="location3">Select Item Image:</label>
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

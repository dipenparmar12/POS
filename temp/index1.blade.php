@extends('admin.main')

@section('content')

@include('script.my_jquery_functions')

<h1>Create Category</h1>

<div class="card">
    <div class="card-header">
      <h4 class="card-title">Simple ListGroup</h4>
      <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
          <li><a data-action="close"><i class="ft-x"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content collapse show">
      <div class="card-body">
        <div class="card-content mt-1">
            <div class="table-responsive">
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
                            
                            <td class="text-truncate">0 Masala Dhosa </td>
                            <td class="text-truncate"> Hello </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-blue round"> Edt </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>     
      </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="card-title"> Active Table 14 </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    </div>
    
    <div class="card-content mt-1">
        <div class="table-responsive">
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
                        
                        <td class="text-truncate">0 Masala Dhosa </td>
                        <td class="text-truncate"> Hello </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-blue round"> Edt </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


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
      
            <div class="modal-footer">
                <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
                <button type="button" id="create_modal_submit_btn" class="btn box-shadow-1 round btn-outline-success">Save</button>
            </div>

      {!! Form::close() !!}

<div id="ajax_modal"></div>
@endsection



@section('title',"Custom Page Title")
@extends('admin.main')

@section('js')
  @parent
  {{-- Your additional JS Scripts --}}
@endsection


@section('content')

    <div class="card">
    <div class="card-header">
        <h4 class="card-title" style="text-transform:capitalize;"> Open Orders </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload" id="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="card-content mt-1">
                <div class="table-responsive">
                    <div id="db_records">
        <table id="recent-orders" class="table table-hover">
      <thead>
          <tr>
              <th class="border-top-0 m-0 "># Name</th>
              <th class="border-top-0 m-0">Nick name</th>
              <th class="border-top-0 m-0">Price</th>
              <th class="border-top-0 m-0">Action</th>
          </tr>
      </thead>
      
      <tbody>
         <tr>    
              <td class="text-truncate"> 1 cat1S3.Item1</td>
              <td class="text-truncate"> cat1S3.Item1 </td>
              <td class="text-truncate"> 120.00 </td>
              <td>
                <button type="button" data-edit_btn="1" class="btn btn-sm btn-outline-success round"> Done </button>
                <button type="button" data-delete_btn="1" class="btn btn-sm btn-outline-danger round"> Not/A </button>        
              </td>
          </tr>
      </tbody>
  </table>
    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

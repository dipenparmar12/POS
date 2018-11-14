@extends('admin.main')



{{-- Index Categories ( Card->table->list ) --}}
@section('content')

{{-- Ajax Script for Append Modal Form into index Page --}}
@include('script.crud_script',['form_mode'=>@$form_mode,'category'=>@$category])
@include('script.my_jquery_functions')

  <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Category </h4>

        <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
        <div class="heading-elements">

          <ul class="list-inline mb-0">
            
            <li>
              <a href="#" id="create_category_modal_btn" data-toggle="modal" data-target="#create_main_category_modal"><div class="badge badge-success">+Add</div></a>
            </li>

            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            {{-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> --}}
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
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
                        @forelse ($categories as $category)
                          <tr>    
                              <td class="text-truncate"> {{ $category->id.' '.$category->name }}</td>
                              <td class="text-truncate"> {{ $category->nick_name }} </td>
                              <td>
                                <button type="button" data-edit_btn="{{ $category->id }}" class="btn btn-sm btn-outline-blue round"> Edt </button>
                              </td>
                          </tr>
                        @empty
                          <p>Empty <a href="#">Add new</a></p> 
                        @endforelse

                      </tbody>
                  </table>
              </div>
          </div>     
        </div>
      </div>
  </div>

  
  {{-- Repeatative Modal component For, Modal Configration  --}}
  @component('admin.layout.components.modal',['modal_id'=>'create_category_modal'])
  <div id="ajax_modal">      
  </div>
  @endcomponent
  


@endsection {{-- #content --}}
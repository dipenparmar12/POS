@extends('admin.main')

@section('content')

    <h1> Category CRUD </h1>
    <hr>

    <div class="row">
        <div class="col-12">
            <div class="card" >
                <div class="card-header">
                    <h4 class="card-title"> Category
                    
                    </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a href="" class="btn btn-sm btn-blue" data-toggle="modal" data-target="#create_category_modal" id="create_category_btn">+Add</a></li>
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="tab-content px-0 pt-0">
                            <div id="recent-sales" class="">
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table id="recent-orders" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0 m-0 " ># Category</th>
                                                    <th class="border-top-0 m-0 ">Nick name</th>
                                                    {{-- <th class="border-top-0 m-0 ">Desc</th> --}}
                                                    <th class="border-top-0 m-0 ">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($categories as $category)
                                                <tr>
                                                    <td class="text-truncate"> {{$loop->iteration." ".$category->name}}</td>
                                                    <td class="text-truncate">{{$category->nick_name}}</td>
                                                    {{-- <td class="text-truncate" style="width:10px">{{$category->name}}</td> --}}
                                                    <td> <button type="button" class="btn btn-sm btn-outline-blue round"> Edt </button> </td>
                                                </tr>
                                                @empty
                                                <p>There is no records </p>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="ajax_modal"></div>

    @include('script.my_jquery_functions')

@endsection
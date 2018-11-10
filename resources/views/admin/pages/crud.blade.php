@extends('admin.main')

@section('content')

    <div class="row no-gutters" >
        <h1> Ultimate CRUD </h1>
    </div>
    <hr>
    
    <div class="row">
        <div class="col-4">
            <div class="card" >
                <div class="card-header">
                <h4 class="card-title"> Category </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
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
                                    {{-- <th class="border-top-0 m-0 ">Nick</th> --}}
                                    <th class="border-top-0 m-0 ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                    <tr>
                                        <td class="text-truncate"> {{$loop->iteration." ".$category->name}}</td>
                                        {{-- <td class="text-truncate">{{$category->nick_name}}</td> --}}
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

        <div class="col-5">
            <div class="card" >
                <div class="card-header">
                <h4 class="card-title"> Category </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
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
                                        <th class="border-top-0 m-0 w-25" ># Category</th>
                                        <th class="border-top-0 m-0 ">Nick</th>
                                        <th class="border-top-0 m-0 ">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $category)
                                        <tr>
                                            <td class="text-truncate"> {{$loop->iteration." ".$category->name}}</td>
                                            <td class="text-truncate">{{$category->nick_name}}</td>
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
        
    <div class="row">
        <div class="col-4">
            <div class="card" style="height: 383px;">
                <div class="card-header">
                <h4 class="card-title"> Category </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                    </ul>
                </div>
                </div>
                <div class="card-content collapse show">
                <div class="card-body">
                    <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active">
                        Cras justo odio
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection



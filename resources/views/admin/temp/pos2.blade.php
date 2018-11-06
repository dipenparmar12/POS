@extends('admin.main')
{{-- Optional @yeild --}}
@section('title',"Sale Point of Sale")
@section('content')
{{-- SubCategory Selection Menu --}}
<div class="row">
    
    <div class="col-4">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs nav-underline ">
                    <li class="nav-item">
                        <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Sub Category</a>
                    </li>
                </ul>
                
                <div class="tab-content ">
                    <div class="tab-pane" id="limit" aria-labelledby="base-market">
                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="card" style="zoom: 1;">
                                    <div class="card-header">
                                        <h4 class="card-title">New Orders</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div id="new-orders" class="media-list position-relative ps-container ps-theme-default" data-ps-id="e59854a8-10f1-1939-c87d-d7cefc3569bb">
                                            <div class="table-responsive">
                                                <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">Product</th>
                                                            <th class="border-top-0">Customers</th>
                                                            <th class="border-top-0">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-truncate">iPhone X</td>
                                                            <td class="text-truncate p-1">
                                                                <ul class="list-unstyled users-list m-0">
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                                    </li>
                                                                    <li class="avatar avatar-sm">
                                                                        <span class="badge badge-info">+4 more</span>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="text-truncate">$8999</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-truncate">Pixel 2</td>
                                                            <td class="text-truncate p-1">
                                                                <ul class="list-unstyled users-list m-0">
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Scott" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-16.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Charles Miller" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-15.png" alt="Avatar">
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="text-truncate">$5550</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-truncate">OnePlus</td>
                                                            <td class="text-truncate p-1">
                                                                <ul class="list-unstyled users-list m-0">
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Christine Ramos" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Thomas Brewer" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Alice Chapman" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Avatar">
                                                                    </li>
                                                                    <li class="avatar avatar-sm">
                                                                        <span class="badge badge-info">+3 more</span>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="text-truncate">$9000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-truncate">Galaxy</td>
                                                            <td class="text-truncate p-1">
                                                                <ul class="list-unstyled users-list m-0">
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Ryan Schneider" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Tiffany Oliver" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-13.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joan Reid" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="text-truncate">$7500</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-truncate">Moto Z2</td>
                                                            <td class="text-truncate p-1">
                                                                <ul class="list-unstyled users-list m-0">
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Kimberly Simmons" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-8.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Willie Torres" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="Avatar">
                                                                    </li>
                                                                    <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Rebecca Jones" class="avatar avatar-sm pull-up">
                                                                        <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="Avatar">
                                                                    </li>
                                                                    <li class="avatar avatar-sm">
                                                                        <span class="badge badge-info">+1 more</span>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                            <td class="text-truncate">$8500</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @foreach ($category as $sub_category)
                        <div class="tab-pane" id="{{$sub_category->name}}" aria-labelledby="base-market">
                            <div class="row">
                                <h3> {{$sub_category->id." ".$sub_category->name}} </h3>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Main Category Selection ( South, Panjabi, Chinise Etc ) --}}
        <div class="col-6">
            <div class="card-content">
                <div class="card-body ">
                    
                    {{-- <p>I am Card_body in main Category Selection Menu </p> --}}
                    <ul class="nav nav-tabs nav-underline ">
                        
                        @foreach ($category as $sub_category)
                        <li class="nav-sub_category">
                            <a class="nav-link" id="{{$sub_category->name}}" data-toggle="tab" aria-controls="{{$sub_category->name}}" href="#{{$sub_category->name}}" aria-expanded="false"> {{$sub_category->nick_name}} </a>
                        </li>
                        @endforeach
                    </ul>
                    
                    <div class="row">
                        <hr>
                        <div class="col-6">Helo</div>
                        <div class="col-6">Hello2</div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        {{-- Table Selection Tool Palatte --}}
        <div class="col-2">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-underline ">
                        <li class="nav-item">
                            <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Table </a>
                        </li>
                        <div class="col-12">
                            <hr>
                            <div class="row ">
                                @for ($i = 1; $i < 21 ; $i++)
                                <div class="col-6 line-height-2">
                                    @if( ($i%3) == 0)
                                    <p class="btn btn-danger btn-sm"> T-{{$i}}</p>
                                    @else
                                    <p class="btn btn-success btn-sm"> T-{{$i}}</p>
                                    @endif
                                    @if ($i==7)
                                    <p class="btn bg-amber btn-sm"> T-{{$i}}</p>
                                    @endif
                                </div>
                                @endfor
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
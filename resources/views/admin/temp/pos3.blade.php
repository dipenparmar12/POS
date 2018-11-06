@extends('admin.main')
{{-- Optional @yeild --}}
@section('title',"Sale Point of Sale")
@section('content')
<div class="row">

    {{-- SubCategory Selection Menu --}}    
    <div class="col-4">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs nav-underline ">
                    <li class="nav-item">
                        <a class="nav-link " id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Sub Category</a>
                    </li>
                </ul>
                
                <div class="tab-content px-1 pt-1">
                    <div class="tab-pane active" id="limit" aria-labelledby="base-market">
                        
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
                        <li class="nav-item">
                            <a class="nav-link " id="{{$sub_category->name}}" data-toggle="tab" aria-controls="{{$sub_category->name}}" href="#{{$sub_category->name}}" aria-expanded="true"> {{$sub_category->name}} </a>
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
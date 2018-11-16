@extends('admin.main')
{{-- Optional @yeild --}}
@section('title',"Sale Point of Sale")
@section('content')
<div class="row">
    <div class="col-2">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs nav-underline ">
                    <li class="nav-item">
                     <a class="nav-link " id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Sub Category</a>
                    </li>
                </ul>
                
                <div class="tab-content px-1 pt-1">
                    <div class="tab-pane" id="limit" aria-labelledby="base-market">
                        <div class="row">
                            <h1> Tab One </h1>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="market" aria-labelledby="base-market">
                        <div class="row">
                            <h1> Tab Two </h1>
                        </div>
                    </div>
                    
                    <div class="tab-pane" id="stop-limit" aria-labelledby="">
                        <div class="row">
                            <h2> Hello Tab Three </h2>
                        </div>
                    </div>
                    <div class="tab-pane" id="south" aria-labelledby="">
                        <div class="row">
                            <h2> South Indian </h2>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-8">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs nav-underline ">
                    <li class="nav-item">
                        <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true">Limit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="base-market" data-toggle="tab" aria-controls="market" href="#market" aria-expanded="false">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" aria-controls="stop-limit" href="#stop-limit" aria-expanded="false"> Chaat </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="" data-toggle="tab" aria-controls="stop-limit" href="#stop-limit" aria-expanded="false"> Chaat </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
    
    <div class="col-2">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs nav-underline ">
                    <li class="nav-item">
                        <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Table </a>
                    </li>
                    <div class="col-12">
                        <hr>
                        <div class="row">
                            @for ($i = 1; $i < 21 ; $i++)
                                <div class="col-5 line-height-2">
                                    @if( ($i%3) == 0)
                                        <p class="btn btn-danger btn-sm"> T-{{$i}}</p>
                                    @else
                                    <p class="btn btn-success btn-sm"> T-{{$i}}</p>
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
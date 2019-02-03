{{-- Table_selection Tool Palatte --}}
<div class="card-content">
    <div class="card-body">
        <ul class="nav nav-tabs nav-underline ">
            <li class="nav-item">
                <a class="nav-link active" id="base-limit" data-toggle="tab" aria-controls="limit" href="#limit" aria-expanded="true"> Table </a>
            </li>
            <div class="col-12">
                <hr>
                <div class="row ">
                    @forelse($tables as $table)
                        <div class="col-6 line-height-3 mb-1" >
                            @switch(trim($table->status))
                                @case("empty")
                                    <button class="btn btn-success btn-sm col-12 " data-table_status="{{ $table->status }}" data-table_id="{{ $table->id }}"> T-{{$table->id }}</button><br>
                                    @break
                                @case("unpaid")
                                    <button class="btn bg-amber btn-sm col-12" data-table_status="{{ $table->status }}" data-table_id="{{ $table->id }}"> T-{{$table->id }}</button>    <br>
                                    @break
                                @case("hold")
                                    <button class="btn btn-danger btn-sm col-12" data-table_status="{{ $table->status }}" data-table_id="{{ $table->id }}"> T-{{$table->id }}</button><br>
                                    @break
                                @default
                                    <button class="btn btn-sm col-12" data-table_status="{{ $table->status }}" data-table_id="{{ $table->id }}"> T-{{$table->id }}</button><br>
                                    @break
                            @endswitch
                                        
                        </div>
                        {{-- <h1>{{ $table->status }} <hr> </h1> --}}
                    @empty
                        <div class="col-12 line-height-3 mb-1" >
                            <a class="btn btn-info btn-sm" href="{{ URL::to('table') }}"> Add Table </a>
                        </div>
                    @endforelse
                </div>
            </div>
        </ul>
    </div>
</div>
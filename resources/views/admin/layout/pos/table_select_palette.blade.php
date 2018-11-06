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
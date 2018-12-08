<div class="card">
    <div class="card-header">
        <h4 class="card-title" style="text-transform:capitalize;"> {{ $title }} 
           <a href="#" id="{{ $title }}_modal_btn" data-toggle="modal" data-target="#{{$title}}_modal"> <div class="badge badge-success">+Add</div> </a>
        </h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
        <div class="heading-elements">

                {{-- <a href="#" id="{{ $title }}_modal_btn" data-toggle="modal" data-target="#{{$title}}_modal">
                    <div class="badge badge-success">+Add</div>
                </a> --}}

            <ul class="list-inline mb-0">
                
                {{-- <li >
                    <a href="#" id="{{ $title }}_modal_btn" data-toggle="modal" data-target="#{{$title}}_modal"> <div class="badge badge-success">+Add</div> </a>
                </li> --}}

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
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

</div>


{{-- Repeatative Modal component For, Modal Configration --}} {{-- @component('admin.layout.components.card', ['title'=> 'Category'] )
<table>
    <tr>table_Row</tr>
</table>
@endcomponent --}}
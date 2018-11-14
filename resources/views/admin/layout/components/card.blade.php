 <div class="card">
      <div class="card-header">
        <h4 class="card-title"> {{ $title }} </h4>

        <a class="heading-elements-toggle"><i class="la la-ellipsis font-medium-3"></i></a>
        <div class="heading-elements">

          <ul class="list-inline mb-0">
            
            <li>
              <a href="#" id="{{ $modal_name }}_modal_btn" data-toggle="modal" data-target="#{{$modal_name}}_modal"><div class="badge badge-success">+Add</div></a>
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
                  {{ $slot }}
              </div>
          </div>     
        </div>
      </div>
  </div>



  @php
    $card_confi = [
      'title'=> 'Category',
      'modal_name'=> 'category'
    ];
  @endphp
  
  {{-- Repeatative Modal component For, Modal Configration  --}}
  @component('admin.layout.components.card',$card_confi)
    <table><tr>table_Row</tr></table>
  @endcomponent
        
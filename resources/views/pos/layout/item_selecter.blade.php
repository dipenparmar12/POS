{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
@section('js')  
  {{-- <script src="{{ asset('app-assets/js/scripts/tables/datatables/datatable-basic.js') }}" type="text/javascript"></script> --}}
@endsection

@include('script.pos_script')

<div class="card-content">

  <div class="card-body" id="item_select_table_title">
    <ul class="nav nav-tabs nav-underline">
      @foreach ($categories as $category)
      <li class="nav-item" id="{{$category->nick_name}}">
        <a class="nav-link dropdown-toggle" id="tab_{{$category->nick_name}}" data-value='{{$category->name}}' data-toggle="dropdown" href="#{{$category->name}}" > {{$category->nick_name}}</a>
        <div class="dropdown " id="drop_{{$category->nick_name}}">
          <div class="dropdown-menu">
            
            @forelse ($subCategories as $subCategory)
              @if ($subCategory->category_id == $category->id)
              <a class="dropdown-item" data-value="subCategory" data-subCategory_id="{{ $subCategory->id }}" data-subCategory_name="{{ $subCategory->id }}" data-subCategory_id="{{ $subCategory->id }}" id="subCategory_id__{{$subCategory->id}}" > {{$subCategory->name}}_cat </a>
              @endif
            @empty
             <p class="dropdown-item"> Add Item </p>
            @endforelse
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ URL::to('SubCategory/')}}">Edit</a>
          </div>
        </div>
      </li>
      @endforeach
    </ul>

    <br>
    
    <form>
      <div class="input-group">
         <div class="input-group-prepend">
           {{-- <span class="input-group-text">By_Cate</span> --}}
          </div>

          <input type="text" class="form-control" placeholder="Witin category inputtem Search" id="search_item_from_subCategory" onkeyup="subCategory_search()">

          <div class="input-group-prepend">
           {{-- <span class="input-group-text">By_item</span> --}}
          </div>
          <input type="text" class="form-control" placeholder="Item Search">
      </div>
    </form>

    @component('admin.layout.components.card',['title'=>'item'])
      <div id="item_select_table">        
        
      </div>        
    @endcomponent
  
  </div>


<script>

  function subCategory_search() {  
    // alert('MyFun');
    // Declare variables 
    var input, filter, table, tr, td, i;
    input = document.getElementById("search_item_from_subCategory");
    filter = input.value.toUpperCase();
    table = document.getElementById("item_list_table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      } 
    }
  }
  
</script>

{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
  
<div class="card-content">

  <div class="card-body" id="category_menu_navbar">
    <ul class="nav nav-tabs nav-underline">
  
      <!-- Main Categorys Navbar ( Tab ) -->
      @foreach ($categories as $category)
      
        <li class="nav-item" id="{{$category->nick_name}}">
          <a class="nav-link dropdown-toggle" id="tab_{{$category->nick_name}}" data-value='{{$category->name}}' data-toggle="dropdown" href="#{{$category->name}}" > {{$category->nick_name}}</a>
          <div class="dropdown " id="drop_{{$category->nick_name}}">
            <div class="dropdown-menu">
              
              @forelse ($subCategories as $subCategory)
                @if ($subCategory->category_id == $category->id)
                  <a class="dropdown-item" data-value="subCategory" data-subCategory_id="{{ $subCategory->id }}" data-subCategory_name="{{ $subCategory->id }}" data-subCategory_id="{{ $subCategory->id }}" id="subCategory_id__{{$subCategory->id}}" > 
                    {{$subCategory->name}} 
                  </a>
                @endif
              @empty
                <a class="dropdown-item" > Edit/Update </a>
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
          <input type="text" class="form-control" placeholder="[ Ctlr+Shift ] Search Items" id="search_item_from_subCategory" >
          <div class="input-group-prepend">
           {{-- <span class="input-group-text">By_item</span> --}}
          </div>
          
          <input type="text" class="form-control" placeholder="SubCategory Search []" id="menu_subCategory_search" >
          
      </div>
    </form>

    @component('admin.layout.components.card',['title'=>'item'])
      <div id="menu_item_select_table">
          {{-- @include('pos.ajax_request.menu_sub_category_table') --}}
          {{-- Temp Data --}}
          <div class="">
            <table id="menu_item_list_table" class="table table-hover table-xl ">
              <thead>
                <tr>
                  <th class="border-top-0">#</th>
                  <th class="border-top-0">Item</th>
                  <th class="border-top-0">Price</th>
                </tr>
              </thead>

              <tbody>
              
              </tbody>
            </table>
          </div>

      </div>        
    @endcomponent
  
  </div>
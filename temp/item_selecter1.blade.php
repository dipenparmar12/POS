
{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}

@section('js')
  <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
@endsection

<div class="card-content">
  <div class="card-body">
    <ul class="nav nav-tabs nav-underline ">
      @foreach ($categories as $category)
      <li class="nav-item" id="{{$category->nick_name}}">
        
        <a class="nav-link dropdown-toggle" id="tab_{{$category->nick_name}}" data-value='{{$category->name}}' data-toggle="dropdown" href="#{{$category->name}}" > {{$category->nick_name}}_1</a>

        <div class="dropdown " id="drop_{{$category->nick_name}}">    
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#pos"> {{$category->id}} </a>
              <a class="dropdown-item" href="#"> {{$category->nick_name}}</a>
              <a class="dropdown-item" href="#"> {{$category->name}}</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"> Setting</a>
            </div>
          </div>  
      </li>

      @endforeach
    </ul>

    <script>
      $(document).ready(function () {
        
        $('li.nav-item').on('onClick',function () {
          // alert('hello congrates');
          console.log('drop_'+this.id);
          $('#drop_'+this.id).attr('class','show');
        });

        // $('li.nav-item').mouseout( function () {
          $('#drop_'+this.id).attr('class','hidden');
        // });
        
        

      });
    </script>
    
    <br>

    <div class="row">
      <div class="col">
        <div class="card p-2" >
          <div class="card-header">
              <h1>Item list header</h1>
          </div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque id libero quas, harum natus minus praesentium, commodi ipsam temporibus autem sequi aspernatur. Beatae officia dignissimos explicabo, saepe quos adipisci alias.
        </div>
      </div>
    </div>
    
  </div>
</div>


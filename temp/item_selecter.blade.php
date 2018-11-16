{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
<div class="card-content">
  <div class="card-body ">
    <ul class="nav nav-tabs nav-underline ">
      @foreach ($category as $sub_category)
      <li class="nav-item">
        <a class="nav-link " id="id_{{$sub_category->name}}" data-toggle="tab" aria-controls="{{$sub_category->name}}" href="#{{$sub_category->name}}" aria-expanded="true"> {{$sub_category->nick_name}} </a>
      </li>
      @endforeach
    </ul>
    
    <br>

    <div class="row">
      <div class="col">
        <div class="card" style="">
          <div class="card-header">
            <h4 class="card-title"> Select Item from </h4>
          </div>
          <div class="card-content">
            <div class="card-body">

              <div class="nav-vertical">
                <ul class="nav nav-tabs nav-left nav-border-left" style="height: 82.3906px; ">
                    {{-- Sub_category list --}}
                    @foreach ($category as $sub_category)
                    <li class="nav-item">
                       <a class="nav-link" id="{{$sub_category->nick_name}}_tab" data-toggle="tab" aria-controls="tabVerticalLeft11" href="#{{$sub_category->nick_name}}" aria-expanded="true">{{$sub_category->name}}</a>
                    </li>      
                    @endforeach                    
                </ul>

                <div class="tab-content px-0 pt-0">
                    @foreach ($category as $sub_category)
                    <div class="tab-pane" id="{{$sub_category->name}}" aria-labelledby="base-market">
                        {{$sub_category->name}} Sub-cat
                    </div>
                    @endforeach
                </div>

                <div class="tab-content px-1">
                  @foreach ($category as $sub_category)
                    <div class="tab-pane" id="{{ $sub_category->nick_name }}" aria-labelledby="baseVerticalLeft1-tab2">
                        <p> {{$sub_category->name}} Item </p>
                    </div>
                  @endforeach
                </div> 

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
{{-- Main_category Selection ( South, Panjabi, Chinise Etc ) --}}
<div class="card-content">
  <div class="card-body ">
    <ul class="nav nav-tabs nav-underline ">
      @foreach ($category as $subCategory)
      <li class="nav-item">
        <a class="nav-link " id="id_{{$subCategory->name}}" data-toggle="tab" aria-controls="{{$subCategory->name}}" href="#{{$subCategory->name}}" aria-expanded="true"> {{$subCategory->nick_name}} </a>
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
                    {{-- subCategory list --}}
                    @foreach ($category as $subCategory)
                    <li class="nav-item">
                       <a class="nav-link" id="{{$subCategory->nick_name}}_tab" data-toggle="tab" aria-controls="tabVerticalLeft11" href="#{{$subCategory->nick_name}}" aria-expanded="true">{{$subCategory->name}}</a>
                    </li>      
                    @endforeach                    
                </ul>

                <div class="tab-content px-0 pt-0">
                    @foreach ($category as $subCategory)
                    <div class="tab-pane" id="{{$subCategory->name}}" aria-labelledby="base-market">
                        {{$subCategory->name}} Sub-cat
                    </div>
                    @endforeach
                </div>

                <div class="tab-content px-1">
                  @foreach ($category as $subCategory)
                    <div class="tab-pane" id="{{ $subCategory->nick_name }}" aria-labelledby="baseVerticalLeft1-tab2">
                        <p> {{$subCategory->name}} Item </p>
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
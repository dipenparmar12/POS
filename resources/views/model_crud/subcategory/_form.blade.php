@component('layout.components.model_curd_form',['crud_table'=>$crud_table]) 

    <div class="row">
        <div class="col">
            <div class="form-group">
                <select class="custom-select form-control" id="category_id" name="category_id">                    
                    @isset ($categories)
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endforeach    
                    @endisset
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="userinput4" class="form-control border-success" placeholder="Name" name="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="userinput3" class="form-control border-success" placeholder="Nick name" name="nick_name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <label for="location3">Select Sub_category Image:</label>
            <div class="form-group">
                <input type="file" id="userinput3" class="form-control border-primary" name="img">
            </div>
        </div>
    </div>


@endcomponent
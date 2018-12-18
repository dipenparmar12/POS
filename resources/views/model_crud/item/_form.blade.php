
<script>
  $(document).ready(function() {
    
    var table_data = "";

    $.post('/Item/get_data', { table:'SubCategory'}, function(data, textStatus, xhr) {
      table_data = jQuery.extend(true, {}, data) ; // clone,copy Object
    }); // .post()

    // Dynamic Data Fecthing to FORM  
    $('body').on('change', '#category_id', function(event) {
      event.preventDefault();
        var category = $('select#category_id option:selected')[0];
        var category_id = $(category).data('category_id');

          $.post('/Item/get_data', { table:'SubCategory'}, function(data, textStatus, xhr) {
            table_data = jQuery.extend(true, {}, data) ; // clone,copy Object
          }); // .post()


        $('[name="sub_category_id"]').empty();

        $.each( table_data , function(index, val) {
          // console.log( val.category_id );
          if( val.category_id == category_id ){
            // console.log(val);
            $('[name="sub_category_id"]').append("<option value="+val.category_id+">"+val.name+"</option>");
          } // if()
        }); //each()
                
    }); // body.category_id.click()
  });// JQ
</script>



@component('layout.components.model_curd_form',['crud_table'=>$crud_table]) 

  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="location2"> Main Category:
              <a href="" target="_blank" onclick="my_js_functions.open_window('/Category');return false;"> 
                <div class="badge badge-success"> +Add </div> 
              </a>
          </label>
            <select class="custom-select form-control" id="category_id">
                  @foreach ($categories as $category)
                      <option data-category_id="{{ $category->id }}" value="{{ $category->id }}"> {{ $category->name }}</option>
                  @endforeach
            </select>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label for="location2"> Sub Category :
                <a href="" target="_blank" onclick="my_js_functions.open_window('/SubCategory');return false;"> 
                  <div class="badge badge-success"> +Add </div> 
                </a>

          </label>
              <select class="custom-select form-control" id="sub_category_id" name="sub_category_id">
                  <div>
                      <option data-sub_category_id="" value="" > </option>
                      @foreach ($subCateogries as $subCateogry)
                          <option data-sub_category_id="{{ $subCateogry->id }}" value="{{ $subCateogry->id }}"> {{ $subCateogry->name }}</option>
                      @endforeach
                  </div>    
              </select>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-5">
          <div class="form-group">
              <input type="text" id="userinput4" class="form-control border-success" placeholder="Item Name" name="name" value="Item_name">
          </div>
      </div>
      <div class="col-md-4">
          <div class="form-group">
              <input type="text" id="userinput3" class="form-control border-success" placeholder="Nick name" name="nick_name" value="Nic">
          </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">
              <input type="number" id="userinput5" class="form-control border-success" placeholder="Item Price" name="price" value="120">
          </div>
      </div>
  </div>
  <hr>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label for="location3"> Item Description </label>
              <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="item Description"> SOme Desc </textarea>
          </div>
      </div>
      <div class="col-md-6">
          <label for="location3">Select Item Image:</label>
          <div class="form-group">
              <input type="file" id="userinput3" class="form-control border-primary" name="img">
          </div>
      </div>
  </div>

@endcomponent


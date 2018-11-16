{{-- Item Add Modal --}}
<form class="form">
  
  <div class="form-body">
    <h4 class="form-section"><i class="la la-eye"></i>Add Item</h4>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="location2"> Main Category:
            <a href="#" data-toggle="modal" data-target="#add_main_category_modal"> <div class="badge badge-success"> +Add </div> </a>
          </label>
          <select class="custom-select form-control" id="category_id" name="name">
            <option value="">item 1</option>
            <option value="">item 2</option>
            <option value="">item 4</option>
          </select>
        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label for="location2"> Sub Category :
            <a href="#" data-toggle="modal" data-target="#add_sub_category_modal"> <div class="badge badge-success"> +Add </div> </a>
          </label>
          <select class="custom-select form-control" id="sub_category_id" name="sub_category_id">
            <option value="">item 1</option>
            <option value="">item 2</option>
            <option value="">item 3</option>
            <option value="">item 4</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input type="text" id="userinput4" class="form-control border-success" placeholder="Item Name" name="name">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <input type="number" id="userinput3" class="form-control border-success" placeholder="Item Price" name="price">
        </div>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="location3"> Item Description </label>
          <textarea class="form-control" name="desc" id="desc_id" cols="28" rows="5" placeholder="item Description"></textarea>
        </div>
      </div>
      <div class="col-md-6">
        <label for="location3">Select Item Image:</label>
        <div class="form-group">
          <input type="file" id="userinput3" class="form-control border-primary" name="img">
        </div>
      </div>
    </div>
  </div>
</form>
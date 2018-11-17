<form class="form">
    <div class="form-body">
        <h4 class="form-section"><i class="la la-eye"></i>Add Sub_category</h4>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <select class="custom-select form-control" id="category_id" name="name">
                        <option value="">Main category 1</option>
                        <option value="">Main category 2</option>
                        <option value="">Main category 4</option>
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
        <div class="modal-footer">
            <button type="button" class="btn box-shadow-1 round btn-outline-danger grey" data-dismiss="modal">Close</button>
            <button type="button" class="btn box-shadow-1 round btn-outline-success">Save Sub_category</button>
        </div>
    </div>
</form>
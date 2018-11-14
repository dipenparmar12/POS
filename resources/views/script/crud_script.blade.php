<script>

$(document).ready(function(){
    // console.log( $.type(response) );  // check dataType (jquery)

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	
	var category = {!! json_encode($category) !!};// don't use quotes
	var form_url = '{{ URL::to("category/create") }}';
	var form_data = {}; // Autofill up form_data holder, invocked by Edit_btn
    

    // Category Modal fetch HTML FORM from category_form.blade.php and show modal for create New Category    
    $('#create_category_modal_btn').on('click', function(event) {
        event.preventDefault();
        alert('{{ @$form_mode }}');

        $.get(form_url, function(data) {
        	// console.log(data); // Modal with Form HTML Code Fetched
            $('.modal-backdrop show').remove(); // remove Black background Display Block Div 
            $('#ajax_modal').empty().append(data); // Add_modal to HTML PAGE

            $('form').prepend('<input type="hidden" value="create" name="form_mode">');//add ele begining of selected ele

            $('#create_category_modal').modal('show'); // show or view Modal
        });

        // alert('modal Show');
    }); // #Create Category modal(Fetch/show)


	// Category Modal fetch HTML FORM from category_form.blade.php and Fetch Data from Category.show(id) Method
    $('[data-edit_btn]').on('click', function(event) {
        event.preventDefault();
        // console.log(this);

        var record_id = $(this).data('edit_btn'); //console.log(record_id);
        var url_get_record = '{{ URL::to("category/")}}'+'/'; // console.log(url_get_record);

        // Get json Record that going to be edited or updated
        $.get(url_get_record+record_id, function(response) {
        	form_data = $.parseJSON(JSON.stringify(response)); // clone one Obj data to another
        	// console.log(form_data);
        }); // get one specifiyed Record in json format from Category.Show($id)


        // 
		$.get(form_url, function(data) {
        	// console.log(data); // Modal with Form HTML Code Fetched
            $('.modal-backdrop show').remove(); // remove Black background Display Block Div 
            $('#ajax_modal').empty().append(data); // Add_modal to HTML PAGE
            $('form').prepend('<input type="hidden" value="edit" name="form_mode">');//add ele begining of selected ele
            $('form').prepend('<input type="hidden" value="'+form_data.id+'" name="id">');
            $('#create_category_modal').modal('show'); // show or view Modal
            my_js_functions.populate_form(form_data); //fillupFORM,By Json_data (Cat_Controller.edit($id))

        }); // Modal append and auto fillup data to html form
        
    }); // #Create Category modal(Fetch/show)



    $('#ajax_modal').on('click','#create_category_submit_btn', function(event) {
    	// event.preventDefault();
    	alert('Submit btn Clicked');

		// var form_data = $('form#create_category').serialize(); //  FORM INPUT DATA in POST STRING FORMATED
 		// var form_data = $('form#create_category').serializeArray(); // FORM INPUT DATA in POST STRING ARRAY FORMATED
		var url = '{{ URL::to("category") }}';
 		var token = $('[name="_token"]').val();
 		var form_data = $('form [name]').toArray();
 		var data = {};

 		$.each( form_data, function(index, html_obj) {
 			// console.log(html_obj.name);
 			// console.log(html_obj.value);
 			data[html_obj.name] = html_obj.value;
 		});

 		// console.log(data);
 		// console.log(url);
 		// console.log(form_data);

		$.ajax({
			type: 'POST',
			url: url,
			data: {data},
			success: function(data){
				console.log(data);
				$('#create_category_modal').modal('hide');
				
			}
	    });

    });


    // Auto Trigger BTNS  ( Dev-req )
    // $('#create_category_modal_btn').click();
    // $("#create_category_modal_btn").trigger("click");
    

});

</script>

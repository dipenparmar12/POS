<script>



// ---- TODO Task one and half day

// == DONE JOBS ===
// card_table_For listing records 
// index Listout_ all Records by controller
// set table btn add new Record btn and Edit btn ( and delete,clear,save general btns )
// Record_Delete
// Update/Delete Conformation


// == Pending JOBS ===

// Jquery && laravel Validation
// Notification
// SoftDelete()
// Code Orgnazation, DRY, cleanUp and Optimization



$(document).ready(function(){
    // console.log( $.type(response) );  // check dataType (jquery)


	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	
	var curd = 				'{{ $crud_table }}';
	var modal_appear_btn =  '#'+curd+'_modal_btn';
	var modal_id = 			'#'+curd+'_modal';
	var modal_submit_btn =  '#'+curd+'_submit_btn';

	// alert(curd);
    // alert(modal_submit_btn);

	var crud_url = '{{ URL::to($crud_table) }}/';
	var crud_html_form_url = crud_url +'create';
	var crud_delete_url = crud_url +'delete/';
	var crud_get_db_records_url = crud_url+'db_records/';

    var form_data = {}; // Autofill up form_data holder, invocked by Edit_btn

    // console.log(crud_html_form_url);

    // Category Modal fetch HTML FORM from category_form.blade.php and show modal for create New Category    
    $('body').on('click',modal_appear_btn, function(event) {
        event.preventDefault();
        // alert('add_new Btn Clicked');

        $.get(crud_html_form_url, function(data) {
        	// console.log(data); // Modal with Form HTML Code Fetched
            $('.modal-backdrop show').remove(); // remove Black background Display Block Div 
            $('#ajax_modal').empty().append(data); // Add_modal to HTML PAGE
            $('form').prepend('<input type="hidden" value="create" name="form_mode">');//add ele begining of selected ele
            $(modal_id).modal('show'); // show or view Modal
        });

        // alert('modal Show');
    }); // #Create Category modal(Fetch/show)


	// Category Modal fetch HTML FORM from category_form.blade.php and Fetch Data from Category.show(id) Method
    $('body').on('click','[data-edit_btn]', function(event) {
        event.preventDefault();
        // console.log(this);
        var record_id = $(this).data('edit_btn'); //console.log(record_id);

        // Get json Record that going to be edited or updated
        $.get(crud_url+record_id, function(response) {
            form_data = $.parseJSON(response);
            // console.log(form_data);
            // Old Method That Working With DB ELEQUNT
        	// form_data = $.parseJSON(JSON.stringify(response)); // clone one Obj data to another
        	// console.log(form_data);
            
        }); // get one specifiyed Record in json format from Category.Show($id)


		$.get(crud_html_form_url, function(data) {
        	// console.log(data); // Modal with Form HTML Code Fetched
            $('.modal-backdrop show').remove(); // remove Black background Display Block Div 
            $('#ajax_modal').empty().append(data); // Add_modal to HTML PAGE
            $('form').prepend('<input type="hidden" value="edit" name="form_mode">');//add ele begining of selected ele
            $('form').prepend('<input type="hidden" value="'+form_data.id+'" name="id">');
            $(modal_id).modal('show'); // show or view Modal
            my_js_functions.populate_form(form_data); //fillupFORM,By Json_data (Cat_Controller.edit($id))

            console.log(form_data);


        }); // Modal append and auto fillup data to html form 

    }); // #Create Category modal(Fetch/show)


    // Create New Category Submit form(modal) Btn
    $('body').on('click',modal_submit_btn, function(event) {
    	event.preventDefault();
    	// alert('Submit btn Clicked');

		// var form_data = $('form#create_category').serialize(); //  FORM INPUT DATA in POST STRING FORMATED
 		// var form_data = $('form#create_category').serializeArray(); // FORM INPUT DATA in POST STRING ARRAY FORMATED
		// dynamacly generating form_data and auto fill to inputs
 		var form_data = $('form [name]').toArray();
 		var data = {};
 		$.each( form_data, function(index, html_obj) {
 			// console.log(html_obj.name); // console.log(html_obj.value);
 			data[html_obj.name] = html_obj.value;
 		});

 		// console.log(data);
 		console.log(form_data);

		// if ( prompt("Please Confirm Submit") == 'yes' ) {
        if ( true ) {
			
            $.ajax({
				type: 'POST',
				url: crud_url,
				data: {data},
				success: function(response){
                    console.log(response);
					$(modal_id).modal('hide');
                    refresh_index_table();
                    // alert('AJax_Modal_submit');
				},
				error: function(xhr) {
			        console.log(xhr.responseText);
			    }
		    });// Ajax_call

		}else{
			alert(" Data not updated ");
		}

    }); // # Ajax send data for create or update


    // Delete Record
    $('body').on('click','[data-delete_btn]',function(event){
    	// alert(this);    	
    	var delete_record_id = $(this).data('delete_btn');
    	var delete_url = crud_delete_url + delete_record_id;
    	var deleting_record = $(this)[0].closest('tr');
    	// console.log(delete_record_id);

    	// if ( prompt("Please Confirm") == 'yes' ) {
    	if ( true ) {
    		$.ajax({
	    		url: delete_url,
	    		type: 'POST',
	    		data: { data:'delete' },
	    	})
	    	.done(function(response) {
	    		console.log("success "+response);
	    		deleting_record.remove()
	    		alert("record Delete successfully");
	    	})
	    	.fail(function() {
	    		console.log("error");
	    	})
	    	
    	}else{
    		alert('No');
    	}

    }) // #delete(Record)


    $('body').on('click','#reload', function(event) {
        event.preventDefault();
        // alert('Reload Clicked');
        refresh_index_table();
    });


    function refresh_index_table(){
        // alert('Reload Fun');
        $.post(crud_get_db_records_url, {}, function(data, textStatus, xhr) {
            // alert(data);
            // console.log(data);
            $('#db_records').empty().append(data);
        });
    }


    // Auto Trigger BTNS  ( Dev-req )
    // $('#category_modal_btn').click();
    // $("#category_modal_btn").trigger("click");



});
</script>



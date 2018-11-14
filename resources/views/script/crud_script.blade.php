<script>

$(document).ready(function(){

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	// Category Modal fetch data from create.blade.php and show modal for create New Category

    $('#create_category_modal_btn').on('click', function(event) {
        event.preventDefault();        
        
        alert('{{ @$form_mode }}');

		var category = {!! json_encode($category) !!};// don't use quotes
		// console.log(category);

        $.get('{{ URL::to("category/create") }}', function(data) {
        	// console.log(data); // Modal with Form HTML Code Fetched
            $('.modal-backdrop show').remove(); // remove Black background Display Block Div 
            $('#ajax_modal').empty().append(data); // Add_modal to HTML PAGE
            $('[name="form_mode"]').val('{{ @$form_mode }}'); // Set Form_Mode is edit, defualt is Create
            $('#create_category_modal').modal('show'); // show or view Modal
            my_js_functions.populate_form(category); //fillupFORM,By Json_data (Cat_Controller.edit($id))

        });


        // alert('modal Show');

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
			}
	    });

    });

    // $('#create_category_modal_btn').click();
    $("#create_category_modal_btn").trigger("click");

});

</script>

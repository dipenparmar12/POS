<script>
$(document).ready(function() {
	// alert('Hello Pos ');	


	{{-- alert('{{ $_SERVER['SERVER_NAME'] }}'); --}}




	// Sub_Category Click Event ( Generating Item list )
	$('a[id^="subCategory_id__"').click(function(event) {
		// console.log(this);
		
		var subCategory_id = $(this).attr('data-subCategory_id');
		var subCategory = $(this)[0].text;

		// alert(subCategory_id);
		// console.log(subCategory);
		var test  = $('#item_select_table_title .card-header h4.card-title').text(subCategory);
		console.log(test);

		$.ajax({
			headers: {
	          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
			url: '/pos/item_table/'+subCategory_id,
			type: 'POST',
			data: {subCategory_id:subCategory_id},
		})
		.done(function(response) {
			// console.log(response);
			$('#item_select_table').empty().append(response);
			
		})
		.fail(function(response) {
			console.log("Error: ");
			// console.log(response);
		})
		.always(function() {
			console.log("complete");
		});

	}); // # Ajax() Get and Append Items From SubCategory_id



	


}); // # Jquery 
</script>
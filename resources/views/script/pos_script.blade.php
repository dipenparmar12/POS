<script>
$(document).ready(function() {
	// alert('Hello Pos ');	


	function subCategory_search() {  
	    // alert('MyFun');
	    // Declare variables 
	    var input, filter, table, tr, td, i;
	    input = document.getElementById("search_item_from_subCategory");
	    filter = input.value.toUpperCase();
	    table = document.getElementById("item_list_table");
	    tr = table.getElementsByTagName("tr");

	    // Loop through all table rows, and hide those who don't match the search query
	    for (i = 0; i < tr.length; i++) {
	      td = tr[i].getElementsByTagName("td")[1];
	      if (td) {
	        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	          tr[i].style.display = "";
	        } else {
	          tr[i].style.display = "none";
	        }
	      } 
	    }
	}


	// Item Select Table Generation with Ajax req
	$('a[id^="subCategory_id__"').click(function(event) {
		// console.log(this);
		var subCategory_id = $(this).attr('data-subCategory_id');
		// alert(subCategory_id);
		// console.log(subCategory);
		$('#item_select_table_title .card-header h4.card-title').text($(this)[0].text);
		
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
			// console.log("complete");
		});

	}); // # Ajax() Get and Append Items From SubCategory_id



	// Active table by btn ( Current Table )
	$('body').on('click','[data-table_id]' , function(event) {
		event.preventDefault();
		// alert(this);
		var table_id =  $(this).data('table_id');
		// console.log( table_id );

		// table_select_palette Refresh after change Current active Table
		$.ajax({
			type:'POST',
			url:'/pos/active_table_select/'+table_id,
			data:{id:table_id},
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success:function(response){
			// console.log(response);
			// Append Updated table_select_palette after Active Table selected
			$('#section_table_select_palette div').empty().append(response);
			}
      	});
		

		// Section_order_items Refresh after change Current active Table
		$.ajax({
			type:'POST',
			url:'/pos/section_order_items/',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success:function(response){
			// console.log(response);
			// Append Updated table_select_palette after Active Table selected
			$('#section_order_items section').empty().append(response);
			}
      	});
		


	});
	




}); // # Jquery 
</script>
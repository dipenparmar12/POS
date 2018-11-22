<script>

pos_fucntion = {

	test:function(){
		alert(' Click anyware pos_fucntion:test(){}');
	}, // Test()

	test2:function(){
		alert('pos_fucntion:test2(){}');
	}, // Test2()

	html_table_mini_search_engine:
		function(jq_input_search_field_selector_obj,jq_table_tr_selector,search_col_index_num=0){
		var filter, tr, td, i;

        filter = jq_input_search_field_selector_obj.val().toUpperCase();
        tr     = $(jq_table_tr_selector);

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[search_col_index_num]; // <-- change number if you want other column to search
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }, // html_table_mini_search_engine()

	ajax:{

		AjaxTest:function(){
			alert('pos_fucntion->ajax->AjaxTest() Test');
		},

		refresh_dinner_table:function(){
			// Section OrderDetails Or  CurerntOrderItems Refresh Update table
			$.ajax({
				type:'POST',
				url:'/pos/section_order_items/',
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				success:function(response){
					// console.log(response);
					// Append Updated table_select_palette after Active Table selected
					$('#section_order_items section').empty().append(response);
				}

		  	});// AJax();

		},// Referesh_Dinner_table -> Ajax()
	}, // Ajax.()
	

} /// # pos_fucntions() Object

$(document).ready(function() {
	// alert('Hello Pos Script');
	{

		// Test Function() // Fucntion testing Mosue Click Event For Whole page 
		// $('body').on('click', function(event) {
		// 	event.preventDefault();
		// 	pos_fucntion.ajax.AjaxTest();
		// });


		// #General by your Selector Test();
		// $('body').on('click','*', function(event) {
		// 	event.preventDefault();
		// 	pos_fucntion.ajax.AjaxTest();
		// });
	}

	$('#search_item_from_subCategory').on('keyup', function() {
        pos_fucntion.html_table_mini_search_engine( $(this) ,"table#item_list_table tr",1);
    })// item Select Search Keyup()


 	// search for the whole table - all td's. But in My Item table not working (working on other tables )
	// $("#search_item_from_subCategory").keyup(function() {
	//     var value = this.value;

	//     $("table").find("tr").each(function(index) {
	//         if (index === 0) return;

	//         var if_td_has = false; //boolean value to track if td had the entered key
	        
	//         $(this).find('td').each(function () {
	//             if_td_has = if_td_has || $(this).text().indexOf(value) !== -1; //Check if td's text matches key and then use OR to check it for all td's
	//         });

	//         $(this).toggle(if_td_has);

	//     });
	// });


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
	{{-- Create Customer Id and select From Exsiting when clicked Table --}}
	$('body').on('click','[data-table_id]' , function(event) {
		event.preventDefault();
		var table_id =  $(this).data('table_id');

		// if (confirm("Select Table:" + table_id)) { 
		if (true) { 
			// alert(this);	
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
			
			// Section OrderDetails Or  CurerntOrderItems Refresh Update table
			pos_fucntion.ajax.refresh_dinner_table();
			
		}
	});


	// Item Click Event for add more Items to Runing OrderDetails Table 
	$('body').on('click', 'tr.item_select_list', function(event) {
		event.preventDefault();
		console.log(this);
		var item_id = $(this).data('item_id');

		// Add item to OrderDetails by Order_id in Orders Tables
		$.ajax({
			type:'POST',
			url:'/pos/item_add_to_order_details/'+item_id,
			data:{item_id:item_id},
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success:function(response){
				console.log(response);
				// alert(response);
			}
      	});

		// Section OrderDetails Or  CurerntOrderItems Refresh Update table
		pos_fucntion.ajax.refresh_dinner_table();

	}); 
	




	$('body').on('click', '#check_out', function(event) {
		// console.log(this);
		$.ajax({
			type:'POST',
			url:'/pos/check_out/',
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			success:function(response){
				console.log(response);
				alert(response);
			}
      	});
	});
		
		


}); // # Jquery 




</script>
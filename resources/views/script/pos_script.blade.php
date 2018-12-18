<script>
pos_fucntion = {

	test:function(){
		alert(' Click anyware pos_fucntion:test(){}');
	 }, // Test()

	test2:function(){
		alert('pos_fucntion:test2(){}');
	 }, // Test2()

	html_table_mini_search_engine:function(jq_input_search_field_selector_obj,jq_table_tr_selector,search_col_index_num=0){
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

	html_table_mini_search_engine_for_all_col:function(jq_input_field_selector){
		// search for the whole table - all td's. But in My Item table not working (working on other tables )
		$(input_field).keyup(function() {
		    var value = this.value;

		    $("table").find("tr").each(function(index) {
		        if (index === 0) return;
		        var if_td_has = false; //boolean value to track if td had the entered key
		        
		        $(this).find('td').each(function () {
		            if_td_has = if_td_has || $(this).text().indexOf(value) !== -1; //Check if td's text matches key and then use OR to check it for all td's
		        });

		        $(this).toggle(if_td_has);

		    });
		});
	 },  // html_table_mini_search_engine_for_all_col()

	ajax:{
		AjaxTest:function(){
			alert('pos_fucntion->ajax->AjaxTest() Test');
		},

		// OrderItems for 
		get_section_order_cart:function(){
			// Section OrderDetails Or  CurerntOrderItems Refresh Update table
			$.ajax({
				type:'POST',
				url:'/pos/section_order_cart/',
				success:function(response){
					// console.log('get_section_order_cart');
					// console.log(response);
					// Append Updated section_table_palette after Active Table selected
					$('#section_order_items section').empty().append(response);
				}

		  	});// AJax();
		},// Referesh_Dinner_table -> Ajax()


		// status change [empty->to->hold->...] Table_talette[1,2,3,4,5 btn's]
		select_dinner_table_by_id:function(table_id){
			$.ajax({
				type:'POST',
				url:'/pos/select_dinner_table_by_id/'+table_id,
				data:{id:table_id},
				success:function(response){
					console.log('select_dinner_table_by_id');
					console.log(response);
					// Append Updated section_table_palette after Active Table selected
					$('#section_table_palette div').empty().append(response);
				}
	      	});
		 }, // select_dinner_table_by_id(table_id)


		add_item_to_section_order_card_table:function(item_id){
			$.ajax({
				type:'POST',
				url:'/pos/add_item_to_section_order_card_table/'+item_id,
				data:{item_id:item_id},
				success:function(response){
					console.log("add_item_to_section_order_card_table");
					console.log(response);
					// alert(response);
				}
	      	});
		},  // add_item_to_section_order_card_table()


		get_section_menu_item_table_by_subcateogry_id:function(subCategory_id){
			$.ajax({
				url: '/pos/get_section_menu_item_table/'+subCategory_id,
				type: 'POST',
				data: {subCategory_id:subCategory_id},
				success:function(response){
					console.log('get_section_menu_item_table_by_subcateogry_id');
					console.log(response);
					// alert(response);
					$('#menu_item_select_table').empty().append(response);
				}
	      	});
		}, // get_section_menu_item_table_by_subcateogry_id(SubCategory_id)

		get_menu_sub_category_table:function(){
			$.ajax({
				url: '/pos/get_menu_sub_category_table/',
				type: 'POST',
				success:function(response){
					console.log('get_menu_sub_category_table');
					console.log(response);
					// alert(response);
					$('#menu_item_select_table').empty().append(response);
				}
	      	});
		}, // get_menu_sub_category_table();

		check_out_active_order_or_table:function(){
			$.ajax({
				type:'POST',
				url:'/pos/check_out/',
				success:function(response){
					console.log('check_out');
					console.log(response);
					window.open('/pos/check_out/', "Print_bill", "width=400,height=600").document.write(response)
					// alert('check_out');
					// $('#test').append(response);
				}
		   	 });

		 }, // check_out_current_order()

		abort_order:function(){
			$.ajax({
				type:'POST',
				url:'/pos/abort_order/',
				success:function(response){
					console.log('abort_order');
					console.log(response);
					// alert(response);
					$('#section_table_palette div').empty().append(response);
				}
	      	});
		},

	 }, // Ajax.()	

} /// # pos_fucntions() Object



$(document).ready(function() {

	$('body').on('click','selectores', function(event) {
		event.preventDefault();
		pos_fucntion.ajax.AjaxTest();
	 });
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	

	$('#search_item_from_subCategory').on('keyup', function() {
        pos_fucntion.html_table_mini_search_engine( $(this) ,"table#menu_item_list_table tr",1);
     })// item Select Search Keyup()

	
	// SubCategory menu-list Generation with Ajax req
	$('a[id^="subCategory_id__"').click(function(event) {
		// console.log(this);
		var subCategory_id = $(this).attr('data-subCategory_id');
		// console.log(subCategory);

		// Subcategory_item_menu bootsrap Card/table Title Set as per Sub_Category_name
		$('#category_menu_navbar .card-header h4.card-title').text($(this)[0].text);
		// set PlaceHolder value as per Subcateogry Name in search field
		$("#search_item_from_subCategory").attr('placeholder','Search in '+$.trim($(this)[0].text) +' [alt+f2]');
			
		pos_fucntion.ajax.get_section_menu_item_table_by_subcateogry_id(subCategory_id)

	}); // # Ajax() Get and Append Items From SubCategory_id


	// Active table by btn ( Current Table )
	{{-- Create Customer Id and select From Exsiting when clicked Table --}}
	$('body').on('click','[data-table_id]' , function(event) {
		event.preventDefault();
		var table_id =  $(this).data('table_id');

		swal("Select Table : " + table_id, {
            buttons: ["No", "Yes"],
      	}).then((value) => {
			if (value) {
				// [empty->hold->unpaid->empty] Select Dinner table or ,change Current active Dinner Table
				pos_fucntion.ajax.select_dinner_table_by_id(table_id);
				// Section OrderDetails Or  CurerntOrderItems Refresh Update table
				pos_fucntion.ajax.get_section_order_cart();
			}
        });	

	}); // Dinner Table Select

	
	// Item Click Event for add more Items to Runing OrderDetails Table 
	$('body').on('click', 'tr.item_select_list', function(event) {
		event.preventDefault();
		// console.(this);
		var item_id = $(this).data('item_id');

		// Add item to OrderDetails by Order_id in Orders Tables
		pos_fucntion.ajax.add_item_to_section_order_card_table(item_id);

		// Section OrderDetails Or  CurerntOrderItems Refresh Update table
		pos_fucntion.ajax.get_section_order_cart();
	}); // Add Item to Cart
	
	
	// CheckOut Order_id & Table
	$('body').on('click', '#check_out', function(event) {
		// console.log(this);
		pos_fucntion.ajax.check_out_active_order_or_table();

	
	}); // CheckOut
		
	
	// Abort Current Table/Order ( records deleted )
	$('body').on('click', '#abort_order', function(event) {
		event.preventDefault();

		// if (confirm("Clear table( Delete Data) : ")) { 
		// 	pos_fucntion.ajax.abort_order();	
		// 	$('#section_order_items section div card').empty();
		// 	pos_fucntion.ajax.get_section_order_cart();
		// }

		swal("Are you sure you want to Abort/Cancel Order ? Table({{ Session::get('active_table') }} )", {
            buttons: ["No", "Yes"],
      	}).then((value) => {
			if (value) {
				pos_fucntion.ajax.abort_order();	
				$('#section_order_items section div card').empty();
				pos_fucntion.ajax.get_section_order_cart();                
			}
        });

	}); // abort_order Click


	$('body').on('click', '#process', function(event) {
		event.preventDefault();
		alert('process');

	});
	


}); // # Jquery




{

	// 
	// --------KeyBoard Sortcuts for making User Friendly Enverment 
	// 

	$(document).keydown(function(e) {	
		var keyCode = e.keyCode || e.which;
		console.log(keyCode+' key pressed');
	    // if(e.key == "c" && e.ctrlKey) {
	    //     console.log('ctrl+c was pressed');
	    //     $('#search_item_from_subCategory').focus();
	    // }
	});


	// Search Item within SubCategory  (Shift+ctrl key)
	$(document).bind('keydown', function(event) {
		if( event.shiftKey && event.ctrlKey  ) {
	        // alert('Search item by SubCateogry');
	        $('input#search_item_from_subCategory').focus();
	    }
	});


	// Select table By SortCut KEY
	$(document).bind('keydown', function(event) {
		if( event.shiftKey && event.which === 84  ) {

			swal({
			  content: {
			    element: "input",
			    attributes: {
			      placeholder: "Select Table :"
			    },
			  },
			}).then((value) => {
				if (value) {
					console.log(value);
					// alert('you pressed SHIFT+T '+ table_id);
					//  // [empty->hold->unpaid->empty] Select Dinner table or ,change Current active Dinner Table
					pos_fucntion.ajax.select_dinner_table_by_id(value);
					//	// Section OrderDetails Or  CurerntOrderItems Refresh Update table
					pos_fucntion.ajax.get_section_order_cart();
				}
	        });
	        

	    }
	});// Select Table By Shift+T Key


	// CheckOut order by SHift + C 
	$(document).bind('keydown',function(){
		if (event.shiftKey && event.which == 67) {
			// console.log(this);
			pos_fucntion.ajax.check_out_active_order_or_table();
		}
	}); // Checkout


	// Abourt/ Cancel order by SHift + x 
	$(document).bind('keydown', function(event) {
		if ( event.shiftKey && event.which == 88 ) {
			event.preventDefault();
			if (confirm("Cancel Order ( Delete Data ) ")) { 
				pos_fucntion.ajax.abort_order();	
				pos_fucntion.ajax.get_section_order_cart();
			}
		} 
	}); //  Abourt Order


	


 }
</script>
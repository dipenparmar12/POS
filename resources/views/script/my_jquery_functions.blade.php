<script>
    my_js_functions = {
    	test:function(){
    		alert('invocked from my_js_functions');
    	} // #test()

    	,test1:function(category){
    		console.log(category);
    	}// #test(data)

        ,populate_form: function (json_data){
    		// console.log(json_data);
            $.each(json_data, function(table_field_name, value) {
                // console.log(table_field_name);
                // console.log(value);
                var element_name = $('[name='+table_field_name+']');
                var input_element_type = element_name.prop('type'); // You usually want prop() rather than attr().

                	// console.log(input_element_type);
                    // console.log(table_field_name,element_name[0]); 
                    // console.log(table_field_name + " " + input_element_type);
                    // console.log(element_name,input_element_type);

                    switch(input_element_type)  
                    {  

                        case "select-one" :   
                                $("option").each(function(){
                                    // console.log(this.value);
                                    if (this.value == value) { this.selected=true;}
                                });    
                            break;

                        case "text" :  case "date" :  case "textarea":  case "number": case "hidden":
                            element_name.val(value);   
                            break;

                        case "radio" :  //case "checkbox": 
                                // console.log(element_name);
                             $(element_name).each(function(){
                                // console.log(value);
                                // console.log(this);
                                if(this.value == value) { $(this).prop("checked", true); } 
                            });   
                            break;

                        case "checkbox": 
                             // console.log(element_name);
                             $(element_name).each(function(){
                                console.log(value);
                                console.log(this);
                                if(this.value == value) { element_name.attr("checked", true); } 
                            });   
                            break;

                        // case "hidden":  
                            // $(element_name).each(function(){
                            //     console.log(value,this)
                            //     console.log(this.type);
                            //     if (this.type == 'hidden') {
                            //         element_name.disabled = true;

                            //     }

                            //         // $(element_name).attr("checked", true);
                            //     if(this.value == value) { 
                            //         element_name.attr("checked",value); 
                            //     } 
                            // });   
                            // break;                                

                        // case "checkbox": 
                        //     $(element_name).each(function(){
                        //         alert(this,value);
                        //         if(this.value == value) { element_name.prop("checked",true); } 
                        //     });   
                        //     break;

                        // case "checkbox":
                        //     (element_name).each(function(){
                        //        if($(this).attr('value') == value) {  $(this).attr("checked",value); } 
                        //        else{ $(this).attr("checked",false); }
                        //     });
                        //     break;
                    } 
               
            }); // End of each loop
        } // End of populate(json_data) fun()


        ,escapeSpecialChars: function(jsonString) {
            return jsonString.replace(/\n/g, "\\n")
                .replace(/\r/g, "\\r")
                .replace(/\t/g, "\\t")
                .replace(/\f/g, "\\f");
        } // Helper Function for escaping json multi line errors 
    

    }
</script>
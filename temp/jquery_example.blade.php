<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script>
	$(document).ready(function(){

		// Select any element synstax 
		$('p#p_tag').click(function(event){
			alert(' clicked ' + ''  ) ;
			console.log(this); // Selects the current HTML element
			console.log(this.id); // return Id of p tag

		});


		//  Hide any Element  OnClick event
		$('#p_hide').click(function(){ 
			alert('this going to hide and show again, req 2 sec to done this job')
			$(this).hide();
			$(this).show(2000); // show element it took 2 sec to show slowly in body
		});


		// Get any Attribute Value and store in some variable
		$('#get_attr_value').click(function(event) {
			event.preventDefault();
			var value = $(this).attr('class');
			alert(value);
		});

		$('#btn_toggle').click(function(event) {
			$('#p_toggle').toggle();
		});

		$('#btn_fade_toggle').click(function(event) {
		    $("#p_fade_toggle").fadeToggle("slow");
		    // $("#p_fade_toggle").fadeToggle(3000);

		    // $(selector).fadeTo(speed,opacity,callback);
		    // $('p').fadeTo(1000,0.5,fucntion(){alert(" do someting alert or anything else ");});
		});	


		// Hover Event Mouse focus and leave
		$('#hover_div').hover(function() {
			alert('Thanks ');
		}, function() {
			alert('good By take care');
		});


		// focus Event
		$('#input_focus').focus(function(event) {
			$(this).css('background-color','green');
			$(this).css('padding','10px');
		});
		// blur Event + css attr modify
		$('#input_focus').blur(function(event) {
			$(this).css('background-color','#ccc');
		});



		// multiple events in sigle element 
		$('#multiple_event').on({
			mouseenter : function(){
				alert('mouse entered');
			},
			mouseleave : function(){
				alert(' mosue Leave bye Bye');
			},
			click: function(){
				alert(' Woow mouse Clicked');
			}
		});


		// Get Text, Html, val
		$("#get").click(function(event) {	
			var text = $('#get_text').text();
			var html = $('#get_html').html();
			var value= $('#get_val').val();

			alert( ' Plain Text:'+ text + '\n' +' html: '+ html + '\n value: '+ value);

			$('#set_text').text(" Plain text value ");
			$('#set_html').html(" <h1>This is Vlaue</h1> ");
			$('#set_val').val(" Any value for input ");

		});

		//  Chagne Dynamacly color of whole body by attr setter 
		$('#set_attr_value').keypress(function(event) {
			var get_color = $('#set_attr_value').val();
			$('body').attr({
				style: 'color:'+ get_color
			});
			// alert($('#set_attr_value').val());
		});



		//  -------------- Effects - Hide and Show -------------------
		// $(selector).hide(speed,callback);
		// $("p").hide();
		// $("p").show();
		// $("p").toggle(); 
 		// $("#div1").fadeIn();  	  //  fade in a hidden element.
        // $("#div2").fadeIn("slow"); // fadeout a hidden element. slowly
        // $("#div3").fadeIn(3000);   //  fadein a hidden element and it took 2sec to complate task.
	    // $("#div1").fadeToggle();
	    // $("#div2").fadeToggle("slow");
	    // $("#div3").fadeToggle(3000);

	    
		//  --------------  animate() - Uses Queue Functionality ------------------- 
	    //  multiple properties can be animated at the same time:
		// $("div").animate({
		//       left: '250px',
		//       opacity: '0.5',
		//       height: '150px',
		//       width: '150px'
		//   });

	    // $("div").animate({
	    //     left: '250px',
	    //     height: '+=150px',
	    //     width: '+=150px'
	    // });		

	    // var div = $("div");
	    // div.animate({height: '300px', opacity: '0.4'}, "slow");
	    // div.animate({width: '300px', opacity: '0.8'}, "slow");
	    // div.animate({height: '100px', opacity: '0.4'}, "slow");
	    // div.animate({width: '100px', opacity: '0.8'}, "slow");



		//  -------------- Get Attributes - attr() -------------------
		// $(selector).attr("attribute_name");  // get the value of any attribute
		// $("#any_id").attr("href");  // get the value of the href attribute

		// set both the href and title attributes at the same time:
		// $("#testing").attr({
	  	//       "href" : "https://www.google.com/",
	  	//       "title" : "jQuery Tutorial"
	  	//   });
		

		//  -------------- jQuery - css() Method -------------------
		// $("p").css("background-color"); // return the background-color value of the FIRST matched element:
		// $("p").css("propertyname","value"); // set css value
		// $("p").css("background-color", "yellow"); // set css property and value
		// css({"propertyname":"value","propertyname":"value",...}); // set multiple css values  
		// $("p").css({"background-color": "yellow", "font-size": "200%"});


		//  -------------- jQuery - Add Elements -------------------
		// $("p").append("Some appended text.");       // inserts content AT THE END of the selected HTML elements.
        // $("p").prepend("<b>Prepended text</b>. ");  // inserts content AT THE BEGINNING of the selected HTML elements.


        //  -------------- jQuery - Add Elements ( Elements/Content ) -------------------
        // $("#div1").remove(); // removes the selected element(s) and its child elements.
		// $("#div1").empty(); // removes the child elements of the selected element(s).
		// $("p").remove(".test"); // removes all <p> elements with class="test":  
		// $("p").remove(".test, .demo"); // removes all <p> elements with class="test" or class="demo":  


		//  -------------- jQuery - Get and Set CSS Classes -------------------
		// $("h1").addClass("blue"); // Adds one or more classes to the selected elements
		// $("h1, h2, p").addClass("blue"); // Adds one or more classes to the selected multiple elements
		// $("h1, h2, p").removeClass("blue"); // remove class from selected elements 
	    // $("div").toggleClass("blue");


		//  --------------  -------------------



	})
</script>

<div>

	<hr>
		<p id="p_tag">1st example Click </p>
		<p id="p_hide"> This should be hidden click here  </p>
		<button id="get_attr_value" class="btn btn-success btn-sm"> get any attr value </button>
	<hr>

		{{-- <div >
			<button id="btn_toggle">toogle Me</button>
			<button id="btn_fade_toggle"> Fade toogle Me</button>

			<p id="p_toggle">Toggle ME, Toggle ME, Toggle ME, Toggle ME, Toggle ME, Toggle ME, Toggle ME, Toggle ME,   </p>
			<p id="p_fade_toggle"> Fade_Toggle ME, Fade_Toggle ME, Fade_Toggle ME, Fade_Toggle ME, Fade_Toggle ME,   </p>
		</div> --}}

	<hr>
		<p>Hover Event</p>
		<div id="hover_div" style="width:100px; height: 100px ; background-color:blue ">  Hover Me </div>

	<hr>

		<p>Focus Blur Event</p>
		<input id="input_focus" type="text" >

	<hr>
		{{-- <div>
			<p> Attach multiple event handlers to a 'p' element: ( mouseenter, mouseleave , clicke)</p>
			<p id="multiple_event" style="border: 1px solid red ; padding: 13px; "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore sapiente mollitia odit quae quos totam adipisci nesciunt inventore dolorum deserunt deleniti, eius tenetur delectus illum necessitatibus modi distinctio? Blanditiis, quas.</p>
		</div> --}}
	<hr>
		
		<div id="get">
			<p id="get_text"> this is <mark>text</mark> getter in jquery </p>
			<p id="get_html"> this is <mark>HTML element</mark> getter in jquery </p>
			<input id="get_val" type="text" value="Hello This is Input value">
		</div>
	<hr>

		<div id="set">
			<div id="set_text">empty</div>
			<div id="set_html">empty</div>
			<div id="set_val">empty</div>
		</div>
	<hr>

		<div id="attr">
			<input id="set_attr_value" type="text" placeholder="entere color name">
			<input id="set_attr" type="text" value="set Attribute value">
		</div>

</div>
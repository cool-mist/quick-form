function showoncheck(inp){
	id=inp.value;
	if(inp.checked){
			$("#"+id).fadeIn(500);
		document.getElementById(id).value="1";	
		
	}else{
			$("#"+id).fadeOut(500);	
	document.getElementById(id).value="0";	
	}
}
//------------------------------------------Jquery------------------------------------------------------------------

$(document).ready(function (){
	$("#submit").hide();
	$("span[class='error']").hide();
	$("input[type='number']").hide();
	
	$("input[type='number']").keyup(function(){
			
			var checked=jQuery("#form input[type='checkbox']:checked").length;
			
			var zero = $('#form').find("input[type='number']").filter(function(){if($(this).val()<=0) return $(this);});
			if(zero.length == 9-checked) $('#zero').hide();
			else $('#zero').show();               //  Show/Hide "Value <=0" Error
			
			if (jQuery("#form span:hidden").length == 2) $("#submit").show();
			else $("#submit").hide();      // Show/Hide "Submit" button
			
	});
	$("input").click(function(){
			if($(this).is(":checkbox") ) showoncheck(this);          //Show/Hide number field when checked
			
			var checked=jQuery("#form input[type='checkbox']:checked").length;	
			if( !checked) $("#one").fadeIn(0);
			else $("#one").fadeOut(0);                // Show/Hide "check atleast one" error
			
			var zero = $('#form').find("input[type='number']").filter(function(){if($(this).val()<=0) return $(this);});
			if(zero.length == 9-checked) $('#zero').hide();
			else $('#zero').show();               //  Show/Hide "Value <=0" Error
			
			if (jQuery("#form span:hidden").length == 2) $("#submit").show();
			else $("#submit").hide();      // Show/Hide "Submit" button
			
			});
		
	
});

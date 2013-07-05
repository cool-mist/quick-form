function showoncheck(inp){
	id=inp.value;
	document.getElementById(id).style.visibility='hidden';
	document.getElementById('e'+id).style.visibility='hidden';
	document.getElementById(id).value="0";
	if(inp.checked){
		document.getElementById(id).style.visibility='visible';
		document.getElementById(id).value="1";	
	}
}
function checknum(inp){
	id='e'+inp.id;
	if (document.getElementById(inp.id).value<=0) {
		document.getElementById(id).style.visibility='visible';
	}
	else{
		document.getElementById(id).style.visibility='hidden';		
	}
}


//------------------------------------------Jquery------------------------------------------------------------------

$(document).ready(function (){
	$("#submit").hide();
	$("#one").css("visibility","hidden");	
	$("label").click(function (){
		$(this).css("color","green").slideUp(1000).slideDown(1000);
	});
	$("input").click(function ()
	{
		if( ($("#input_text").css("visibility") == "hidden") && ($("#input_radio").css("visibility") == "hidden") && ($("#input_checkbox").css("visibility") == "hidden") 
		&& ($("#textarea_").css("visibility") == "hidden") && ($("#input_password").css("visibility") == "hidden" )
		&& ($("#input_email").css("visibility") == "hidden" ) && ($("#input_date").css("visibility") == "hidden" )
		
		 )
		{
			$("#one").css("visibility","visible");	
		}
		else{
			$("#one").css("visibility","hidden");	
		}		
		
		if ( ($("#einput_text").css("visibility") == "hidden") && ($("#einput_radio").css("visibility") == "hidden") && ($("#einput_checkbox").css("visibility") == "hidden") 
		&& ($("#etextarea_").css("visibility") == "hidden") && ($("#einput_password").css("visibility") == "hidden" ) 
		&& ($("#one").css("visibility") == "hidden" ) && ($("#einput_email").css("visibility") == "hidden" ) && ($("#einput_date").css("visibility") == "hidden" )
		
		
		){
			$("#submit").show();	
				
		}else{
		
		$("#submit").hide();}	
	});
	
});

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
	$("label").click(function (){
		$(this).css("color","green").slideUp(1000).slideDown(1000);
	});
	$("#chk").click(function ()
	{
		if ( ($("#etext").css("visibility") == "hidden") && ($("#eradio").css("visibility") == "hidden") && ($("#echeckbox").css("visibility") == "hidden") 
		&& ($("#etextarea").css("visibility") == "hidden") ) {
			$("#submit").show();	
			$("#chk").hide();	
		}	
	});
});

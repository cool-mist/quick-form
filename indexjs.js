function showoncheck(inp){
	id=inp.value;
	if(inp.checked){
			$("#"+id).fadeIn(500);
		document.getElementById(id).value="1";	
		
	}else{
			$("#"+id).fadeOut(500);	
	document.getElementById(id).value="0";
	$("#e"+id).fadeOut(0);	
	}
}
function checknum(inp){
	id='e'+inp.id;
	var v=document.getElementById(inp.id).value;
	if (v <= 0 || !$.isNumeric(v)) {
		$("#"+id).fadeIn(500);
		}
	else{
		$("#"+id).fadeOut(0);		
	}
}

//------------------------------------------Jquery------------------------------------------------------------------

$(document).ready(function (){
	$("#submit").fadeOut(0);
	$("span[class='error']").fadeOut(0);
	$("input[type='number']").fadeOut(0);
	$("input[type='number']").keyup(function(){
			
			checknum(this);
			var visible = $('#form').find('span').filter(function(){
   		if($(this).css('display') == 'block')   
       	return $(this);
			});
			if( visible.length == 0 ) $("#submit").fadeIn(500);			
			else$("#submit").fadeOut(500);		
	});
	$("input").click(function(){
			if($(this).is(":checkbox") )
				showoncheck(this);
			else 
				checknum(this);
			if(jQuery("#form input[type='checkbox']:checked").length == 0) {
				$("#one").fadeIn(0);
			}
			else{
				$("#one").fadeOut(0);
			}
			var visible = $('#form').find('span').filter(function(){
   		if($(this).css('display') == 'block')   
       	return $(this);
			});
			//alert(visible.length);
			if( visible.length == 0 ) {
				$("#submit").fadeIn(500);			
			}
			else{
				
				$("#submit").fadeOut(500);
			}
			
	
			//alert(jQuery("#form span[display=block]").length);
});
	
	
});

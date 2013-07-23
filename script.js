$(document).ready( function () {
	$("#newuser").hide();
	$("#nusertog").click( function () {
		$(this).css('visibility','hidden');
		$("#newuser").slideDown();	
	
	});

});
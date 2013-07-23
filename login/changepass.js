$(document).ready(function () {
	$("#submit").click(function() { 
		if( ( $("#new").val() == "") || ( $("#new").val() != $("#cnew").val()) ){
			alert("Passwords Must match and cant be empty ");		
		}
		if ($("#old").val()=="" ) alert("Old password can't be empty");
	});

});
<?php
	include '../db.php';
	
	
	$con=connect();
	$r=0; // Number of rows
	$email=$_POST['nemail'];
	$sql="select * from Users where Email = '$email' ";
	$result = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)) {
		$r++;
	
	}
	if($r) {
		echo "User already exists..<a>Forgot Password??</a>";
		
	}
	else{
		$pass=substr(md5(time()),0,6);
		$sql="insert into Users values('$email','$pass');";
		$res=mysqli_query($con,$sql);
		if($res) {
			echo "User Created Succesfully and Password has been Sent to ".$email.", <a href = '/formbuilder/' >Click here</a> to login ";
			$msg= "Your Password For Accessing Form Creator Is ".$pass;
			$mail($email,"Your Password",$msg);
			
					
		}
		else {
			echo "Some Error Occurred. Please Go Back And Try Again ";		
		}
		
	
	}
	mysqli_close($con);
	

?>
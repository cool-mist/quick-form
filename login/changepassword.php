<?php
	echo '<html><head>';
	include 'access.php';
	include 'bar.php';
	if (isset($_POST['submit']) )  {
		$new=$_POST['new'];
		
		if ( $_SESSION['pass']==$_POST['old']  && ($_POST['new']==$_POST['cnew']) && ($_POST['new']!=""))
		{
			include '../db.php';
			$con=connect();
			$sql="update Users set Pass='$new' where Email = '$email';";
			$result=mysqli_query($con,$sql);
			if($result) {
				echo '<span class="help">Password Changed Succesfully</span><br />';
				$_SESSION['pass']=$new;
			}
			else{
				echo "<span class='help' >DataBase not available, please try again later</span>";			
			}
		}
		else {
			echo '<span class="help">Error Occurred.. Check your Old password</span><br />';		
		}
		mysqli_close($con);
	
	}
	
	
	
	
	
	echo '<link rel="stylesheet" charset="utf-8" type="text/css" href="stylesheet.css" />';
	echo '<link rel="stylesheet" charset="utf-8" type="text/css" href="formstyle.css" /><title>Change Password </title>';
	echo '<script type="text/javascript" src="jquery.js" ></script>';
	echo '<script type="text/javascript" src="changepass.js" ></script>';
	
	echo '</head>';
	echo '<body><div id="form" /><form method="post" action="changepassword.php ">';
	echo '<label for="old" class="pass" >Old Password :</label><input type="password" name="old" id="old" /><br />';
	echo '<label for="new" class="pass">New Password :</label><input type="password" name="new" id="new"/><br />';
	echo '<label for="cnew" class="pass">Confirm Password :</label><input type="password" id="cnew" name="cnew" />';
	echo '<br /><input type="submit" name="submit" id="submit" value="change" /><br /><br />';
	echo '</div>';
	


?>
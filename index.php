<?php
	session_start();
	if(isset($_SESSION['email'])){
		header("Location: login");	
	}
	include 'db.php';
	$con = connect();
	$email=$_POST['user'];
	$sql = "select * from Users where Email = '$email' ;";
	$result=mysqli_query($con,$sql);
	if(!$result)
	{
		echo "<span class='panel' >Database Error, Please Try Again</span>";	
		echo "<br />";	
	}
	else {
		while($row=mysqli_fetch_array($result) ){
			if($row['Pass']==$_POST['pass'] ){
				session_start();
				$_SESSION['email']=$email;
				$_SESSION['pass']=$_POST['pass'];
				header("Location: login/");
				exit;			
			}
			else echo "<span class = 'panel' >Bad Username Or Password, try again :( </span><br />";	
		}	
	}
	mysqli_close($con);
	
	
	
?>
<html><head><title>Form Builder</title>
	<link rel="stylesheet" charset="utf-8" type="text/css" href="stylesheet.css" />
	<link rel="stylesheet" charset="utf-8" type="text/css" href="formstyle.css" />
	<script type="text/javascript" src='login/jquery.js' ></script>
	<script type="text/javascript" src='script.js'></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  	<?php include 'header.php' ?>	
	</head>
<body>
<div class='center' >
	<div class='form' id='olduser'>
	
	<form  action="index.php" method="post" >
	<h4>Existing User Login</h4>

		<label for = 'user'>Email :</label>
			<input type= 'email' name='user' id='' value= '' /><br /><br />

		<label for = 'pass'>Password :</label>
			<input type= 'password' name='pass' id='' value= '' /><br /><br />

		<input type='submit' class='vsub' name='osub' value='Go'/>
		

	</form>
	<input type='button' value='New User' id= 'nusertog' />

	</div>


	<div class='form' id = 'newuser'>
	
	<form action="/formbuilder/signup/index.php" method='post' >
		<h4>Enter your Email to get Started</h4>
		<label for = 'nemail'>Email :</label>
			<input type='email' name='nemail' id='' value= '' /><input type='submit' class='' name='nsub' value='Go' />		
	</form>	
	</div>
</div>	
</body>
	
	
</html>
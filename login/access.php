<?php
	session_start();
	$email=$_SESSION['email'];
	$pass=$_SESSION['pass'];
	if(!isset($email)){
		header("Location: ../");
		exit;
	}

?>
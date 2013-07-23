<?php
	$host='localhost';
	$db='surya';
	$user='surya';
	$pass='surya';
	
	function connect(){
		global $host,$db,$user,$pass;
		$con=mysqli_connect($host,$user,$pass,$db) or die ("Try again Later, Database Unavailable ");
		return $con;	
	
	}
?>
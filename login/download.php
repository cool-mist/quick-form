<?php
	include 'access.php';
	header("Content-type: text/plain");
	header("Content-Disposition: attachment; filename='formstyle.css' ");
	readfile('formstyle.css');
	
?>
<?php
	$order = $_POST['order'];
	$f=$_POST['formdata'];
	
	$formdata=unserialize($f);
	$form=array();
	
	/*
	
		$form = array(1=>array("type" => "asdsad" name"=>"asd",...),2=>array(),....)
	
	
	
	
	//
	*/
	$data=$_POST['data'];
	foreach($data as $q=>$w){
		echo $q."<br />";
		foreach($w as $e=>$r){
			echo $e.":".$r."<br \>";
		}
		echo "<br />";
	}
	

?>
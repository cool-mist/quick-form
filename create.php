<?php
	
	$order = $_POST['order'];
	$f=$_POST['formdata'];
	$rowata=$_POST['data'];
	$formdata=unserialize($f);
	$form=array();
	$row=array();
	$w=0;
	//Check for unique positions
	$uniquearray=array_unique($order);
	if(count($order) != count($uniquearray) ){
		
		echo "<html><meta http-equiv='refresh' content='3; url = javascript:history.go(-1)'></html>"; 
		echo "<span class='error'>Your order layout contains duplicate elements..You will be redirected. Or follow <a href='javascript:history.go(-1)'>this link</a> to correct it</span><hr />";
		exit;
			
	}
	
	/*
	
		$form = array(1=>array("type" => "asdsad" name"=>"asd",...),2=>array(),....)
	
	
	
	
	//
	*/
	//echo $rowata['text0']."<br />";
	//print_r($formdata);
	//echo "<br /><br />";
	//print_r($rowata);echo "<br /><br />";
	
	foreach($formdata as $type=>$count) {
		
		for($q=0;$q<$count;$q++){
			$row['type']=$type;
			$row['content']=$rowata[$type.$q];
			$row['position']=$order[$w];
			$w++;
			$form[]=$row;
			$row=NULL;
		}
	}
	usort($form, function($a, $b) {
    	return $a['position'] - $b['position'];
	});
	//print_r($form);
	//----------------------------------Create HTML Source From $form array ---------------------------------//
	
	/* Sample
	
	
	Array
(
    [0] => Array
        (
            [type] => text
            [content] => Array
                (
                    [label] => gfjh
                    [name] => hhj
                    [id] => jhvhjv
                    [value] => kjbjnm
                )

            [position] => 1
        )

    [1] => Array
        (
            [type] => radio
            [content] => Array
                (
                    [label] => vnn 
                    [name] => bmnbknmv
                    [id] => khvkbnv
                    [value] => kvbn
                )

            [position] => 2
        )

    [2] => Array
        (
            [type] => checkbox
            [content] => Array
                (
                    [label] => vkbbnv
                    [name] => knbvn
                    [id] => nbvn
                    [value] => hgvbn
                )

            [position] => 3
        )

    [3] => Array
        (
            [type] => textarea
            [content] => Array
                (
                    [label] => mnbvmv
                    [name] => nbvm
                    [id] => bmbvmnv
                    [value] => mnv
                )

            [position] => 4
        )

)*/

	echo "<html><head><title></title></head>\n\n";
	echo "<body>\n\n";
	echo "\t<form action=\"\" method=\"\" >\n\t\t";
	foreach($form as $a=>$input){
			$type=$input['type'];
			$label=$input['content']['label'];
			$name=$input['content']['name'];
			$id=$input['content']['id'];
			$value=$input['content']['value'];
			echo "<label for = '".$name."'>".$label."</label>\n\n\t\t\t";
			echo "<input type= '".$type."' name='".$name."' id='".$id."' value= '".$value."' /><br />\n\t\t";
		}	
	
	echo "</form>\n\n</body>\n\n</html>";


	
?>
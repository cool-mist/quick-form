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
	
	
	
	
	*/
	
	
	foreach($formdata as $type=>$count) {
		
		for($q=0;$q<$count;$q++){
			$t=explode('_',$type);
			$row['tag']=$t[0];
			$row['type']=$t[1];
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
	ob_start();
	echo "<html><head><title></title><link rel='stylesheet' charset='utf-8' type='text/css' href='formcss.css' />  	<img src='img/header.jpg' id='header'/>	</head>\n\n";
	echo "<body><div id='form'>\n\n";
	echo "<form action=\"\" method=\"\" >\n\n";
	foreach($form as $a=>$input){
			$tag=$input['tag'];
			$type=$input['type'];
			$label=$input['content']['label'];
			$name=$input['content']['name'];
			if($name == '' ) $name = $type;
			$id=$input['content']['id'];
			$value=$input['content']['value'];
			$options=$input['content']['option'];
			echo "<label for = '".$name."'>".$label."</label>\n\t\t\t";
		
			if($options){
				 if($type=='radiog' ) {
					 for($o=1;$o<=$options;++$o) {
					 	echo "<input type='radio' name='".$name."' value='opt".$o."' />opt".$o."\n\t\t\t";
					 	if($o % 2 == 0) echo "\n\t\t\t<br />\n\t\t\t";
					 }
					echo "<br />\n\t\t";
				 }
				 else{
				 	echo "<select name = '".$name."'>\n\t\t\t\t";
				 	for($o=1;$o<=$options;++$o){
						echo "<option value='opt".$o."'>Option".$o."</option>\n\t\t\t\t";				 	
				 	}
				 	echo "</select><br /><br />\n\n";
				 }
			}
			else{
			
			echo "<".$tag." type= '".$type."' name='".$name."' id='".$id."' value= '".$value."' ";
			
			if(!($tag== 'input')) {echo "></".$tag."><br />\n\n";}
			else echo "/><br /><br />\n\n";
			}
		}	
	echo"\t\t<input type='submit' />\n\n";
	echo "</form>";
	
	echo "\n\n</div>\n\n";
	$html=ob_get_clean();
	
	
	echo $html;
	echo $start.$end;
	$end = strpos($html,"</div>");
	$start = strpos($html,"<div");
	$html=substr($html, $start,($end-$start+7));
	echo "<br /><br /><div id='op'><h1>Source Code</h1><br /><a href='download.php'>Click here</a> for the css<br />";
	echo "<textarea id='html' readonly onclick='this.focus();this.select()'>".htmlspecialchars($html)."</textarea></div>";
	echo "</body>\n\n</html>";
	
?>
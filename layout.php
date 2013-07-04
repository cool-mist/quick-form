<?php	
	/*
	
	Also Pass form from here .. done
	Layout specifier Array ==> Select Field (1 -- n) is order[] .. done

*/



		$ele=$_POST['elements'];
		
		 // Check empty
		if(count($ele) == 0) 
		{
			header("Location: index.php");
		}		
		
		$num=$_POST['num'];
		$form=array();
		$i=0;$s=1;
		
		for($n=0;$n<4;++$n){
			if(!($num[$n]<=0) ){
				$form[$ele[$i]]=$num[$n];
				$i=$i+1;
			}		
		}
		echo "<html><head><title>Layout</title></head>";
		echo "<body>";
		echo "<form method='post' action='create.php' />";
		echo "<div id='dispall' >";
		foreach($form as $e => $c){
			for($x=0;$x<$c;++$x){
				echo "<label>".$s++.") ".$e."No.".($x+1)."<label/><input type='text' name='"."data"."[".$e.$x."]"."[label]". "' placeholder = 'Label for this field ' />";	
				echo "<input type='text' name='"."data"."[".$e.$x."]"."[name]"."' placeholder = 'Name of this field' />";
				echo "<input type='text' name='"."data"."[".$e.$x."]"."[id]"."' placeholder = 'Id for this field' />";
				echo "<input type='text' name='"."data"."[".$e.$x."]"."[value]"."' placeholder = 'Value of this field' /><br />";
			}
		echo "<br />";
		}
	echo "</div><div id='specify' >";
	for($l=1;$l<$s;++$l){
		echo "<label>".$l."</label> -> <select name='order[]' >";
		for($v=1;$v<$s;++$v){
			echo "<option value='".$v."' ";
			if($v==$l) echo "selected";
			echo " >".$v."</option>";		
		}
		echo "</select>&nbsp;";	
		if($l % 3==0) echo "<br />";
	}
	
	
	echo "</div>";
	echo "<input type='hidden' name= 'formdata' value=" . serialize($form) . "/>";
	echo "<input type='submit' value='Create' name= 'create' />";
	echo "</form>";
		

?>

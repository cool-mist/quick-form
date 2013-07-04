<?php	
		$ele=$_POST['elements'];
		
		 // Check empty
		if(count($ele) == 0) 
		{
			header("Location: index.php");
		}		
		
		$num=$_POST['num'];
		$form=array();
		$i=0;
		
		for($n=0;$n<4;++$n){
			if(!($num[$n]<=0) ){
				$form[$ele[$i]]=$num[$n];
				$i=$i+1;
			}		
		}
		echo "<html><head><title>Layout</title></head>";
		echo "<body>";
		foreach($form as $e => $c){
			for($x=0;$x<$c;++$x){
				echo "<label>".$e."No.".($x+1)."<label/><input type='text' name='".$e.($x+1).'l'. "' placeholder = 'Label for this field ' />";	
				echo "<input type='text' name='".$e.($x+1).'n'."' placeholder = 'Name of this field' />";
				echo "<input type='text' name='".$e.($x+1).'i'."' placeholder = 'Id for this field' />";
				echo "<input type='text' name='".$e.($x+1).'v'."' placeholder = 'Value of this field' /><br />";
			}
		echo "<br />";
		}
	
		

?>

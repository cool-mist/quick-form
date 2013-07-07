<?php	
	/*
	
	Also Pass form from here .. done
	Layout specifier Array ==> Select Field (1 -- n) is order[] .. done

*/	

		$ele=$_POST['elements'];
		
		 // Check empty
		if(count($ele) == 0) 
		{  echo "<html><meta http-equiv='refresh' content='0; url = javascript:history.go(-1)'></html>"; 
			//echo "<span class='error'>You must select atleast one box..You will be redirected. Or follow <a href='javascript:history.go(-1)'>this link</a> to correct it</span><hr />";
			exit;
		}		
		
		$num=$_POST['num'];
		$form=array();
		$i=0;$s=1;
		
		for($n=0;$n<count($num);++$n){
			if(!($num[$n]<=0) ){
				$form[$ele[$i]]=$num[$n];
				$i=$i+1;
			}		
		}
		foreach($form as $e=> $c){
			$count+=$c;		
		}	
		
		echo "<html><head><title>Layout</title><link rel='stylesheet' charset='utf-8' type='text/css' href='stylesheet2.css' /></head>";
		echo "<div class = 'center' ><body>\n";
		echo "<form method='post' action='create.php' >";
		
			
		
		foreach($form as $e => $c){
			for($x=0;$x<$c;++$x){
				echo "<div class='dispall' >\n";
				echo "<label>".$s.") ".$e."No.".($x+1)."</label><br /><input type='text' name='"."data"."[".$e.$x."]"."[label]". "' placeholder = 'Label for this field ' />";	
				echo "<br /><input type='text' name='"."data"."[".$e.$x."]"."[name]"."' placeholder = 'Name of this field' />";
				echo "<br /><input type='text' name='"."data"."[".$e.$x."]"."[id]"."' placeholder = 'Id for this field' />";
				echo "<br /><input type='text' name='"."data"."[".$e.$x."]"."[value]"."' placeholder = 'Value of this field' />";
							
				if($e[strlen($e)-1] == 'g'){
					echo "<br /><input type='number' name = '"."data"."[".$e.$x."]"."[option]"."' placeholder = 'number of options' value = '2' />";				
				}
				echo "<br /><select name='order[]'>";
				for($l=1;$l<=$count;++$l){
						echo "<option value='".$l."' ";
						if($l==$s) echo "selected";
						echo " >".$l."</option>";				
				}
				echo "</select>";
				echo "</div>\n";
				$s++;
			}
		
		}
	echo "<input type='hidden' name= 'formdata' value=" . serialize($form) . "/>";
	echo "<input type='submit' value='Create  > > > ' name= 'create'/>";
	echo "</form></body></div></html>";
		

?>

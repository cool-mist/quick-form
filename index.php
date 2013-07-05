<?php
	
?>
<html>
	
	<head><title>Form Builder</title>
	<script type="text/javascript" src='jquery.js' ></script>
	<script type="text/javascript" src="indexjs.js" ></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  	<link rel="stylesheet" charset="utf-8" type="text/css" href="stylesheet.css" />	
	</head>
	
	<body>
		<form action="layout.php" method="post" >
			<label>Text</label><input type="checkbox"  onchange="showoncheck(this)" value = "text" name="elements[]" />
				<input type="number" onchange="checknum(this)" class="hidden" id="text" name = 'num[]' value="0" />
					<span class='error' id="etext">Must be greater than 0</span>
						<br />
			<label>Radio</label><input type='checkbox' onchange="showoncheck(this)" value = 'radio' name="elements[]" />
				<input type="number" onchange="checknum(this)" class="hidden" id="radio" name = 'num[]' value="0" />
					<span class='error' id="eradio">Must be greater than 0</span>
						<br />
			<label>Checkbox</label><input type='checkbox' onchange="showoncheck(this)" value = 'checkbox' name="elements[]" />
				<input type="number" onchange="checknum(this)" class="hidden" id="checkbox" name = 'num[]' value="0" />
					<span class='error' id="echeckbox">Must be greater than 0</span>
						<br />
			<label>Text-Area</label><input type='checkbox' onchange="showoncheck(this)" value = 'textarea' name="elements[]" />
				<input type="number" onchange="checknum(this)" class="hidden" id="textarea" name = 'num[]' value="0" />
					<span class='error' id="etextarea">Must be greater than 0</span>
						<br />
			<input type="button" id="chk" value="Done" onclick="checksubmit()" /><br />
			<input type = "submit" id="submit" name="submit"/>
			
		
		
		</form>
		
		
	</body>
	
</html>
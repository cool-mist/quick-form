<?php
	
?>
<html>
	
	<head><title>Form Builder</title>
	<link rel="stylesheet" charset="utf-8" type="text/css" href="stylesheet.css" />
	<script type="text/javascript" src='jquery.js' ></script>
	<script type="text/javascript" src="indexjs.js" ></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  	<img src='img/header.jpg' id='header'/>	
	</head>
	
	<body>
		<div class='center'>
		<form action="layout.php" method="post" id="form" >

			<div class='fields' >
			<label><img src='img/text.jpg' />Text</label><br /><input type="checkbox"   value = "input_text" name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_text" name = 'num[]' value="0" /><br />
					
						</div>
			<div class='fields' >
			<label><img src='img/date.jpg' />Date</label><br /><input type='checkbox'  value = 'input_date' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_date" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/email.jpg' />Email</label><br /><input type='checkbox'  value = 'input_email' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_email" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/radio.jpg' />Radio</label><br /><input type='checkbox'  value = 'input_radio' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_radio" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/radiog.jpg' />Radio Group</label><br /><input type='checkbox'  value = 'input_radiog' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_radiog" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/checkbox.jpg' />Checkbox</label><br /><input type='checkbox'  value = 'input_checkbox' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_checkbox" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/selectg.jpg' />Select group</label><br /><input type='checkbox'  value = 'input_selectg' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_selectg" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/password.jpg' />Password</label><br /><input type='checkbox'  value = 'input_password' name="elements[]" /><br />
				<input type="number"  class="hidden" id="input_password" name = 'num[]' value="0" /><br />

						</div>
			<div class='fields' >
			<label><img src='img/textarea.jpg' />Text-Area</label><br /><input type='checkbox'  value = 'textarea_' name="elements[]" /><br />
				<input type="number"  class="hidden" id="textarea_" name = 'num[]' value="0" /><br />

						</div>
			<br /><span class="error" id="zero">Number Greater than 0 </span><br />
			<br /><span class="error" id="one" >Select atleast one field</span><br /><br />
			<input type = "submit" id="submit" name="submit" value='GO --> '/>
			
			
		
		
		</form>
		</div>
		
	</body>
		
</html>
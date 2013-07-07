<?php
	
?>
<html>
	<div class="center">
	<head><title>Form Builder</title>
	<link rel="stylesheet" charset="utf-8" type="text/css" href="stylesheet.css" />
	<script type="text/javascript" src='jquery.js' ></script>
	<script type="text/javascript" src="indexjs.js" ></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  		
	</head>
	
	<body>
	
			
		<form action="layout.php" method="post" id="form" >
	
			<br />
			<label>Text</label><input type="checkbox"   value = "input_text" name="elements[]" />
				<input type="number"  class="hidden" id="input_text" name = 'num[]' value="0" />
					<span class='error' id="einput_text">Must be greater than 0</span>
						<br /><br />
			<label>Date</label><input type='checkbox'  value = 'input_date' name="elements[]" />
				<input type="number"  class="hidden" id="input_date" name = 'num[]' value="0" />
					<span class='error' id="einput_date">Must be greater than 0</span>
						<br /><br />
			<label>Email</label><input type='checkbox'  value = 'input_email' name="elements[]" />
				<input type="number"  class="hidden" id="input_email" name = 'num[]' value="0" />
					<span class='error' id="einput_email">Must be greater than 0</span>
						<br /><br />
			<label>Radio</label><input type='checkbox'  value = 'input_radio' name="elements[]" />
				<input type="number"  class="hidden" id="input_radio" name = 'num[]' value="0" />
					<span class='error' id="einput_radio">Must be greater than 0</span>
						<br /><br />
			<label>Radio Group</label><input type='checkbox'  value = 'input_radiog' name="elements[]" />
				<input type="number"  class="hidden" id="input_radiog" name = 'num[]' value="0" />
					<span class='error' id="einput_radiog">Must be greater than 0</span>
						<br /><br />
			<label>Checkbox</label><input type='checkbox'  value = 'input_checkbox' name="elements[]" />
				<input type="number"  class="hidden" id="input_checkbox" name = 'num[]' value="0" />
					<span class='error' id="einput_checkbox">Must be greater than 0</span>
						<br /><br />
			<label>Select group</label><input type='checkbox'  value = 'input_selectg' name="elements[]" />
				<input type="number"  class="hidden" id="input_selectg" name = 'num[]' value="0" />
					<span class='error' id="einput_selectg">Must be greater than 0</span>
						<br /><br />
			<label>Password</label><input type='checkbox'  value = 'input_password' name="elements[]" />
				<input type="number"  class="hidden" id="input_password" name = 'num[]' value="0" />
					<span class='error' id="einput_password">Must be greater than 0</span>
						<br /><br />
			<label>Text-Area</label><input type='checkbox'  value = 'textarea_' name="elements[]" />
				<input type="number"  class="hidden" id="textarea_" name = 'num[]' value="0" />
					<span class='error' id="etextarea_">Must be greater than 0</span>
						<br /><br />
			
			<span class="error" id="one">Select atleast one field</span><br />
			<input type = "submit" id="submit" name="submit"/>
			
		
		
		</form>

		
	</body>
		</div>
</html>
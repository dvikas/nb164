
<script src="checkbox_validate.js" type="text/javascript"></script>
<?php
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
?>
<form action="" onSubmit="return validate()" method="post">
	
	<label>
		<input type="checkbox" name="hobbies[]" value="c" />Cricket
	</label>
	
	<label>
		<input type="checkbox" name="hobbies[]" value="f" />Football
	</label>
	
	<label>
		<input type="checkbox" name="hobbies[]" value="t" />Tennis
	</label>
	
	<label>
		<input type="checkbox" name="hobbies[]" value="ch" />Chess
	</label>
	
	<label>
		<input type="checkbox" name="hobbies[]" value="b" />Badminton
	</label>
	
	
	<input type="submit" value="I am done!!" />
	
</form>

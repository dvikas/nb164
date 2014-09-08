<?php
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	
?>
<form method="post" action="">
<table border="1">
	<thead>
		<tr>
			<th colspan="2">Please fill details</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Name:</td>
			<td><input type="text" required name="uname" value="" id="" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" autocomplete="off" name="email" value="" id="" /></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password"  required name="password" value="" id="" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="I am done!!" id="" /></td>
		</tr>
	</tbody>
</table>
</form>

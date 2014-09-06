<?php
	echo '<pre>';
	print_r($_POST);
	print_r($_FILES);
	echo '</pre>';
	
?>
<form method="post" action="" enctype="multipart/form-data">
<table border="1">
	<thead>
		<tr>
			<th colspan="2">Please upload file</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Name:</td>
			<td><input type="text" required name="uname" value="Rasmus" id="" /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" autocomplete="off" name="email" value="admin@gmail.com" id="" /></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password"  required name="password" value="12345" id="" /></td>
		</tr>
		<tr>
			<td>Avatar:</td>
			<td><input type="file"  required name="avatar" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="I am done!!" id="" /></td>
		</tr>
	</tbody>
</table>
</form>

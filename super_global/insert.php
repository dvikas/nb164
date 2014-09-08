<?php
	mysql_connect('localhost','root','') or die('Unable to estabish Mysql Connection');
	mysql_select_db('nb164') or die('Unable to Select DB');
echo '<pre>';	
	$fileName = '';	
	if(isset($_FILES['avatar'])){
		$fileName  = uniqid().'_'.$_FILES['avatar']['name']; 
		
		$src = $_FILES['avatar']['tmp_name'];
		$dest = "uploads/$fileName";
			
		if(is_uploaded_file($src)){
			$isMoved = move_uploaded_file($src, $dest);
			if($isMoved == true){
				echo "$dest File Uploaded :) </h4>";
			} else {
				echo "<h4>Upload Fail :( </h4>";
			}
			
		}
	}
	
	if(isset($_POST['email']) && !empty($_POST['email'])){
//print_r($_POST);		
//print_r($_FILES);		
		$_POST['added_date'] = date('Y-m-d H:i:s');
		$_POST['status'] = 1;
		$_POST['avatar'] = $fileName;
		$_POST['password'] = md5($_POST['password']);
//print_r($_POST);		
	
		$query = "INSERT INTO `users` SET ";
		foreach($_POST as $col=>$val){
			$query .= "`$col`='$val',";
		}
		echo "<hr>";
		echo $query = rtrim($query,',');
		echo "<hr>";
		mysql_query($query);
	}

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
			<td>Gender:</td>
			<td>
				<label><input type="radio"  required name="gender" value="0"  />Male</label>
				<label><input type="radio"  checked required name="gender" value="1"  />Female</label>
			
			</td>
		</tr>
		<tr>
			<td>Avatar:</td>
			<td><input type="file"  required name="avatar" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="I am done!!" id="" /></td>
		</tr>
	</tbody>
</table>
</form>

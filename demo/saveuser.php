<?php
	require_once('includes/functions.php');
	require_once('includes/db.php');

	$avatar = ($_POST['gender']=='m') ? 'male.jpg' :'female.jpg';

	pr($_FILES);

	if($_FILES['avatar']['error'] == 0){
		$fileName = uniqid().'_'.$_FILES['avatar']['name'];
		$dest = "./uploads/$fileName";
		$src =  $_FILES['avatar']['tmp_name'];
		if(is_uploaded_file($src)){
			$isMoved = move_uploaded_file($src, $dest);
			if($isMoved == TRUE){
				echo ('File Uploaded');
				$avatar = $fileName;
			}
		}
	}
	//pr($_POST);
	unset($_POST['cpassword']);
	$_POST['hobbies'] = implode(',',$_POST['hobbies']);
	$_POST['avatar'] = $avatar;
	$_POST['added_date'] = date('Y-m-d H:i:s');
	$_POST['status'] = '1';
	$_POST['password'] = md5($_POST['password']);
	pr($_POST);
	
	$query = "INSERT INTO `users` SET ";
	foreach($_POST as $col=>$val){
		$query .= "`$col`='$val' ,";
	}
	$query = rtrim($query, ', ');
	pq($query);

	mysql_query($query)or die(mysql_error());
	$id = mysql_insert_id();

	echo "record inserted on ID : $id";


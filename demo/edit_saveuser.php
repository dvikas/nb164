<?php
	require_once('includes/functions.php');
	require_once('includes/db.php');

	$avatar = '';

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
				unlink('uploads/'.$_POST['old_avatar']);
			}
		}
	}
	//pr($_POST);
	$_POST['hobbies'] = implode(',',$_POST['hobbies']);
	unset($_POST['old_avatar']);
	
	if($avatar != '') {
		$_POST['avatar'] = $avatar;
	}
	
	$id = $_POST['id'];
	pr($_POST);
	
	$query = "UPDATE `users` SET ";
	foreach($_POST as $col=>$val){
		$query .= "`$col`='$val' ,";
	}
	$query = rtrim($query, ', ');
	$query .= " WHERE `id`='$id'"; 
	pq($query);

	mysql_query($query)or die(mysql_error());
	
	header('location:show_all_users.php');


<?php
require_once('includes/functions.php');
require_once('includes/db.php');

$avatar = ($_POST['gender']=='m') ? 'male.jpg' :'female.jpg';

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


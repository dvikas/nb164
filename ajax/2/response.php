<?php
	require_once('db.php');

sleep(3);

$user = array();

if($_POST['mode']=='select'){
	$id = $_POST['myid'];
	
		$select  = "SELECT * FROM users WHERE id=$id";
		$result = mysql_query($select) or die(mysql_error());
		$user = mysql_fetch_assoc($result);
}
echo json_encode($user);

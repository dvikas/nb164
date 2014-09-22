<?php
$arr = array();

if($_POST['mode']=='select'){
	$id = $_POST['myid'];
	
	if($id == 3){
		$arr['name'] = 'Zeev Suraski';
		$arr['age'] = 35;
		$arr['location'] = 'Isreal';
		$arr['lang'] = 'php';
	}
}
echo json_encode($arr);

<?php
	error_reporting(~E_DEPRECATED);
	@session_start();
	
	function pr($arr)
	{
		echo '<pre style="background-color:#000;color:#fff;font-size:20px;border-radius:20px;padding:20px;">';
		print_r($arr);
		echo '</pre>';
	}

	function vx($arr)
	{
		echo '<pre style="background-color:yellow;color:#0000FF;font-size:20px;border-radius:20px;padding:20px;">';
		var_export($arr);
		echo '</pre>';
	}

	function pr1($arr)
	{
		echo '<pre style="background-color:yellow;color:green;font-size:20px;border-radius:20px;padding:20px;">';
		print_r($arr);
		echo '</pre>';
	}
	function pq($arr)
	{
		echo '<div style="background-color:yellow;color:green;font-size:20px;border-radius:20px;padding:20px;">';
		print_r($arr);
		echo '</div>';
	}
	
	function getGender($gender)
	{
		if($gender){
			return $gender == 'm' ? 'Male':'Female';
		}
	}
	
	function array_cleanup($arr){
		$arr = @array_map('trim',$arr);
		$arr = @array_map('strip_tags',$arr);
		$arr = @array_map('mysql_real_escape_string',$arr);
		return $arr;
	}

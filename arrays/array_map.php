<?php
echo "\n\n--- array_map()-----\n\n";
$arr = array('one'=>'" zend "',
			'two'=>' cake ',
			'three'=>' "drupal" ',
			'four'=>' wordpress ');

$newArr =  array_map('strtoupperNtrim',$arr);

var_export($newArr);

function strtoupperNtrim($val) 
{
	$val = strtoupper($val);
	//$val = trim($val);
	$val = trim($val,'" ');
		return $val;
}
echo "\n\n--- array_keys()-----\n\n";
$keys = array_keys($newArr);
print_r($keys);
echo "\n\n--- array_values()---\n\n";
$values = array_values($newArr);
print_r($values);

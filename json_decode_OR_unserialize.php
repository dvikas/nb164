<?php

$food = 
array(
	'fruits' => array('orange', 'banana', 'apple'),
	'veggie' => array('carrot', 'collard', 'pea')
);
$var1 = serialize($food);

echo "\n ------ unserialize() ---------- \n";
print_r(unserialize($var1));
echo "\n ------ json_decode() ---------- \n";

$var2 =  json_encode($food);
print_r(json_decode($var2));

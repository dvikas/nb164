<?php

$food = array(
			'fruits' => array('orange', 'banana', 'apple'),
			'veggie' => array('carrot', 'collard', 'pea')
		);

print_r($food);
// recursive count
echo count($food, COUNT_RECURSIVE); // output 8

// normal count
echo count($food); // output 2

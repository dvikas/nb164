<?php

$food = 
array(
	'fruits' => array('orange', 'banana', 'apple'),
	'veggie' => array('carrot', 'collard', 'pea')
);
echo "\n ------ serialize() ---------- \n";

echo serialize($food);
# a:2:{
#	s:6:"fruits";
#   a:3:{i:0;s:6:"orange";
#	     i:1;s:6:"banana";
#	     i:2;s:5:"apple";}
#   s:6:"veggie";
#   a:3:{i:0;s:6:"carrot";
#        i:1;s:7:"collard";
#        i:2;s:3:"pea";}
# }

echo "\n ------ json_encode() ---------- \n";

echo json_encode($food);
#   {
#	 "fruits":["orange","banana","apple"],
#    "veggie":["carrot","collard","pea"]
#	}

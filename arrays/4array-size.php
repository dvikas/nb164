<?php
// define array
$data = array('Monday',
              'Tuesday'=>array(1,2,3,4,5),
              'Wednesday');
print_r($data);
// get array size
echo "The array has " . count($data) . " direct child elements";

echo "\n\n The array has total " . count($data,1) . " elements\n\n";

<?php

// define array
$cities = array (
  'UK' => 'London',
  1 => 'Paris',
  2 => 'Barcelona',
  3 => 'Lisbon',
  4 => 'Zurich',
  );
//print_r($cities);
$a = in_array('London123', $cities);
var_dump($a);
$b = array_search('London123', $cities);
var_dump($b);







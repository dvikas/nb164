<?php

// define array
$cities = array (
  0 => 'London',
  1 => 'Paris',
  2 => 'Barcelona',
  3 => 'Lisbon',
  4 => 'Zurich',
  );
//print_r($cities);
$a = in_array('London', $cities);
var_dump($a);
$b = array_search('Barcelona', $cities);
var_dump($b);







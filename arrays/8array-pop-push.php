<?php

$movies = array (
  10 => 'The Lion King',
  'movie' => 'Cars',
  2 => "A Bug's Life",

);

//var_export($movies);exit;
echo array_shift($movies);
//echo "\n\n";
//print_r($movies);
//exit;
echo array_pop($movies);

echo array_push($movies, 'sholay','Jai Ho!!','Happy@');
print_r($movies);

echo array_unshift($movies, 'The Incredibles');
echo "\n\n";
print_r($movies);
exit;

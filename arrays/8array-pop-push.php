<?php

$movies = array (
  10 => 'The Lion King',
  'movie' => 'Cars',
  2 => "A Bug's Life",

);

//var_export($movies);exit;
echo array_shift($movies);

print_r($movies);

echo array_pop($movies);
print_r($movies);

echo array_push($movies, 'sholay','Jai Ho!!','Happy@');
print_r($movies);

echo array_unshift($movies, 'The Incredibles');
print_r($movies);exit;

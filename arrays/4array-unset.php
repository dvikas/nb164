<?php

// define array
$meats = array(
    'fish',
    'chicken',
    'ham',
    'lamb'
);
// remove 'fish'
unset($meats[0]);

print_r($meats);

var_dump(isset($meats[2]));
var_dump(isset($meats123));
/////// Check for empty()

$a = '';
var_dump(empty($a));


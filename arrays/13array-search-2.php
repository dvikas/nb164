<?php
// define array
$cities = array(
  "France" => "Paris",
  "India" => "Delhi",
  "Nepal"=>null
);

// search array for key
$a =  array_key_exists('India', $cities);
var_dump($a);

$a =  isset($cities['India']);
var_dump($a);
//////////////////////////////////////////
$a =  array_key_exists('Nepal', $cities);
var_dump($a);
$a =  isset($cities['Nepal']);
var_dump($a);
/////////////////////////////////////////

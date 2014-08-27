<?php
// define array
$rainbow = array(
              'a'=>'violet',
              'b'=>'indigo',
              'c'=>'blue',
              'd'=>'green',
              'e'=>'yellow',
              'f'=>'orange',
              'g'=>'red');

// randomize array
shuffle($rainbow);
print_r($rainbow);
echo ($rainbow[0]);
$key =  array_rand($rainbow);
echo $rainbow[$key];

<?php
$string = 'This is Hello World';

$length = strlen($string);

for ($i=($length-1) ; $i >= 0 ; $i--) {
  echo $string[$i];
}

echo "\n";
/////////////Another way without using any sstring fx///
$string = "Hello World";
$i = 0 ;
while (isset($string[$i])) {
  $i++;
}
$i--;
while (isset($string[$i])) {
    echo $string[$i];
  $i--;
}

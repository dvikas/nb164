<?php

  $string = "weekend php in php";
  /*
   * String Length
   * */
  $strLen = strlen($string);
  echo "The length of string is $strLen";
  echo "\n------------\n";
  var_dump($string);
  echo "\n------------\n";

  /*
   * Replace php with zend
   * */
$count = 1234;
  $newString = str_replace(
  'php','zend',$string,$count);
  echo "After replace 'php' with 'zend' string is => $newString";
  echo "\n-----COUNT-------\n";
echo $count;
  echo "\n------------\n";



  /*
   * Check 'week' is present in "weekend php"
   * */
    $newString = 'week1';
    $pos = strpos($newString, 'weekend');
    var_dump($pos);

    if($pos !== false){
      echo "Success :)";
    } else {
      echo "Fail :(";
    }
    echo "\n------------\n";
    var_dump(0 == false);
    var_dump(0 === false);
    var_dump(11 == '11');
    var_dump(11 === '11');





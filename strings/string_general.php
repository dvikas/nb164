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

$hemant = 123456;
  /*
   * Replace php with zend
   * */
  $newString = str_replace(
  'php','zend',$string);
  
  echo "After replace 'php' with 'zend' string is => $newString";
  echo "\n-----COUNT-------\n";
echo $hemant;
  echo "\n------------\n";



  /*
   * Check 'week' is present in "weekend php"
   * */
    $str = 'week end php';
    $pos = strpos($str, 'week1');
    var_dump($pos);

    if($pos === false){
      echo "\n\nFAIL: :)";
    } else {
      echo "\n\nSUCCESS :(";
    }
    echo "\n------------\n";

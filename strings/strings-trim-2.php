<?php
// remove leading and trailing whitespace
// output: 'a b   c'
$str = '" Hello Php "';
var_dump($str);

$str1 =  trim($str,'#');
var_dump($str1);

$str1 =  trim($str,'" H');
var_dump($str1);

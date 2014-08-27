<?php
// remove leading and trailing whitespace
// output: 'a b   c'
$str = '  a b   c   ';
var_dump($str);

$str1 =  trim($str);
var_dump($str1);

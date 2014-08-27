<?php

$str = 'This is Hello World of String';

// 1. Length of string
echo strlen($str); // 29

// 2. Want to repeat aany string several times
echo "\n\n";
$str = 'Yes ';
echo str_repeat($str, 3); //Yes Yes Yes

// 3. very common function
//    used to replace any string in hayStack
echo "\n\n";
$str = 'weekendphp@googlegroups.com';
echo str_replace('@', ' at ', $str, $count);
echo "\n $count \n";
// 4. prints string in reverse order
echo "\n\n";
echo strrev($str); //moc.spuorgelgoog@phpdnekeew

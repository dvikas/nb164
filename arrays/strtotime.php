<?php

$string ='1 HOUR';
echo $t1 = strtotime($string);
echo "<br>\n";
$string ='2 HOUR';
echo $t2 =strtotime($string);
echo "<br>\n";
echo $t2-$t1;


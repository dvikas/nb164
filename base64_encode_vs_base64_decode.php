<?php

$str = "This is Hello and World";

$enc1 = base64_encode($str);
echo "\n\t base64_encode() \n";
echo $enc1;
echo "\n -------------------  \n";
echo "\n\t base64_decode() \n";
echo base64_decode($enc1);
echo "\n -------------------  \n";

$url = 'http://mysite.com?name=vikas dwivedi&age="34"';
$enc2 = urlencode($url);
echo "\n\t urlencode() \n";
echo $enc2;
echo "\n -------------------  \n";
echo "\n\t urldecode() \n";
echo urldecode($enc2);
echo "\n -------------------  \n";

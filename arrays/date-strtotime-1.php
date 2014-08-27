<?php
date_default_timezone_set('Asia/Kolkata');

$str = '+1 weekdays';
$seconds = strtotime($str);
//$seconds = 3600;
echo date('Y-m-d H:i:s l', $seconds);

//$seconds = 3600*24*365*43;
//echo date('Y-m-d H:i:s', $seconds);

//echo date('Y-m-d H:i:s', time());
//echo "<br>";
echo date('Y-m-d H:i:s', time()+(60*60*24*8));

echo "\n";
echo time()+(60*60);
echo "\n";
echo time();

echo "\n\n";

echo date('Y-m-d H:i:s', strtotime('Next Thursday'));

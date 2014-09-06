<?php
//echo date_default_timezone_get();

date_default_timezone_set('Asia/Kolkata');
$seconds = 24*60*60*30*12*44;
var_dump($seconds);
//$seconds = time();
$seconds = time()-(2*60*60);
var_dump($seconds);
echo date('Y-m-d H:i:s',$seconds);

echo "\n\n === strtotime()=== \n\n";
echo date('Y-m-d H:i:s',strtotime('tomorrow'));
echo "\n\n";
echo date('Y-m-d H:i:s',strtotime('+1 day'));
echo "\n\n";

echo date('Y-m-d H:i:s',strtotime('next week'));
echo "\n\n";
echo date('Y-m-d H:i:s',strtotime('+1 week'));
echo "\n\n";

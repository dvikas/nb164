<?php
// define string containing date value
// convert it to UNIX timestamp
// re-format it using date()
// output: '07 Jul 08'
 date_default_timezone_set('Asia/Kolkata');
//$str = 'Jan 1 1970 2:00:05';
$str = 'Nov 25 2012 2:25:15';
$str = '25 Nov 2012 2:25:15';
$str = '25 11 2012 2:25:15';
$str = '25-11-2012 2:25:15';
$str = date('Y-m-d H:i:s');
$seconds = strtotime($str);
//echo date('Y-m-d H:i:s', $seconds);
//echo "<br>\n";
//$str = '+1 minutes';
//$str = '+1 hour';
$str = '+1 month';
//$str = '-1 year';
//$str = '+2 Week';
$seconds = strtotime($str);
echo date('Y-m-d H:i:s', $seconds);





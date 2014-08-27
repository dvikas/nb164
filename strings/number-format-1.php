<?php

#string number_format
#( float $number [, int $decimals = 0 ] )

$number = 123456789.87654;

echo number_format($number,2);
echo "\n";
echo number_format($number, 3, '@' ,'#');

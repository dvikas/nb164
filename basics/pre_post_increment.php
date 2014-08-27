<?php

$a = 2;
$b = $a++;
echo "a=$a b=$b \n\n";

$a = 2;
$b = $a++ + $a++ + $a++;
echo "a=$a b=$b \n\n";

$a = 2;
$b = ++$a + ++$a + ++$a;
echo "a=$a b=$b \n\n";

$a = 2;
$b = ++$a + $a++ + ++$a + $a++;
echo "a=$a b=$b \n\n";


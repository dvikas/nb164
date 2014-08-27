<?php
// requirement : If sometime calculation goes wrong , but we don't require to show
// negative sign

$num = -23.55;
echo abs($num);
echo "\n";
echo round($num);
echo "\n";
echo round($num,1);
echo "\n";
echo ceil($num);
echo "\n";
echo floor($num);
echo "\n";

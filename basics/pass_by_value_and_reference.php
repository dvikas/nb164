<?php

$a =123;

function inc(&$num)
{
    $num++;
}

echo $a,"\n\n";
inc($a);
echo $a,"\n\n";

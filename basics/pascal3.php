<?php
define('NUM',15);

for($i=1 ; $i <= NUM ; $i++)
{
    for ($y = 1; $y <= NUM-$i ; $y++)
    {
        echo "#";
    }

    for ($x = 1; $x <= $i ; $x++)
    {
        echo "*";
    }
    printf("\n");
}

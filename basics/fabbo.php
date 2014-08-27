<?php

# 0 1 1 2 3 5 8 13 21
# a b c
#   a b c
#     a b c

$a = 0 ; $b = 1;
echo "$a $b ";
for($i = 1 ; $i <= 25 ; $i++)
{
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo "$c ";
}


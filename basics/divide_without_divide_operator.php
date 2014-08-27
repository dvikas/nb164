<?php
$num1 = 150; $num2 = 5; $count = 1;
while($num1 = minus($num1,$num2)){
  $count++;
}
echo $count;
function minus($a, $b)
{
  return (~$b)+1+$a;
}

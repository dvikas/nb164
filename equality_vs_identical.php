<?php
echo "\n4 == 4\t";
var_dump(4 == 4);
echo "\n4 == '4'\t";
var_dump(4 == '4');
echo "\n4 === 4\t";
var_dump(4 === 4);
echo "\n4 === '4'\t";
var_dump(4 === '4');
echo "\n0 == false\t";
var_dump(0 == false);
echo "\n0 === false\t";
var_dump(0 === false);

echo "\n---------------\n";
echo gettype(123);
echo "\n---------------\n";

echo "\n---------------\n";
echo gettype('123');
echo "\n---------------\n";

echo "\n---------------\n";
echo gettype(false);
echo "\n---------------\n";

echo "\n---------------\n";
echo gettype(123.456);
echo "\n---------------\n";

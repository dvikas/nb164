<?php
# Bitwise OPerator

/*
***********************************
& AND     1,1 is 1  rest all 0
***********************************
a   b   a.b
-------------
0   0    0
0   1    0
1   0    0
1   1    1
********************************
| OR     0,0 is 0  rest all 1
********************************
a   b   a+b
-------------
0   0    0
0   1    1
1   0    1
1   1    1
********************************
^ ExOR     Same Bit 0 Diff bit 1
********************************
a   b   a^b
-------------
0   0    0
0   1    1
1   0    1
1   1    0

********************************
~ NOT     Toggle bits 0 to 1 and 1 to 0
********************************
a      ~a
-------------
0       1
1       0

*/

var_dump(5 > 2 &  12 > 8); // T
var_dump(5 > 2 && 12 > 8); // T

var_dump(5 > 2 &  12 > 18); // F
var_dump(5 > 2 && 12 > 18); // F
